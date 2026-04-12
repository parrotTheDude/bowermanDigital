@extends('layouts.app')

@section('title', 'AI Digital Strategy & Web Development | Bowerman Digital Sydney')
@section('meta_description', "Your customers are searching with AI. Is your business ready? Bowerman Digital helps Australian businesses stay discoverable with AI search optimisation, AI-ready websites, and intelligent automation.")


@push('schema')
  @include('partials.schema.organization')
  @include('partials.schema.website')
@endpush

@section('content')
<section class="relative min-h-svh md:min-h-0 flex flex-col md:block bg-black">
  <div class="el pointer-events-none"></div>

  {{-- MOBILE hero image — absolute, fills the section, anchored to top --}}
  <div class="absolute inset-0 z-10 flex items-start justify-center pt-16 overflow-hidden md:hidden pointer-events-none">
    <a href="{{ url('/portfolio/evie-graphic-design') }}" class="block pointer-events-auto">
      <img
        class="h-auto w-72 object-contain rounded-2xl shadow-2xl"
        src="{{ asset('images/mockups/evie-mobile2.webp') }}"
        alt="AI-optimised website example on mobile"
        width="1200"
        height="1600"
        fetchpriority="high"
      >
    </a>
  </div>

  {{-- Dark gradient overlay --}}
  <div class="pointer-events-none absolute inset-x-0 bottom-0 z-20 h-[70%] bg-gradient-to-t from-black via-black/90 to-transparent md:hidden"></div>

  {{-- MOBILE copy pinned to bottom --}}
  <div class="relative z-30 mt-auto px-5 pb-10 md:hidden">
    <div class="opacity-0 translate-y-6 transition-all duration-700 ease-out will-change-transform reveal" data-delay="0">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] tracking-wide text-white/80 backdrop-blur">
        AI Strategy &bull; Web &bull; Automation
      </span>

      <h1 class="mt-3 text-balance text-3xl font-bold leading-tight text-white">
        Your customers search with AI now. Can they find you? <span class="flash align-baseline">|</span>
      </h1>

      <p class="mt-3 text-sm text-white/60 leading-relaxed">
        We help businesses stay discoverable, relevant, and competitive as the world shifts to AI-powered search.
      </p>

      <div class="mt-5 flex justify-center">
        <a href="{{ url('/contact') }}" class="w-full">
          <div class="glow-on-hover !w-full px-6 py-3">
            <p class="text-center text-sm font-semibold">Get your free AI audit</p>
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
            AI Strategy &bull; Web &bull; Automation
          </span>

          <h1 class="mt-4 text-balance text-4xl font-bold text-white md:text-6xl">
            Your customers search with AI now. Can they find you? <span class="flash align-baseline">|</span>
          </h1>

          <p class="mt-5 max-w-xl text-white/80">
            ChatGPT, Perplexity, Google AI Overviews — the way people discover businesses has fundamentally changed. If AI doesn't know about you, neither do your future customers.
          </p>
          <p class="mt-2 max-w-xl text-white/80">
            We help Australian businesses stay discoverable, competitive, and ready for what's next.
          </p>

          {{-- Button --}}
          <div class="mt-8 flex justify-start">
            <a href="{{ url('/contact') }}" class="w-auto">
              <div class="glow-on-hover !w-full px-6 py-3">
                <p class="text-center font-semibold">Get your free AI audit</p>
              </div>
            </a>
          </div>
        </div>
      </div>

    {{-- RIGHT: desktop mock --}}
    <div class="relative flex items-center justify-end col-span-7 -mr-6 overflow-visible">
      <div class="group perspective-1000 opacity-0 transition-all duration-700 ease-out reveal" data-delay="100">
        <a href="{{ url('/portfolio/evie-graphic-design') }}"
          class="inline-block transform-gpu transition will-change-transform origin-bottom group-hover:scale-[1.02] group-hover:-rotate-1">
          <img class="h-auto w-full max-w-none rounded-2xl" src="{{ asset('images/mockups/evie-desktop.webp') }}" srcset="{{ asset('images/mockups/evie-desktop-sm.webp') }} 800w, {{ asset('images/mockups/evie-desktop.webp') }} 1920w" sizes="(max-width: 767px) 100vw, 58vw" alt="AI-optimised website example on desktop" width="1920" height="1080" fetchpriority="high" data-perspective-mock>
        </a>
      </div>
    </div>
  </section>
</section>

