@extends('layouts.app')

@section('title', 'Contact | Bowerman Digital')
@section('meta_description', 'Ready to grow? Contact Bowerman Digital for web, SEO, and email strategy. Based in Sydney, we partner with one business at a time.')

@push('head')
  <style>
    .grecaptcha-badge { visibility: hidden !important; }
    #submitBtn[data-loading="true"] [data-when="idle"] { display: none; }
    #submitBtn[data-loading="true"] [data-when="loading"] { display: inline-flex; }
  </style>
@endpush

@push('schema')
  @php
    $schemaContact = [
      '@'.'context' => 'https://schema.org',
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
{{-- ─── Hero + Form ─── --}}
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-24 pb-16 md:pt-40">
    {{-- Header --}}
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Let's talk</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Tell us about your project</h1>
      <p class="mt-4 text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">We usually reply within one business day. Share a few details and we'll get back with next steps.</p>
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

    {{-- Two-column: form + trust signals --}}
    <div class="mx-auto mt-6 max-w-5xl grid grid-cols-1 gap-10 lg:grid-cols-[1fr_320px] lg:items-start">

      {{-- Form card --}}
      <div class="relative opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <div class="absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-cyan-400/40 via-fuchsia-400/30 to-emerald-400/40 blur-[2px]"></div>

        <div class="relative rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur md:p-8">
          <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" novalidate>
            @csrf

            {{-- Name + Email + Phone --}}
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

              {{-- Phone (optional, spans full width) --}}
              @php $hasPhoneErr = $errors->has('phone'); @endphp
              <div class="md:col-span-2">
                <label for="phone" class="block text-xs uppercase tracking-wide text-white/60">Phone <span class="normal-case text-white/40">(optional)</span></label>
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

            {{-- Message --}}
            @php $hasMsgErr = $errors->has('message'); @endphp
            <div class="mt-5">
              <label for="message" class="block text-xs uppercase tracking-wide text-white/60">Message *</label>
              <textarea
                id="message"
                name="message"
                rows="5"
                required
                class="mt-2 w-full rounded-xl border {{ $hasMsgErr ? 'border-red-400/60 focus:border-red-400/60' : 'border-white/10 focus:border-cyan-400/40' }} bg-white/5 px-4 py-3 text-white placeholder-white/40 outline-none transition"
                placeholder="Tell us about your project…"
                @if($hasMsgErr) aria-invalid="true" aria-describedby="message-error" @endif
              >{{ old('message') }}</textarea>
              @error('message')
                <p id="message-error" class="mt-2 text-sm text-red-300">{{ $message }}</p>
              @enderror
            </div>

            {{-- Honeypot — hidden from real users, bots will fill it --}}
            <div aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;height:0;width:0;overflow:hidden;">
              <label for="website">Website</label>
              <input type="text" name="website" id="website" tabindex="-1" autocomplete="off" value="">
            </div>

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

      {{-- Trust signals sidebar --}}
      <div class="flex flex-col gap-5 lg:sticky lg:top-28">

        {{-- What happens next --}}
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5 backdrop-blur-sm opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="200">
          <h2 class="text-sm font-semibold text-white">What happens next</h2>
          <ol class="mt-3 space-y-3">
            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-cyan-400/10 text-xs font-bold text-cyan-300">1</span>
              <p class="text-sm text-white/60">We'll review your brief within one business day.</p>
            </li>
            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-cyan-400/10 text-xs font-bold text-cyan-300">2</span>
              <p class="text-sm text-white/60">We'll reply with questions or a free proposal.</p>
            </li>
            <li class="flex items-start gap-3">
              <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-cyan-400/10 text-xs font-bold text-cyan-300">3</span>
              <p class="text-sm text-white/60">Once aligned, we kick off and keep you in the loop weekly.</p>
            </li>
          </ol>
        </div>

        {{-- Quick facts --}}
        <div class="rounded-2xl border border-white/10 bg-white/[0.03] p-5 backdrop-blur-sm opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
          <h2 class="text-sm font-semibold text-white">Why Bowerman Digital</h2>
          <ul class="mt-3 space-y-2.5">
            <li class="flex items-start gap-2.5">
              <svg class="mt-0.5 h-4 w-4 shrink-0 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/60">One client at a time — full focus on you</span>
            </li>
            <li class="flex items-start gap-2.5">
              <svg class="mt-0.5 h-4 w-4 shrink-0 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/60">Sydney-based, available AEST hours</span>
            </li>
            <li class="flex items-start gap-2.5">
              <svg class="mt-0.5 h-4 w-4 shrink-0 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/60">No lock-in contracts — month to month</span>
            </li>
            <li class="flex items-start gap-2.5">
              <svg class="mt-0.5 h-4 w-4 shrink-0 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
              <span class="text-sm text-white/60">Transparent pricing, no hidden fees</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

{{-- ─── Direct Contact ─── --}}
<section class="relative bg-zinc-900">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

  <div class="relative z-10 mx-auto max-w-5xl px-6 pt-8 pb-10 md:pt-10 md:pb-14">
    <div class="grid grid-cols-1 gap-10 md:grid-cols-3">

      {{-- Email --}}
      <div class="text-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-400/10">
          <svg class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
        </div>
        <h2 class="mt-3 text-sm font-semibold text-white">Email us</h2>
        <a href="mailto:hello@bowermandigital.com" class="mt-1 block text-sm text-cyan-300 hover:text-cyan-200 transition-colors no-underline">hello@bowermandigital.com</a>
      </div>

      {{-- Location --}}
      <div class="text-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-400/10">
          <svg class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
        </div>
        <h2 class="mt-3 text-sm font-semibold text-white">Based in</h2>
        <p class="mt-1 text-sm text-white/60">Sydney, Australia</p>
      </div>

      {{-- Response time --}}
      <div class="text-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-400/10">
          <svg class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h2 class="mt-3 text-sm font-semibold text-white">Response time</h2>
        <p class="mt-1 text-sm text-white/60">Within 1 business day</p>
      </div>

    </div>
  </div>
</section>
@endsection

@push('scripts')
  <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}" async defer></script>
  <script>
    (function () {
      const siteKey = "{{ config('services.recaptcha.site_key') }}";
      const form = document.getElementById('contact-form');
      if (!form || !siteKey) return;

      const tokenInput = document.getElementById('recaptcha_token');
      const btn = document.getElementById('submitBtn');
      let submitting = false;

      function showInlineError(msg) {
        let el = document.getElementById('recaptcha-error');
        if (!el) {
          el = document.createElement('div');
          el.id = 'recaptcha-error';
          el.className = 'mt-3 rounded-xl border border-red-400/30 bg-red-400/10 px-4 py-3 text-sm text-red-200';
          el.setAttribute('role', 'alert');
          btn.parentNode.insertBefore(el, btn.nextSibling);
        }
        el.textContent = msg;
      }

      function setLoading(on) {
        if (!btn) return;
        btn.dataset.loading = on ? 'true' : 'false';
        btn.disabled = on;
        btn.setAttribute('aria-busy', on ? 'true' : 'false');
      }

      form.addEventListener('submit', function (e) {
        if (submitting || (tokenInput && tokenInput.value)) return;

        e.preventDefault();
        setLoading(true);

        const prevErr = document.getElementById('recaptcha-error');
        if (prevErr) prevErr.remove();

        if (typeof grecaptcha === 'undefined') {
          setLoading(false);
          showInlineError('reCAPTCHA failed to load. Please refresh the page and try again.');
          return;
        }

        submitting = true;

        grecaptcha.ready(function () {
          grecaptcha.execute(siteKey, { action: 'contact' }).then(function (token) {
            if (tokenInput) tokenInput.value = token;
            form.submit();
          }).catch(function () {
            submitting = false;
            setLoading(false);
            showInlineError('reCAPTCHA verification failed. Please refresh the page and try again.');
          });
        });
      }, { capture: true });
    })();

    /* ── Reveal animations ── */
    (function(){
      if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        document.querySelectorAll('.reveal').forEach(el => {
          el.style.opacity = '1';
          el.style.transform = 'none';
        });
        return;
      }

      const isMobile = window.innerWidth < 768;

      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const baseDelay = parseInt(el.getAttribute('data-delay') || '0', 10);
            const delay = isMobile ? Math.min(baseDelay * 0.4, 80) : baseDelay;
            setTimeout(() => {
              el.style.opacity = '1';
              el.style.transform = 'none';
            }, delay);
            io.unobserve(el);
          }
        });
      }, { threshold: isMobile ? 0.05 : 0.2 });

      document.querySelectorAll('.reveal').forEach(el => {
        if (isMobile) {
          el.style.transitionDuration = '900ms';
          el.style.transform = 'translateY(12px)';
        }
        io.observe(el);
      });
    })();
  </script>
@endpush
