<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Validator;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            // form fields
            'name'         => ['required','string','max:120','regex:/^[a-zA-Z \'-]+$/u'],
            'email'        => ['required','email','max:160'],
            'company'      => ['nullable','string','max:160'],
            'phone'        => ['nullable','string','max:40'],
            'project_type' => ['required','string','max:80'],
            'budget'       => ['required','string','max:40'],
            'timeline'     => ['required','string','max:40'],
            'message'      => ['required','string','max:5000'],
            'consent'      => ['accepted'],
            // recaptcha token (client-side)
            'recaptcha_token' => ['required','string'],
        ];
    }

    public function messages(): array
    {
        return [
            'recaptcha_token.required' => 'reCAPTCHA validation failed. Please refresh and try again.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function (Validator $validator) {
            $token  = (string) $this->input('recaptcha_token');
            $secret = config('services.recaptcha.secret_key');

            if (!$token || !$secret) {
                $validator->errors()->add('recaptcha_token', 'reCAPTCHA configuration missing.');
                return;
            }

            try {
                $resp = Http::asForm()->post(
                    'https://www.google.com/recaptcha/api/siteverify',
                    ['secret' => $secret, 'response' => $token, 'remoteip' => $this->ip()]
                );

                if (!$resp->ok()) {
                    $validator->errors()->add('recaptcha_token', 'reCAPTCHA request failed.');
                    return;
                }

                $data     = $resp->json();
                $success  = (bool)($data['success'] ?? false);
                $score    = (float)($data['score'] ?? 0);
                $action   = (string)($data['action'] ?? '');
                $minScore = (float)config('services.recaptcha.min_score', 0.5);

                if (!$success) {
                    $validator->errors()->add('recaptcha_token', 'reCAPTCHA failed.');
                    return;
                }

                // Optional: enforce action matches what we executed on the client
                if ($action !== 'contact') {
                    $validator->errors()->add('recaptcha_token', 'reCAPTCHA action mismatch.');
                    return;
                }

                if ($score < $minScore) {
                    $validator->errors()->add('recaptcha_token', 'Looks like automated traffic. Please try again.');
                    return;
                }
            } catch (\Throwable $e) {
                // Don’t break the whole request; show a friendly message
                $validator->errors()->add('recaptcha_token', 'Unable to validate reCAPTCHA. Please try again.');
            }
        });
    }
}