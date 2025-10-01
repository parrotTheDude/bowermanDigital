@extends('layouts.app')

@section('title', 'Portfolio | Bowerman Digital')
@section('meta_description', 'Selected work from Bowerman Digital — websites, SEO, and email programs that move the needle.')

@push('head')
  <meta property="og:title" content="Portfolio | Bowerman Digital">
  <meta property="og:description" content="Selected work from Bowerman Digital — websites, SEO, and email programs that move the needle.">
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

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-32 pb-10 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">Selected work</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl">Projects that ship and scale</h1>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="block no-underline">
          <div class="overflow-hidden rounded-xl">
            <img src="{{ asset('images/tdac.webp') }}" alt="That Disability Adventure Company website" class="w-full rounded-xl transition duration-700 group-hover:scale-[1.03]">
          </div>
          <h3 class="mt-5 text-lg font-semibold text-white">That Disability Adventure Company</h3>
          <div class="mt-4 text-cyan-300">View case study →</div>
        </a>
      </article>

      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <a href="{{ url('/portfolio/evie-graphic-design') }}" class="block no-underline">
          <div class="overflow-hidden rounded-xl">
            <img src="{{ asset('images/evie.webp') }}" alt="Evie Bowerman portfolio" class="w-full rounded-xl transition duration-700 group-hover:scale-[1.03]">
          </div>
          <h3 class="mt-5 text-lg font-semibold text-white">Evie’s Design Portfolio</h3>
          <div class="mt-4 text-cyan-300">View case study →</div>
        </a>
      </article>

      {{-- Vizzbud --}}
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <a href="{{ url('/portfolio/vizzbud') }}" class="block no-underline">
          <div class="overflow-hidden rounded-xl">
            <img src="{{ asset('images/turtle.webp') }}" alt="Vizzbud diving platform" class="w-full rounded-xl transition duration-700 group-hover:scale-[1.03]">
          </div>
          <h3 class="mt-5 text-lg font-semibold text-white">Vizzbud</h3>
          <div class="mt-4 text-cyan-300">View case study →</div>
        </a>
      </article>
    </div>

    <div class="mx-auto mt-12 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Start a Project</p></div>
      </a>
    </div>
  </div>
</section>
@endsection