{{-- ── THE PROBLEM ── --}}
<section class="relative z-20 bg-zinc-900 px-6 pt-6 pb-16 md:pt-10 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">The shift</span>
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Search has changed. Has your business?</h2>
    <p class="mx-auto mt-4 max-w-2xl text-center text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
      People don't just Google anymore. They ask AI. And AI decides which businesses to recommend based on structured data, content quality, and machine-readable signals most websites simply don't have.
    </p>

    <div class="mx-auto mt-10 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="100">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="AI search optimisation icon" src="{{ asset('icons/seo.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">AI Search Optimisation</h3>
        <p class="mt-2 text-sm text-white/80">We make sure AI systems — ChatGPT, Perplexity, Google AI — can find, understand, and recommend your business to the people asking.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="150">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:-rotate-3 group-hover:scale-110" alt="AI-ready website development icon" src="{{ asset('icons/webDev.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">AI-Ready Websites</h3>
        <p class="mt-2 text-sm text-white/80">Clean code, structured data, and semantic markup that both humans and machines love. Websites built for the next era, not the last one.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="200">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="AI automation and tool integration icon" src="{{ asset('icons/simplify.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">Smart Automation</h3>
        <p class="mt-2 text-sm text-white/80">AI chatbots, workflow automations, and CRM integrations that save your team hours every week — set up properly, not hacked together.</p>
      </aside>
    </div>

    <div class="mx-auto mt-10 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
      <a href="{{ url('/services') }}" class="no-underline">
        <div class="glow-on-hover"><p>See all services</p></div>
      </a>
    </div>
  </div>
</section>

{{-- ── PROVEN RESULTS ── --}}
<section class="relative z-20 bg-black px-6 pt-6 pb-16 md:pt-6 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Results</span>
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Businesses we've helped grow</h2>

    <div class="mt-10 grid gap-6 md:grid-cols-3">
      {{-- 1. Vizzbud --}}
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="100">
        <div class="aspect-[16/9] overflow-hidden rounded-xl">
          <img src="{{ asset('images/vizzbud/turtle.webp') }}" srcset="{{ asset('images/vizzbud/turtle-sm.webp') }} 640w, {{ asset('images/vizzbud/turtle.webp') }} 1280w" sizes="(max-width: 767px) 90vw, 30vw" alt="Vizzbud dive conditions platform" width="1280" height="720" class="h-full w-full object-cover object-top rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
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
          <img src="{{ asset('images/tdac/tdac.webp') }}" srcset="{{ asset('images/tdac/tdac-sm.webp') }} 640w, {{ asset('images/tdac/tdac.webp') }} 1980w" sizes="(max-width: 767px) 90vw, 30vw" alt="That Disability Adventure Company" width="1980" height="1080" class="h-full w-full object-cover object-center rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
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
          <img src="{{ asset('images/evie/evie.webp') }}" srcset="{{ asset('images/evie/evie-sm.webp') }} 640w, {{ asset('images/evie/evie.webp') }} 1980w" sizes="(max-width: 767px) 90vw, 30vw" alt="Evie Bowerman Graphic Design Portfolio" width="1980" height="1080" class="h-full w-full object-cover object-center rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]" loading="lazy">
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

{{-- ── WHY US ── --}}
<section class="relative z-20 bg-zinc-900 px-6 pt-6 pb-16 md:pt-10 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="pointer-events-none absolute inset-0 -z-10 opacity-40">
    <div class="el h-full w-full"></div>
  </div>
  <div class="mx-auto max-w-7xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Why us</span>
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Built for where digital is going</h2>
    <p class="mx-auto mt-3 max-w-2xl text-center text-white/80 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
      Most agencies still sell 2019-era SEO. We specialise in making your business AI-discoverable, AI-ready, and future-proof.
    </p>

    <div class="mx-auto mt-10 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="100">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="Focused attention icon" src="{{ asset('icons/handshake.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">One client at a time</h3>
        <p class="mt-2 text-sm text-white/80">You're not ticket #347. We partner with one business at a time so you always get our full attention, fast replies, and clear timelines.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="150">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:-rotate-3 group-hover:scale-110" alt="AI expertise icon" src="{{ asset('icons/quality.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">AI-era expertise</h3>
        <p class="mt-2 text-sm text-white/80">We don't just build websites — we build digital presences that AI systems can discover, understand, and recommend to your future customers.</p>
      </aside>
      <aside class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 reveal" data-delay="200">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3 group-hover:scale-110" alt="Full implementation icon" src="{{ asset('icons/simplify.svg') }}" width="64" height="64" loading="lazy">
        <h3 class="text-lg font-semibold text-white">We build, not just advise</h3>
        <p class="mt-2 text-sm text-white/80">No 50-page reports that collect dust. We implement everything — from AI-optimised websites to automated workflows — and make sure it actually works.</p>
      </aside>
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="relative z-20 overflow-hidden bg-black px-6 pt-6 pb-16 md:pt-10 md:pb-20 text-center">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
  <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(34,211,238,0.06)_0%,transparent_70%)]"></div>

  <div class="relative mx-auto max-w-3xl">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Ready?</span>
    <h2 class="text-3xl font-semibold text-white md:text-4xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Find out if your business is AI-ready</h2>
    <p class="mx-auto mt-4 max-w-lg text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">Tell us about your business and we'll send you a free AI readiness audit — no strings, no jargon, just a clear picture of where you stand.</p>
    <div class="mx-auto mt-8 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Get your free AI audit</p></div>
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
