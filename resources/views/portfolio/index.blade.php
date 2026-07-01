@extends('layouts.app')

@section('title', 'Our Work — Web, SEO &amp; AI Case Studies | Bowerman Digital')
@section('meta_description', 'Selected work from Bowerman Digital. AI-ready websites, search optimisation, CRM automation, and digital strategy that delivers measurable growth for Australian businesses.')


@push('schema')
  @php
    $schema = [
      '@'.'context' => 'https://schema.org',
      '@type' => 'CollectionPage',
      'name' => 'Portfolio | Bowerman Digital',
      'url' => url('/portfolio'),
      'about' => [
        '@type' => 'Organization',
        'name' => 'Bowerman Digital',
        'url'  => url('/'),
      ],
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
<section class="relative bg-cream">

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-20 pb-10 md:pt-28">
    <div class="mx-auto max-w-3xl text-center">
      <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Selected work</p>
      <h1 class="mt-4 font-display text-4xl font-black md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Work we're proud of</h1>
      <p class="mt-4 text-ink-soft opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">Real results for real businesses — from AI-ready websites to full digital strategy. Here's a look at what we've built.</p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      {{-- 1. Crystal Caves (newest) --}}
      <article class="sticker tilt-l overflow-hidden bg-cream-3 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <a href="{{ url('/portfolio/crystal-caves') }}" class="flex h-full flex-col no-underline">
          <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
            <img src="{{ asset('images/crystal/crystalHero.webp') }}" srcset="{{ asset('images/crystal/crystalHero-sm.webp') }} 640w, {{ asset('images/crystal/crystalHero.webp') }} 1600w" sizes="(max-width: 767px) 90vw, 30vw" alt="Crystal Caves Atherton website" width="1600" height="1067" class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">Website Rebuild</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">SEO & AI Search</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">Tourism</span>
            </div>
            <h2 class="mt-3 font-display text-lg font-semibold">Crystal Caves</h2>
            <p class="mt-1 text-base text-ink-soft">A rebuild for the award-winning Atherton attraction, built to show off the experience and get discovered by AI and search.</p>
            <div class="mt-auto pt-4 font-mono text-sm font-bold text-rust-deep">View case study →</div>
          </div>
        </a>
      </article>

      {{-- 2. Vizzbud --}}
      <article class="sticker tilt-r overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <a href="{{ url('/portfolio/vizzbud') }}" class="flex h-full flex-col no-underline">
          <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
            <img src="{{ asset('images/vizzbud/vizzbud-feature.webp') }}" srcset="{{ asset('images/vizzbud/vizzbud-feature-sm.webp') }} 640w, {{ asset('images/vizzbud/vizzbud-feature.webp') }} 992w" sizes="(max-width: 767px) 90vw, 30vw" alt="Vizzbud dive conditions platform" width="992" height="500" class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">AI-Ready Web App</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">PWA</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">Realtime Data</span>
            </div>
            <h2 class="mt-3 font-display text-lg font-semibold">Vizzbud</h2>
            <p class="mt-1 text-base text-ink-soft">A progressive web app giving Sydney divers realtime conditions, tide windows, and a personal dive log.</p>
            <div class="mt-auto pt-4 font-mono text-sm font-bold text-rust-deep">View case study →</div>
          </div>
        </a>
      </article>

      {{-- 3. TDAC --}}
      <article class="sticker tilt-l overflow-hidden bg-cream-3 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="200">
        <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="flex h-full flex-col no-underline">
          <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
            <img src="{{ asset('images/tdac/tdac.webp') }}" srcset="{{ asset('images/tdac/tdac-sm.webp') }} 640w, {{ asset('images/tdac/tdac.webp') }} 1980w" sizes="(max-width: 767px) 90vw, 30vw" alt="That Disability Adventure Company website" width="1980" height="1080" class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">AI-Ready Website</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">SEO & AI Search</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">CRM Automation</span>
            </div>
            <h2 class="mt-3 font-display text-lg font-semibold">That Disability Adventure Company</h2>
            <p class="mt-1 text-base text-ink-soft">A new website, SEO strategy, and CRM program that grew monthly traffic from 90 to 500+ visitors.</p>
            <div class="mt-auto pt-4 font-mono text-sm font-bold text-rust-deep">View case study →</div>
          </div>
        </a>
      </article>

      {{-- 4. Evie --}}
      <article class="sticker tilt-r overflow-hidden bg-[#eed9b2] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
        <a href="{{ url('/portfolio/evie-graphic-design') }}" class="flex h-full flex-col no-underline">
          <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
            <img src="{{ asset('images/evie/evie.webp') }}" srcset="{{ asset('images/evie/evie-sm.webp') }} 640w, {{ asset('images/evie/evie.webp') }} 1980w" sizes="(max-width: 767px) 90vw, 30vw" alt="Evie Bowerman portfolio" width="1980" height="1080" class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2">
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">Portfolio</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">AI Search Optimisation</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px] text-ink">Strategy</span>
            </div>
            <h2 class="mt-3 font-display text-lg font-semibold">Evie's Design Portfolio</h2>
            <p class="mt-1 text-base text-ink-soft">A sleek portfolio with clean UX and SEO integration that helped Evie attract clients and land freelance projects.</p>
            <div class="mt-auto pt-4 font-mono text-sm font-bold text-rust-deep">View case study →</div>
          </div>
        </a>
      </article>
    </div>

    {{-- Bottom CTA --}}
    <div class="mx-auto mt-16 max-w-5xl relative overflow-hidden rounded-2xl border-2 border-ink bg-[#eed9b2] md:rounded-3xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">

      <div class="relative flex flex-col items-center px-5 py-10 sm:px-8 sm:py-12 md:px-16 md:py-16">
        <h2 class="max-w-sm font-display text-xl font-black leading-snug text-ink text-center sm:max-w-md sm:text-2xl md:text-3xl">
          Ready to make your business AI-discoverable?
        </h2>

        <div class="mt-6 flex flex-col items-stretch gap-3 sm:flex-row sm:items-center sm:justify-center">
          <a href="{{ url('/contact') }}" class="btn-retro btn-retro-solid text-center sm:w-auto">Start a project with us</a>
          <a href="{{ url('/services') }}" class="btn-retro text-center sm:w-auto">Explore services</a>
        </div>
      </div>
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
  })();
</script>
@endpush