<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Str;
use Postmark\PostmarkClient;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
        // normalised inputs (works with old() on redirect)
        $name     = Str::of($request->string('name'))->title()->value();
        $email    = Str::of($request->string('email'))->lower()->trim()->value();
        $phone    = preg_replace('/[^0-9+() \-]/', '', (string) $request->string('phone'));
        $company  = (string) $request->string('company');
        $ptype    = (string) $request->string('project_type');
        $budget   = (string) $request->string('budget');
        $timeline = (string) $request->string('timeline');
        $message  = (string) $request->string('message');

        // Postmark setup — all values from config (no direct env() calls)
        $token = config('services.postmark.token');

        if (empty($token)) {
            logger()->error('Postmark token is not configured');
            return back()->withErrors([
                'status' => 'There was an issue sending your message. Please try again.',
            ])->withInput();
        }

        $client  = new PostmarkClient($token);
        $from    = config('services.postmark.from', 'hello@bowermandigital.com');
        $toOwner = config('services.postmark.owner_to', 'hello@bowermandigital.com');
        $stream  = config('services.postmark.stream', 'outbound');

        $tplConfirm = (int) config('services.postmark.confirmation_template', 41653909);
        $tplOwner   = (int) config('services.postmark.enquiries_template', 41653895);

        // template model
        $model = [
            'product_name' => config('app.name', 'Bowerman Digital'),
            'submitted_at' => now()->format('H:i d-m-Y'),
            'name'         => $name,
            'email'        => $email,
            'phone'        => $phone,
            'company'      => $company,
            'project_type' => $ptype,
            'budget'       => $budget,
            'timeline'     => $timeline,
            'message'      => $message,
            'product_url'  => url('/'),
            'sender_name'  => config('app.sender_name', 'Jacob'),
            'admin_url'    => url('/admin'),
        ];

        // 1) Customer confirmation (don't fail request if this hiccups)
        try {
            $client->sendEmailWithTemplate(
                $from, $email, $tplConfirm, $model, true, 'enquiry-confirmation', true,
                null, null, null, null, null, 'None', null, $stream
            );
        } catch (\Postmark\Models\PostmarkException $e) {
            logger()->warning('Postmark confirmation failed', ['error' => $e->getMessage()]);
        } catch (\Exception $e) {
            logger()->warning('Postmark confirmation failed', ['error' => $e->getMessage()]);
        }

        // 2) Owner notification (do fail if this hiccups)
        try {
            $client->sendEmailWithTemplate(
                $from, $toOwner, $tplOwner, $model, true, 'contact-form-enquiry', true,
                null, null, null, null, null, 'None', null, $stream
            );
        } catch (\Postmark\Models\PostmarkException $e) {
            logger()->error('Postmark owner notification failed', ['error' => $e->getMessage()]);
            return back()->withErrors([
                'status' => 'There was an issue sending your message. Please try again.',
            ])->withInput();
        } catch (\Exception $e) {
            logger()->error('Postmark owner notification failed', ['error' => $e->getMessage()]);
            return back()->withErrors([
                'status' => 'There was an issue sending your message. Please try again.',
            ])->withInput();
        }

        return back()->with('status', "Thanks! We've received your enquiry and will reply within 1 business day.");
    }
}
