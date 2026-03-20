@extends('layouts.app')

@section('title', 'Web Development & SEO Agency | Bowerman Digital')
@section('meta_description', "Sydney digital agency specialising in web development, SEO, and email marketing. We partner with one business at a time to deliver real results.")

@push('head')
  <meta name="robots" content="index,follow">
  <meta property="og:title" content="Web Development & SEO Agency | Bowerman Digital">
  <meta property="og:description" content="Sydney digital agency specialising in web development, SEO, and email marketing. We partner with one business at a time to deliver real results.">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:image" content="{{ asset('images/og-default.webp') }}">
  <meta name="twitter:card" content="summary_large_image">
@endpush

@push('schema')
  @include('partials.schema.organization')
  @include('partials.schema.website')
@endpush

@section('content')
<section class="relative min-h-svh md:min-h-0 flex flex-col md:block bg-black">
  <div class="el pointer-events-none"></div>

  {{-- MOBILE hero image — absolute, fills the section, anchored to top --}}
  <div class="absolute inset-0 z-10 flex items-start justify-center pt-20 overflow-hidden md:hidden pointer-events-none">
    <a href="{{ url('/portfolio/evie-graphic-design') }}" class="block pointer-events-auto">
      <img
        class="h-auto w-80 object-contain"
        src="{{ asset('images/mockups/evie-mobile2.webp') }}"
        alt="Evie Graphic Design website on mobile"
        fetchpriority="high"
      >
    </a>
  </div>

  {{-- Dark gradient overlay — dark at bottom, clear at top so text is readable --}}
  <div class="pointer-events-none absolute inset-x-0 bottom-0 z-20 h-[60%] bg-gradient-to-t from-black via-black/85 to-transparent md:hidden"></div>

  {{-- MOBILE copy pinned to bottom of viewport --}}
  <div class="relative z-30 mt-auto px-6 pb-16 md:hidden">
    <div class="opacity-0 translate-y-6 transition-all duration-700 ease-out will-change-transform reveal" data-delay="0">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">
        Web • SEO • Email
      </span>

      <h1 class="mt-4 text-balance text-4xl font-bold text-white">
        Build, optimize, and grow your online presence <span class="flash align-baseline">|</span>
      </h1>

      <div class="mt-4 flex justify-center">
        <a href="{{ url('/contact') }}" class="w-full">
          <div class="glow-on-hover !w-full px-6 py-3">
            <p class="text-center font-semibold">Start a project</p>
          </div>
        </a>
      </div>
    </div>
  </div>

  {{-- DESKTOP GRID layout --}}
  <section
    class="relative z-30 mx-auto hidden max-w-7xl grid-cols-12 gap-10 px-6 pt-32 pb-32 items-center md:grid">
    {{-- LEFT copy --}}
    <div class="relative flex flex-col justify-center
                opacity-0 translate-y-6 transition-all duration-700 ease-out
                will-change-transform reveal col-span-5"
        data-delay="0">
        <div class="relative">
          <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">
            Web • SEO • Email
          </span>

          <h1 class="mt-4 text-balance text-4xl font-bold text-white md:text-6xl">
            Build, optimize, and grow your online presence <span class="flash align-baseline">|</span>
          </h1>

          <p class="mt-5 max-w-xl text-white/80">
            Welcome to Bowerman Digital 🤘🏼
          </p>
          <p class="mt-2 max-w-xl text-white/80">
            We're a Sydney-based digital studio specialising in modern, user-focused websites and strategies that elevate your business.
          </p>
          <p class="mt-2 max-w-xl text-white/80">
            Ready to get started? Share your brief below.
          </p>

          {{-- Button --}}
          <div class="mt-8 flex justify-start">
            <a href="{{ url('/contact') }}" class="w-auto">
              <div class="glow-on-hover !w-full px-6 py-3">
                <p class="text-center font-semibold">Start a project</p>
              </div>
            </a>
          </div>
        </div>
      </div>

    {{-- RIGHT: desktop mock — overflows right edge for impact --}}
    <div class="relative flex items-center justify-end col-span-7 -mr-6 overflow-visible">
      <div class="group perspective-1000 opacity-0 transition-all duration-700 ease-out reveal" data-delay="100">
        <a href="{{ url('/portfolio/evie-graphic-design') }}"
          class="inline-block transform-gpu transition will-change-transform origin-bottom group-hover:scale-[1.02] group-hover:-rotate-1">
          <img class="h-auto w-full max-w-none rounded-2xl" src="{{ asset('images/mockups/evie-desktop.webp') }}" alt="Evie Graphic Design website on desktop" fetchpriority="high" data-perspective-mock>
        </a>
      </div>
    </div>
  </section>
</section>

