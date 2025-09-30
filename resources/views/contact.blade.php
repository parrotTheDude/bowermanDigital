@extends('layouts.app')

@section('title', 'Contact | Bowerman Digital')
@section('meta_description', 'Ready to grow? Contact Bowerman Digital for web, SEO, and email strategy. Based in Sydney, we partner with one business at a time.')

@push('head')
  <meta property="og:title" content="Contact | Bowerman Digital">
  <meta property="og:description" content="Reach out for web, SEO, or email strategy. Sydney-based, boutique and hands-on.">
  <meta property="og:url" content="{{ url('/contact') }}">
  <meta property="og:image" content="{{ asset('images/og-default.jpg') }}">
  <style>
    .grecaptcha-badge { visibility: hidden !important; }
    #submitBtn[data-loading="true"] [data-when="idle"] { display: none; }
    #submitBtn[data-loading="true"] [data-when="loading"] { display: inline-flex; }
  </style>
@endpush

@push('schema')
  @php
    $schemaContact = [
      '@context' => 'https://schema.org',
      '@type'    => 'ContactPage',
      'name'     => 'Contact | Bowerman Digital',
      'url'      => url('/contact'),
      'about'    => [
        '@type' => 'Organization',
        'name'  => 'Bowerman Digital',
        'url'   => url('/'),
        'logo'  => asset('images/logo.webp'),
      ],
    ];
  @endphp
  <script type="application/ld+json">
    {!! json_encode($schemaContact, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
  </script>
@endpush

@section('content')
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-32 pb-16 md:pt-40">
    {{-- Header --}}
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">Let’s talk</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl">Tell us about your project</h1>
      <p class="mt-4 text-white/70">We usually reply within one business day. Share a few details and we’ll get back with next steps.</p>
    </div>

    {{-- Success banner --}}
    @if(session('status'))
      <div class="mx-auto mt-8 max-w-2xl rounded-xl border border-emerald-400/30 bg-emerald-400/10 px-5 py-4 text-emerald-200">
        {{ session('status') }}
      </div>
    @endif

    {{-- Error summary --}}
    @if($errors->any())
      <div class="mx-auto mt-8 max-w-2xl rounded-xl border border-red-400/30 bg-red-400/10 px-5 py-4">
        <p class="font-medium text-red-200">Please fix the errors below and resubmit.</p>
        <ul class="mt-2 list-disc space-y-1 pl-5 text-red-200/90">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Form card --}}
    <div class="mx-auto mt-10 max-w-3xl">
      <div class="relative">
        <div class="absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-cyan-400/40 via-fuchsia-400/30 to-emerald-400/40 blur-[2px]"></div>

        <div class="relative rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur md:p-8">
          <form action="{{ route('contact.submit') }}" method="POST" novalidate>
            @csrf

            {{-- Name + Email --}}
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
              {{-- Name --}}
              @php $hasNameErr = $errors->has('name'); @endphp
              <div>
                <label for="name" class="block text-xs uppercase tracking-wide text-white/60">Name *</label>
                <input
                  id="name"
                  name="name"
                  type="text"
                  required
                  value="{{ old('name') }}"
                  class="mt-2 w-full rounded-xl border {{ $hasNameErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white placeholder-white/40 outline-none transition"
                  placeholder="Name"
                  @if($hasNameErr) aria-invalid="true" aria-describedby="name-error" @endif
                >
                @error('name')
                  <p id="name-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>

              {{-- Email --}}
              @php $hasEmailErr = $errors->has('email'); @endphp
              <div>
                <label for="email" class="block text-xs uppercase tracking-wide text-white/60">Email *</label>
                <input
                  id="email"
                  name="email"
                  type="email"
                  required
                  value="{{ old('email') }}"
                  class="mt-2 w-full rounded-xl border {{ $hasEmailErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white placeholder-white/40 outline-none transition"
                  placeholder="you@company.com"
                  @if($hasEmailErr) aria-invalid="true" aria-describedby="email-error" @endif
                >
                @error('email')
                  <p id="email-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>

              {{-- Company --}}
              @php $hasCompanyErr = $errors->has('company'); @endphp
              <div>
                <label for="company" class="block text-xs uppercase tracking-wide text-white/60">Company</label>
                <input
                  id="company"
                  name="company"
                  type="text"
                  value="{{ old('company') }}"
                  class="mt-2 w-full rounded-xl border {{ $hasCompanyErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white outline-none transition"
                  placeholder="Company"
                  @if($hasCompanyErr) aria-invalid="true" aria-describedby="company-error" @endif
                >
                @error('company')
                  <p id="company-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>

              {{-- Phone --}}
              @php $hasPhoneErr = $errors->has('phone'); @endphp
              <div>
                <label for="phone" class="block text-xs uppercase tracking-wide text-white/60">Phone</label>
                <input
                  id="phone"
                  name="phone"
                  type="tel"
                  value="{{ old('phone') }}"
                  class="mt-2 w-full rounded-xl border {{ $hasPhoneErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white outline-none transition"
                  placeholder="+61 ..."
                  @if($hasPhoneErr) aria-invalid="true" aria-describedby="phone-error" @endif
                >
                @error('phone')
                  <p id="phone-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>
            </div>

            {{-- Project basics --}}
            <div class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-3">
              {{-- Project type --}}
              @php $hasTypeErr = $errors->has('project_type'); @endphp
              <div>
                <label for="project_type" class="block text-xs uppercase tracking-wide text-white/60">Project type</label>
                <select
                  id="project_type"
                  name="project_type"
                  class="mt-2 w-full rounded-xl border {{ $hasTypeErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white outline-none transition"
                  @if($hasTypeErr) aria-invalid="true" aria-describedby="project_type-error" @endif
                >
                  <option class="bg-black" value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select…</option>
                  <option class="bg-black" value="Website"         @selected(old('project_type')==='Website')>Website</option>
                  <option class="bg-black" value="SEO"             @selected(old('project_type')==='SEO')>SEO</option>
                  <option class="bg-black" value="Email Marketing" @selected(old('project_type')==='Email Marketing')>Email Marketing</option>
                  <option class="bg-black" value="Other"           @selected(old('project_type')==='Other')>Other</option>
                </select>
                @error('project_type')
                  <p id="project_type-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>

              {{-- Budget --}}
              @php $hasBudgetErr = $errors->has('budget'); @endphp
              <div>
                <label for="budget" class="block text-xs uppercase tracking-wide text-white/60">Budget (AUD)</label>
                <select
                  id="budget"
                  name="budget"
                  class="mt-2 w-full rounded-xl border {{ $hasBudgetErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white outline-none transition"
                  @if($hasBudgetErr) aria-invalid="true" aria-describedby="budget-error" @endif
                >
                  <option class="bg-black" value="" disabled {{ old('budget') ? '' : 'selected' }}>Select…</option>
                  <option class="bg-black" value="< $2k"     @selected(old('budget')==='< $2k')>&lt; $2k</option>
                  <option class="bg-black" value="$2k–$5k"  @selected(old('budget')==='$2k–$5k')>$2k–$5k</option>
                  <option class="bg-black" value="$5k–$10k" @selected(old('budget')==='$5k–$10k')>$5k–$10k</option>
                  <option class="bg-black" value="$10k+"    @selected(old('budget')==='$10k+')>$10k+</option>
                </select>
                @error('budget')
                  <p id="budget-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>

              {{-- Timeline --}}
              @php $hasTimelineErr = $errors->has('timeline'); @endphp
              <div>
                <label for="timeline" class="block text-xs uppercase tracking-wide text-white/60">Timeline</label>
                <select
                  id="timeline"
                  name="timeline"
                  class="mt-2 w-full rounded-xl border {{ $hasTimelineErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white outline-none transition"
                  @if($hasTimelineErr) aria-invalid="true" aria-describedby="timeline-error" @endif
                >
                  <option class="bg-black" value="" disabled {{ old('timeline') ? '' : 'selected' }}>Select…</option>
                  <option class="bg-black" value="ASAP"       @selected(old('timeline')==='ASAP')>ASAP</option>
                  <option class="bg-black" value="1–2 months" @selected(old('timeline')==='1–2 months')>1–2 months</option>
                  <option class="bg-black" value="3+ months"  @selected(old('timeline')==='3+ months')>3+ months</option>
                </select>
                @error('timeline')
                  <p id="timeline-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
                @enderror
              </div>
            </div>

            {{-- Message --}}
            @php $hasMsgErr = $errors->has('message'); @endphp
            <div class="mt-5">
              <label for="message" class="block text-xs uppercase tracking-wide text-white/60">What are you trying to achieve? *</label>
              <textarea
                id="message"
                name="message"
                rows="6"
                required
                class="mt-2 w-full rounded-xl border {{ $hasMsgErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white placeholder-white/40 outline-none transition"
                placeholder="Give us a quick overview of the goals, scope, and any links…"
                @if($hasMsgErr) aria-invalid="true" aria-describedby="message-error" @endif
              >{{ old('message') }}</textarea>
              @error('message')
                <p id="message-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
              @enderror
            </div>

            {{-- Consent --}}
            @php $hasConsentErr = $errors->has('consent'); @endphp
            <div class="mt-5 flex items-start gap-3">
              <input
                id="consent"
                name="consent"
                type="checkbox"
                value="1"
                required
                {{ old('consent') ? 'checked' : '' }}
                class="mt-1 h-5 w-5 rounded border {{ $hasConsentErr ? 'border-red-400/60' : 'border-white/20' }} bg-white/5 text-cyan-400 focus:ring-0 focus:outline-none"
                @if($hasConsentErr) aria-invalid="true" aria-describedby="consent-error" @endif
              >
              <label for="consent" class="text-sm text-white/80">I agree to be contacted about my enquiry.</label>
            </div>
            @error('consent')
              <p id="consent-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
            @enderror

            <input type="hidden" name="recaptcha_token" id="recaptcha_token">

            {{-- Actions --}}
            <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
              <button
                type="submit"
                id="submitBtn"
                class="glow-on-hover !w-full sm:w-auto relative inline-flex items-center justify-center gap-2 rounded-xl px-6 py-3 disabled:opacity-60 disabled:cursor-not-allowed"
                aria-live="polite"
                aria-busy="false"
                data-loading="false"
              >
                {{-- Idle state --}}
                <span data-when="idle">Send enquiry</span>

                {{-- Loading state --}}
                <span data-when="loading" class="hidden items-center gap-2">
                  <svg class="h-4 w-4 animate-spin" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="4" opacity=".25"/>
                    <path d="M22 12a10 10 0 0 1-10 10" fill="none" stroke="currentColor" stroke-width="4"/>
                  </svg>
                  Sending…
                </span>
              </button>
            </div>
            <p class="mt-3 text-xs text-white/40">
              This site is protected by reCAPTCHA and the Google
              <a href="https://policies.google.com/privacy" class="underline" rel="noopener noreferrer">Privacy Policy</a> and
              <a href="https://policies.google.com/terms" class="underline" rel="noopener noreferrer">Terms of Service</a> apply.
            </p>
          </form>
        </div>
      </div>
    </div>

  </div>
