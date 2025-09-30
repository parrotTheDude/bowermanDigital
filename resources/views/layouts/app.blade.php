<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title','Bowerman Digital')</title>
  <meta name="description" content="@yield('meta_description','Web design & digital marketing with clean code and measurable results.')">

  @php
    $canonical = url(request()->path() === '/' ? '/' : '/'.trim(request()->path(), '/'));
  @endphp
  <link rel="canonical" href="{{ $canonical }}" />

  <meta property="og:type" content="@yield('og_type','website')" />
  <meta property="og:site_name" content="@yield('og_site_name','Bowerman Digital')" />
  <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title')) ?: 'Bowerman Digital')" />
  <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('meta_description')) ?: 'Web design & digital marketing with clean code and measurable results.')" />
  <meta property="og:url" content="{{ $canonical }}" />
  <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))" />
  <meta property="og:locale" content="en_AU"/>

  <meta name="twitter:card" content="@yield('twitter_card','summary_large_image')">
  <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('title')) ?: 'Bowerman Digital')">
  <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('meta_description')) ?: 'Web design & digital marketing with clean code and measurable results.')">
  <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-default.jpg'))">

  <meta name="theme-color" content="#000"/>
  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" href="{{ asset('icons/touchIcon.webp') }}"/>

  <link rel="preload" href="{{ asset('fonts/SpaceGrotesk-VariableFont_wght.ttf') }}" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="{{ asset('fonts/ShareTechMono-Regular.ttf') }}" as="font" type="font/ttf" crossorigin>

  @vite(['resources/js/app.js'])

  @stack('head')
  @stack('schema')

  <style>
    :where(a,button,[role="button"],input,textarea,select):focus-visible{outline:2px solid rgba(34,211,238,.9);outline-offset:2px;border-radius:.5rem}
    @media (prefers-reduced-motion: reduce){
      *{animation-duration:.01ms !important;animation-iteration-count:1 !important;transition-duration:.01ms !important;scroll-behavior:auto !important}
    }
    /* header scroll state + animated underline for nav links */
    #header.scrolled{background:rgba(0,0,0,.85) !important; box-shadow:0 8px 30px rgba(0,0,0,.25);}
    .nav-underline a{position:relative}
    .nav-underline a::after{content:""; position:absolute; left:0; right:0; bottom:-6px; height:2px; background:linear-gradient(90deg,rgba(34,211,238,.0),rgba(34,211,238,.9),rgba(34,211,238,.0)); transform:scaleX(0); transform-origin:center; transition:transform .35s ease}
    .nav-underline a:hover::after{transform:scaleX(1)}
  </style>
</head>
<body id="top" class="bg-black text-white font-sans antialiased">
  <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-3 focus:left-3 rounded bg-white px-3 py-2 text-black">Skip to content</a>

  <header id="header" class="fixed inset-x-0 top-0 z-[100] bg-black/70 backdrop-blur supports-[backdrop-filter]:bg-black/60 transition-[background,box-shadow] duration-300">

    @php
      $nav = [
        ['label' => 'Our Work', 'href' => url('/portfolio'), 'match' => 'portfolio'],
        ['label' => 'Services',  'href' => url('/services'),  'match' => 'services'],
        // ['label' => 'blog',      'href' => url('/blog'),      'match' => 'blog'], // uncomment when ready
      ];
    @endphp

    <div class="pointer-events-none absolute inset-x-0 bottom-[-1px] h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>

    <div class="mx-auto max-w-7xl px-4">
      <div class="hidden md:flex items-center justify-between py-4">
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 group">
          <img src="{{ asset('images/logo.webp') }}" alt="Bowerman Digital Logo" class="h-10 w-auto md:h-12 transition-transform duration-300 group-hover:scale-[1.03]">
        </a>

        <nav class="flex items-center gap-6 text-sm">
          <ul class="nav-underline flex gap-6 [&_a]:text-white [&_a:hover]:text-cyan-400 [&_a:visited]:text-white">
            @foreach ($nav as $item)
              <li>
                <a href="{{ $item['href'] }}" class="{{ request()->is($item['match']) ? 'text-cyan-400' : '' }}">
                  {{ $item['label'] }}
                </a>
              </li>
            @endforeach
          </ul>

          <a href="{{ url('/contact') }}"
            class="hidden lg:inline-flex items-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm font-medium text-white transition hover:bg-white/10 hover:scale-[1.03]">
            Start a project
          </a>
        </nav>
      </div>
    </div>

    {{-- Mobile header --}}
    <div class="md:hidden flex items-center justify-between py-3 px-4">
    <a href="{{ url('/') }}" class="inline-flex items-center">
        <img src="{{ asset('images/logo.webp') }}" alt="Bowerman Digital Logo" class="h-10 w-auto">
    </a>

    <button id="mnav-trigger"
            class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 active:scale-95 transition"
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

  <footer class="relative z-[101] bg-black px-4 py-12">
    <div class="mx-auto max-w-7xl">
      <div class="h-px w-full bg-gradient-to-r from-transparent via-white/15 to-transparent mb-8"></div>

      <div class="flex flex-col items-center gap-6 text-center">
        <a href="{{ url('/') }}" class="group">
          <img class="h-12 w-auto transition-transform duration-300 group-hover:scale-[1.03]" src="{{ asset('images/logo.webp') }}" alt="Bowerman Digital Logo">
        </a>

        <nav>
          <ul class="flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm
                     [&_a]:text-white [&_a:hover]:text-cyan-400 [&_a:visited]:text-white">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/portfolio') }}">Our Work</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a href="{{ url('/contact') }}">Start a Project</a></li>
          </ul>
        </nav>

        <p class="mt-2 text-xs text-white/60">&copy; {{ date('Y') }} Bowerman Digital</p>
      </div>
    </div>
  </footer>

  @once
    <div class="hidden opacity-100 translate-x-0 pointer-events-auto"></div>
  @endonce

  {{-- Mobile nav: backdrop + panel --}}
  <div id="mnav-root" class="md:hidden">
    <div id="mnav-backdrop"
        class="fixed inset-0 z-[9998] bg-black/70 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <aside id="mnav-panel"
          class="fixed inset-y-0 right-0 z-[9999] w-[86%] max-w-[20rem]
                  translate-x-full transition-transform duration-300 will-change-transform
                  bg-black/90 border-l border-white/10 backdrop-blur-xl
                  px-5 pt-4 pb-[max(1rem,env(safe-area-inset-bottom))] flex flex-col">
      <div class="flex items-center justify-end">
        <button id="mnav-close"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-white/5"
                aria-label="Close menu">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-width="1.8" stroke-linecap="round" d="M6 6l12 12M18 6l-12 12"/>
          </svg>
        </button>
      </div>

      <nav class="mt-6 grow overflow-y-auto">
        <ul class="space-y-1 text-base">
          @foreach ($nav as $item)
            <li>
              <a href="{{ $item['href'] }}"
                class="flex items-center justify-between rounded-xl px-4 py-3 text-white hover:bg-white/5 focus:bg-white/10 focus:outline-none">
                <span class="capitalize">{{ $item['label'] }}</span>
                <span class="text-white/40">→</span>
              </a>
            </li>
          @endforeach
        </ul>
      </nav>

      <div class="mt-4 space-y-3">
        <a href="{{ url('/contact') }}"
          class="block rounded-xl border border-cyan-400/30 bg-cyan-400/10 px-4 py-3 text-center font-medium text-cyan-300 hover:bg-cyan-400/15">
          Start a project
        </a>
      </div>
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

  @stack('scripts')
</body>
</html>