<section class="relative z-20 bg-zinc-900 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  {{-- Top divider --}}
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Portfolio</span>
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Our Work</h2>

    <div class="mt-10 grid gap-6 md:grid-cols-3">
      {{-- 1. Vizzbud (featured) --}}
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="100">
        <div class="aspect-[16/9] overflow-hidden rounded-xl">
          <img src="{{ asset('images/vizzbud/turtle.webp') }}" alt="Vizzbud dive conditions platform" class="h-full w-full object-cover object-top rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
        </div>
        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold text-white">Vizzbud</h3>
          <p class="mx-auto mt-2 max-w-prose text-sm text-white/80">
            A <b>progressive web app</b> giving Sydney divers realtime conditions, tide windows, and a personal dive log. Built with a <b>realtime data pipeline, interactive maps, and privacy-first account system.</b>
          </p>
        </div>
        <div class="mx-auto mt-6 flex justify-center">
          <a href="{{ url('/portfolio/vizzbud') }}" class="no-underline">
            <div class="glow-on-hover"><p>Vizzbud's Journey</p></div>
          </a>
        </div>
      </article>

      {{-- 2. TDAC --}}
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="150">
        <div class="aspect-[16/9] overflow-hidden rounded-xl">
          <img src="{{ asset('images/tdac/tdac.webp') }}" alt="TDAC Promotional Picture" class="h-full w-full object-cover object-center rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
        </div>
        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold text-white">That Disability Adventure Company</h3>
          <p class="mx-auto mt-2 max-w-prose text-sm text-white/80">
            A <b>new website, SEO strategy, custom CRM, and EDM program</b> that grew monthly traffic <b>from 90 to 500+ visitors</b> while streamlining operations and client communications.
          </p>
        </div>
        <div class="mx-auto mt-6 flex justify-center">
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="no-underline">
            <div class="glow-on-hover"><p>TDAC's Journey</p></div>
          </a>
        </div>
      </article>

      {{-- 3. Evie --}}
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="200">
        <div class="aspect-[16/9] overflow-hidden rounded-xl">
          <img src="{{ asset('images/evie/evie.webp') }}" alt="Evie Bowerman Promotional Picture" class="h-full w-full object-cover object-center rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
        </div>
        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold text-white">Evie's Design Portfolio</h3>
          <p class="mx-auto mt-2 max-w-prose text-sm text-white/80">
            A sleek portfolio site with <b>clean UX, responsive design, and SEO integration</b> that helped Evie attract new clients and secure multiple freelance projects.
          </p>
        </div>
        <div class="mx-auto mt-6 flex justify-center">
          <a href="{{ url('/portfolio/evie-graphic-design') }}" class="no-underline">
            <div class="glow-on-hover"><p>Evie's Journey</p></div>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="relative z-20 bg-black px-6 pb-16 pt-12">
  {{-- Top divider --}}
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="pointer-events-none absolute inset-0 -z-10 opacity-40">
    <div class="el h-full w-full"></div>
  </div>
  <div class="mx-auto max-w-7xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Why us</span>
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Experts in all things digital</h2>
    <p class="mx-auto mt-3 max-w-2xl text-center text-white/80 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
      From custom websites to seamless SEO strategies, we craft digital experiences that inspire.
    </p>

    <div class="mx-auto mt-10 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="100">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="Simplified workflow icon representing our streamlined approach" src="{{ asset('icons/simplify.svg') }}">
        <h3 class="text-lg font-semibold text-white">Simple</h3>
        <p class="mt-2 text-sm text-white/80">No jargon, no bloat. We keep things straightforward so you can focus on running your business while we handle the digital side.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="150">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:-rotate-3 group-hover:scale-110" alt="Quality badge icon representing high standards in every project" src="{{ asset('icons/quality.svg') }}">
        <h3 class="text-lg font-semibold text-white">Quality</h3>
        <p class="mt-2 text-sm text-white/80">Clean code, modern design, and performance-first builds. We treat every project like it's our own because our reputation depends on it.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="200">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="Handshake icon representing reliable partnership and support" src="{{ asset('icons/handshake.svg') }}">
        <h3 class="text-lg font-semibold text-white">Reliable</h3>
        <p class="mt-2 text-sm text-white/80">We partner with one business at a time so you always get our full attention. Fast replies, clear timelines, and no disappearing acts.</p>
      </aside>
    </div>

    <div class="mx-auto mt-10 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
      <a href="{{ url('/services') }}" class="no-underline">
        <div class="glow-on-hover"><p>Our Services</p></div>
      </a>
    </div>
  </div>
</section>

<section class="relative z-20 overflow-hidden bg-zinc-900 px-6 pt-6 pb-16 md:pt-10 md:pb-20 text-center">
  {{-- Top divider --}}
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
  {{-- Subtle radial glow behind the CTA --}}
  <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(34,211,238,0.06)_0%,transparent_70%)]"></div>

  <div class="relative mx-auto max-w-3xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Ready?</span>
    <h2 class="text-3xl font-semibold text-white md:text-4xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Let's build something great together</h2>
    <p class="mx-auto mt-4 max-w-lg text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">Share a few details about your project and we'll get back to you within one business day.</p>
    <div class="mx-auto mt-8 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Start a Project</p></div>
      </a>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
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
          // On mobile: shorter delays for a flowing cascade instead of staggered pops
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
      // On mobile: softer movement — smaller translate for a gentler entrance
      if (isMobile) {
        el.style.transitionDuration = '900ms';
        el.style.transform = 'translateY(12px)';
      }
      io.observe(el);
    });

    const mock = document.querySelector('[data-perspective-mock]');
    if (mock) {
      const wrap = mock.closest('.group');
      let ticking = false;
      wrap.addEventListener('mousemove', (e) => {
        if (ticking) return;
        ticking = true;
        requestAnimationFrame(() => {
          const rect = wrap.getBoundingClientRect();
          const x = ((e.clientX - rect.left) / rect.width - 0.5) * 6;
          const y = ((e.clientY - rect.top) / rect.height - 0.5) * 6;
          mock.style.transform = `translateZ(0) rotateX(${ -y }deg) rotateY(${ x }deg) scale(1.02)`;
          ticking = false;
        });
      });
      wrap.addEventListener('mouseleave', () => {
        mock.style.transform = '';
      });
    }
  })();
</script>
@endpush