</section>

@push('scripts')
  <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}" async defer></script>
  <script>
    (function () {
      const siteKey = "{{ config('services.recaptcha.site_key') }}";
      const form = document.querySelector('form[action="{{ route('contact.submit') }}"]');
      if (!form || !siteKey) return;

      const tokenInput = document.getElementById('recaptcha_token');
      const btn = document.getElementById('submitBtn');
      let submitting = false;

      function setLoading(on) {
        if (!btn) return;
        btn.dataset.loading = on ? 'true' : 'false';
        btn.disabled = on;
        btn.setAttribute('aria-busy', on ? 'true' : 'false');
      }

      form.addEventListener('submit', function (e) {
        // If we already have a token (e.g., BFCache resubmit), let it submit normally
        if (submitting || (tokenInput && tokenInput.value)) return;

        e.preventDefault();
        setLoading(true);

        if (typeof grecaptcha === 'undefined') {
          setLoading(false);
          alert('reCAPTCHA failed to load. Please try again.');
          return;
        }

        submitting = true;

        grecaptcha.ready(function () {
          grecaptcha.execute(siteKey, { action: 'contact' }).then(function (token) {
            if (tokenInput) tokenInput.value = token;
            form.submit(); // normal POST
          }).catch(function () {
            submitting = false;
            setLoading(false);
            alert('reCAPTCHA failed to load. Please try again.');
          });
        });
      }, { capture: true });
    })();
  </script>
@endpush
@endsection