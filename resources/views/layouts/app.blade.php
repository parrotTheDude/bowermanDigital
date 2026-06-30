<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title','Bowerman Digital')</title>
  <meta name="description" content="@yield('meta_description','AI digital strategy, AI search optimisation, and AI-ready web development for Australian businesses. Stay discoverable in the age of AI.')">

  @php
    $canonical = request()->path() === '/' ? url('/') . '/' : url('/'.trim(request()->path(), '/'));
  @endphp
  <link rel="canonical" href="{{ $canonical }}" />

  @php
    $ogTitle = trim($__env->yieldContent('og_title')) ?: trim($__env->yieldContent('title')) ?: 'Bowerman Digital';
    $ogDesc  = trim($__env->yieldContent('og_description')) ?: trim($__env->yieldContent('meta_description')) ?: 'AI digital strategy, AI search optimisation, and AI-ready web development for Australian businesses. Stay discoverable in the age of AI.';
    $ogImage = trim($__env->yieldContent('og_image')) ?: asset('images/og-default.webp');
  @endphp
  <meta property="og:type" content="@yield('og_type','website')" />
  <meta property="og:site_name" content="Bowerman Digital" />
  <meta property="og:title" content="{{ $ogTitle }}" />
  <meta property="og:description" content="{{ $ogDesc }}" />
  <meta property="og:url" content="{{ $canonical }}" />
  <meta property="og:image" content="{{ $ogImage }}" />
  <meta property="og:locale" content="en_AU"/>

  <meta name="twitter:card" content="@yield('twitter_card','summary_large_image')">
  <meta name="twitter:title" content="{{ $ogTitle }}">
  <meta name="twitter:description" content="{{ $ogDesc }}">
  <meta name="twitter:image" content="{{ $ogImage }}">

  <meta name="theme-color" content="#f8f1e2"/>
  
  <!-- Standard favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

  <!-- PNG favicons -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">

  <!-- Apple iOS icon -->
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

  <!-- Android Chrome icons -->
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('android-chrome-512x512.png') }}">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="format-detection" content="telephone=no">
  <meta name="author" content="Bowerman Digital">
  <meta name="robots" content="index,follow">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">

  <link rel="preload" href="{{ asset('fonts/Fraunces-Variable.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('fonts/Karla-Variable.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('fonts/CourierPrime-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>

  @vite(['resources/js/app.js'])

  @stack('head')
  @stack('schema')

  <style>
    :where(a,button,[role="button"],input,textarea,select):focus-visible{outline:2px solid rgba(189,79,26,.9);outline-offset:2px;border-radius:.5rem}
    @media (prefers-reduced-motion: reduce){
      *{animation-duration:.01ms !important;animation-iteration-count:1 !important;transition-duration:.01ms !important;scroll-behavior:auto !important}
    }
    /* header scroll state + animated underline for nav links */
    #header.scrolled{background:rgba(248,241,226,.95) !important; box-shadow:0 8px 30px rgba(59,42,29,.12);}
    .nav-underline a{position:relative}
    .nav-underline a::after{content:""; position:absolute; left:0; right:0; bottom:-6px; height:2px; background:linear-gradient(90deg,rgba(189,79,26,0),rgba(189,79,26,.9),rgba(189,79,26,0)); transform:scaleX(0); transform-origin:center; transition:transform .35s ease}
    .nav-underline a:hover::after{transform:scaleX(1)}
  </style>
