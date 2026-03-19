@extends('layouts.app')

@section('title', 'Portfolio | Bowerman Digital')
@section('meta_description', 'Selected work from Bowerman Digital — website redesigns, SEO strategies, and email programs that deliver measurable growth for Australian businesses.')

@push('head')
  <meta property="og:title" content="Portfolio | Bowerman Digital">
  <meta property="og:description" content="Selected work from Bowerman Digital — website redesigns, SEO strategies, and email programs that deliver measurable growth for Australian businesses.">
  <meta property="og:url" content="{{ url('/portfolio') }}">
  <meta property="og:image" content="{{ asset('images/og-default.jpg') }}">
@endpush

@push('schema')
  @php
    $schema = [
      '@context' => 'https://schema.org',
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
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-24 pb-10 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Selected work</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Projects that ship and scale</h1>
      <p class="mt-4 text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">Real results for real businesses. Here's a look at what we've built.</p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      {{-- 1. Vizzbud --}}
      <article class="group rounded-2xl border border-white/10 bg-white/[0.03] p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <a href="{{ url('/portfolio/vizzbud') }}" class="block no-underline">
          <div class="aspect-[16/9] overflow-hidden rounded-xl">
            <img src="{{ asset('images/vizzbud/turtle.webp') }}" alt="Vizzbud dive conditions platform" class="h-full w-full object-cover object-top rounded-xl transition duration-700 group-hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="mt-4 flex flex-wrap gap-2">
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Web App</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">PWA</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Realtime Data</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-white">Vizzbud</h3>
          <p class="mt-1 text-sm text-white/60">A progressive web app giving Sydney divers realtime conditions, tide windows, and a personal dive log.</p>
          <div class="mt-4 text-sm font-medium text-cyan-300 transition-colors group-hover:text-cyan-200">View case study →</div>
        </a>
      </article>

      {{-- 2. TDAC --}}
      <article class="group rounded-2xl border border-white/10 bg-white/[0.03] p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="block no-underline">
          <div class="aspect-[16/9] overflow-hidden rounded-xl">
            <img src="{{ asset('images/tdac/tdac.webp') }}" alt="That Disability Adventure Company website" class="h-full w-full object-cover object-center rounded-xl transition duration-700 group-hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="mt-4 flex flex-wrap gap-2">
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Website</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">SEO</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Email</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-white">That Disability Adventure Company</h3>
          <p class="mt-1 text-sm text-white/60">A new website, SEO strategy, and EDM program that grew monthly traffic from 90 to 500+ visitors.</p>
          <div class="mt-4 text-sm font-medium text-cyan-300 transition-colors group-hover:text-cyan-200">View case study →</div>
        </a>
      </article>

      {{-- 3. Evie --}}
      <article class="group rounded-2xl border border-white/10 bg-white/[0.03] p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="200">
        <a href="{{ url('/portfolio/evie-graphic-design') }}" class="block no-underline">
          <div class="aspect-[16/9] overflow-hidden rounded-xl">
            <img src="{{ asset('images/evie/evie.webp') }}" alt="Evie Bowerman portfolio" class="h-full w-full object-cover object-center rounded-xl transition duration-700 group-hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="mt-4 flex flex-wrap gap-2">
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Portfolio</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">Design</span>
            <span class="rounded-full border border-cyan-400/20 bg-cyan-400/10 px-2.5 py-0.5 text-[11px] text-cyan-300">SEO</span>
          </div>
          <h3 class="mt-3 text-lg font-semibold text-white">Evie's Design Portfolio</h3>
          <p class="mt-1 text-sm text-white/60">A sleek portfolio with clean UX and SEO integration that helped Evie attract clients and land freelance projects.</p>
          <div class="mt-4 text-sm font-medium text-cyan-300 transition-colors group-hover:text-cyan-200">View case study →</div>
        </a>
      </article>
    </div>

    {{-- Bottom CTA --}}
    <div class="mx-auto mt-16 max-w-lg text-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      <p class="text-white/70">Got a project in mind? We'd love to hear about it.</p>
      <div class="mt-6 flex justify-center">
        <a href="{{ url('/contact') }}" class="no-underline">
          <div class="glow-on-hover"><p>Start a Project</p></div>
        </a>
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