</head>
<body id="top" class="bg-cream text-ink font-sans antialiased">
  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-3 focus:left-3 rounded bg-white px-3 py-2 text-black">Skip to content</a>

  <header id="header" class="fixed inset-x-0 top-0 z-[100] border-b-2 border-ink bg-cream/90 backdrop-blur supports-[backdrop-filter]:bg-cream/80 transition-[background,box-shadow] duration-300">

    @php
      $nav = [
        ['label' => 'Our Work', 'href' => url('/portfolio'), 'match' => 'portfolio'],
        ['label' => 'Services',  'href' => url('/services'),  'match' => 'services'],
        // ['label' => 'blog',      'href' => url('/blog'),      'match' => 'blog'], // uncomment when ready
      ];
    @endphp

    {{-- bottom border removed --}}

    <div class="mx-auto max-w-7xl px-4">
      <div class="hidden md:flex items-center justify-between py-2.5">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-3 group">
          @include('partials.mark', ['class' => 'h-9 w-auto transition-transform duration-300 group-hover:scale-[1.03]'])
          <span class="font-display text-lg font-semibold tracking-tight">Bowerman <em class="not-italic font-display italic text-rust-deep">Digital</em></span>
        </a>

        <nav class="flex items-center gap-6 text-sm">
          <ul class="nav-underline flex gap-6 font-medium [&_a]:text-ink-soft [&_a:hover]:text-rust-deep [&_a:visited]:text-ink-soft">
            @foreach ($nav as $item)
              <li>
                <a href="{{ $item['href'] }}" class="{{ request()->is($item['match'].'*') ? '!text-rust-deep' : '' }}" {!! request()->is($item['match'].'*') ? 'aria-current="page"' : '' !!}>
                  {{ $item['label'] }}
                </a>
              </li>
            @endforeach
          </ul>

          <a href="{{ url('/contact') }}" class="hidden md:inline-flex btn-retro btn-retro-solid items-center !py-2.5 !px-5 text-sm">
            Start a Project
          </a>
        </nav>
      </div>
    </div>

    {{-- Mobile header --}}
    <div class="md:hidden flex items-center justify-between py-2 px-4">
    <a href="{{ url('/') }}" class="inline-flex items-center gap-2.5">
        @include('partials.mark', ['class' => 'h-9 w-auto'])
        <span class="font-display text-base font-semibold tracking-tight">Bowerman <em class="not-italic font-display italic text-rust-deep">Digital</em></span>
    </a>

    <button id="mnav-trigger"
            class="inline-flex h-11 w-11 items-center justify-center rounded-xl border-2 border-ink bg-cream active:scale-95 transition"
            aria-controls="mnav-panel"
            aria-expanded="false"
            aria-label="Open menu">
        <svg id="mnav-icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-width="1.8" stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16"/>
        </svg>
        <svg id="mnav-icon-close" xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-width="1.8" stroke-linecap="round" d="M6 6l12 12M18 6l-12 12"/>
        </svg>
    </button>
    </div>
  </header>

  <main id="main">
    @yield('content')
  </main>

  <footer class="relative z-[101] bg-ink px-6 pb-10 pt-12 text-cream">
    <div class="mx-auto max-w-6xl">

      <div class="flex flex-col items-center text-center gap-8">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="group inline-flex items-center gap-3">
          @include('partials.mark', ['main' => '#f8f1e2', 'class' => 'h-10 w-auto transition-transform duration-300 group-hover:scale-[1.03]'])
          <span class="font-display text-lg font-semibold text-cream">Bowerman <em class="not-italic font-display italic text-mustard">Digital</em></span>
        </a>

        {{-- Navigate --}}
        <nav>
          <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm">
            <li><a href="{{ url('/') }}" class="text-cream/75 transition hover:text-mustard">Home</a></li>
            <li><a href="{{ url('/portfolio') }}" class="text-cream/75 transition hover:text-mustard">Our Work</a></li>
            <li><a href="{{ url('/services') }}" class="text-cream/75 transition hover:text-mustard">Services</a></li>
            <li><a href="{{ url('/contact') }}" class="text-cream/75 transition hover:text-mustard">Start a Project</a></li>
          </ul>
        </nav>

        {{-- Get in touch --}}
        <div class="flex flex-col items-center gap-2 text-sm">
          <a href="mailto:hello@bowermandigital.com" class="font-mono text-cream/75 transition hover:text-mustard">hello@bowermandigital.com</a>
          <span class="text-cream/60">Sydney, Australia</span>
        </div>

        {{-- Bottom --}}
        <div class="h-px w-full bg-cream/15"></div>
        <div class="-mt-3 flex flex-col items-center gap-3 sm:flex-row sm:justify-between sm:w-full">
          <p class="font-mono text-xs text-cream/60">&copy; {{ date('Y') }} Bowerman Digital &middot; <a href="{{ url('/privacy') }}" class="transition hover:text-mustard">Privacy</a></p>
          <div class="flex items-center gap-1.5 font-mono text-xs text-cream/60">
            <span class="inline-block h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            Open for new projects
          </div>
        </div>

      </div>

    </div>
  </footer>

  @once
    <div class="hidden opacity-100 translate-x-0 pointer-events-auto"></div>
  @endonce

  {{-- Mobile nav: backdrop + panel --}}
  <div id="mnav-root" class="md:hidden">
    <div id="mnav-backdrop"
        class="fixed inset-0 z-[9998] bg-ink/50 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <aside id="mnav-panel"
          class="fixed inset-y-0 right-0 z-[9999] w-[86%] max-w-[20rem]
                  translate-x-full transition-transform duration-300 will-change-transform
                  bg-cream border-l-2 border-ink
                  px-5 pt-4 pb-[max(1rem,env(safe-area-inset-bottom))] flex flex-col">
      <div class="flex items-center justify-end">
        <button id="mnav-close"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border-2 border-ink bg-cream"
                aria-label="Close menu">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-width="1.8" stroke-linecap="round" d="M6 6l12 12M18 6l-12 12"/>
          </svg>
        </button>
      </div>

      <nav class="mt-6 grow overflow-y-auto">
        <ul class="space-y-1 text-base">
          <li class="md:hidden">
            <a href="{{ url('/') }}"
              class="flex items-center justify-between rounded-xl px-4 py-3 text-ink hover:bg-ink/5 focus:bg-ink/10 focus:outline-none">
              <span>Home</span>
              <span class="text-ink-faint">→</span>
            </a>
          </li>
          @foreach ($nav as $item)
            <li>
              <a href="{{ $item['href'] }}"
                class="flex items-center justify-between rounded-xl px-4 py-3 text-ink hover:bg-ink/5 focus:bg-ink/10 focus:outline-none">
                <span class="capitalize">{{ $item['label'] }}</span>
                <span class="text-ink-faint">→</span>
              </a>
            </li>
          @endforeach
          <li class="pt-2">
            <a href="{{ url('/contact') }}"
              class="btn-retro btn-retro-solid flex items-center justify-between !rounded-xl">
              <span class="font-medium">Start a Project</span>
              <span>→</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
  </div>

  <script>
  (() => {
    const trigger   = document.getElementById('mnav-trigger');
    const closeBtn  = document.getElementById('mnav-close');
    const panel     = document.getElementById('mnav-panel');
    const backdrop  = document.getElementById('mnav-backdrop');
    const iconOpen  = document.getElementById('mnav-icon-open');
    const iconClose = document.getElementById('mnav-icon-close');

    if (!trigger || !panel || !backdrop) return;

    let isOpen = false;
    let lastFocused = null;
    let scrollY = 0;

    const focusables = () =>
      panel.querySelectorAll('a[href],button:not([disabled]),[tabindex]:not([tabindex="-1"])');

    function lockScroll(lock) {
      if (lock) {
        // iOS-friendly body lock
        scrollY = window.scrollY || document.documentElement.scrollTop;
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollY}px`;
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';
      } else {
        // restore
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';
        window.scrollTo(0, scrollY);
      }
    }

    function setIcons(open) {
      if (iconOpen && iconClose) {
        iconOpen.classList.toggle('hidden', open);
        iconClose.classList.toggle('hidden', !open);
      }
    }

    function openMenu() {
      if (isOpen) return;
      isOpen = true;
      lastFocused = document.activeElement;

      trigger.setAttribute('aria-expanded', 'true');
      backdrop.classList.remove('opacity-0', 'pointer-events-none');
      backdrop.classList.add('opacity-100', 'pointer-events-auto');
      panel.classList.remove('translate-x-full');
      panel.classList.add('translate-x-0');

      lockScroll(true);
      setIcons(true);

      const f = focusables();
      if (f.length) f[0].focus({ preventScroll: true });
    }

    function closeMenu() {
      if (!isOpen) return;
      isOpen = false;

      trigger.setAttribute('aria-expanded', 'false');
      backdrop.classList.add('opacity-0', 'pointer-events-none');
      backdrop.classList.remove('opacity-100', 'pointer-events-auto');
      panel.classList.add('translate-x-full');
      panel.classList.remove('translate-x-0');

      lockScroll(false);
      setIcons(false);

      if (lastFocused) lastFocused.focus({ preventScroll: true });
    }

    // Toggle
    trigger.addEventListener('click', () => (isOpen ? closeMenu() : openMenu()));

    // Click-away / close button
    backdrop.addEventListener('click', closeMenu, { passive: true });
    closeBtn?.addEventListener('click', closeMenu);

    // Close when tapping any link in the panel
    panel.addEventListener('click', (e) => {
      const a = e.target.closest('a[href]');
      if (!a) return;
      // allow normal navigation, but close immediately for SPA feel
      closeMenu();
    });

    // Keyboard: ESC + focus trap
    document.addEventListener('keydown', (e) => {
      if (!isOpen) return;

      if (e.key === 'Escape') {
        e.preventDefault();
        closeMenu();
        return;
      }

      if (e.key === 'Tab') {
        const f = Array.from(focusables());
        if (!f.length) return;
        const first = f[0], last = f[f.length - 1];
        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault(); last.focus(); 
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault(); first.focus();
        }
      }
    }, { capture: true });

    // Swipe-to-close (left swipe)
    let touchStartX = 0;
    panel.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].clientX;
    }, { passive: true });
    panel.addEventListener('touchend', (e) => {
      const dx = e.changedTouches[0].clientX - touchStartX;
      if (dx < -60) closeMenu();
    }, { passive: true });

    // Auto-close if resized to md and beyond (keeps state sane)
    const mq = window.matchMedia('(min-width: 768px)');
    mq.addEventListener?.('change', (ev) => { if (ev.matches) closeMenu(); });

    // Defensive: close on pagehide (iOS back/forward cache quirks)
    window.addEventListener('pagehide', closeMenu);
  })();
  </script>

  <!-- 100% privacy-first analytics -->
  <script data-collect-dnt="true" async src="https://scripts.simpleanalyticscdn.com/latest.js"></script>
  <noscript><img src="https://queue.simpleanalyticscdn.com/noscript.gif?collect-dnt=true" alt="" referrerpolicy="no-referrer-when-downgrade"/></noscript>

  @stack('scripts')
</body>
</html>