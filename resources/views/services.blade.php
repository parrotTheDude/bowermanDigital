@extends('layouts.app')

@section('title', 'Services | Bowerman Digital')
@section('meta_description', 'Web development, technical SEO, and lifecycle email. Clean code, fast performance, and clear outcomes.')

@push('head')
  <meta property="og:title" content="Services | Bowerman Digital">
  <meta property="og:description" content="Web development, technical SEO, and lifecycle email. Clean code, fast performance, and clear outcomes.">
  <meta property="og:url" content="{{ url('/services') }}">
  <meta property="og:image" content="{{ asset('images/og-default.jpg') }}">
@endpush

@push('schema')
  @php
    $schema = [
      '@context' => 'https://schema.org',
      '@type' => 'Service',
      'name' => 'Web Development, SEO & Email',
      'provider' => [
        '@type' => 'Organization',
        'name'  => 'Bowerman Digital',
        'url'   => url('/'),
      ],
      'areaServed' => 'Australia',
      'serviceType' => ['Web Development','SEO','Email Marketing'],
      'url' => url('/services'),
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-32 pb-12 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">What we do</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl">Build smart. Grow faster.</h1>
      <p class="mt-4 text-white/70">We focus on the fundamentals that compound: performance, accessibility, and a content/search strategy that actually converts.</p>
    </div>

    <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">01</div>
        <h3 class="text-lg font-semibold text-white">Web Development</h3>
        <p class="mt-2 text-sm text-white/70">Tailored Laravel/Blade or headless builds with clean code, fast TTFB, image/CDN optimization, and on-brand UI.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Component-based UI with accessibility baked in</li>
          <li>• Best-practice metadata, OG, and schema</li>
          <li>• Lighthouse performance and Core Web Vitals</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/portfolio') }}" class="text-cyan-300 hover:text-cyan-200">See examples →</a>
        </div>
      </div>

      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">02</div>
        <h3 class="text-lg font-semibold text-white">Technical SEO</h3>
        <p class="mt-2 text-sm text-white/70">Fix crawl issues, structure content, and earn traffic that compounds. We prioritize high-intent pages first.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Site audits, indexation, and internal linking</li>
          <li>• Schema (JSON-LD), sitemaps, canonical strategy</li>
          <li>• Content roadmaps tied to revenue</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Get an audit →</a>
        </div>
      </div>

      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">03</div>
        <h3 class="text-lg font-semibold text-white">Lifecycle Email</h3>
        <p class="mt-2 text-sm text-white/70">Set up flows that welcome, nurture, and win back. We integrate copy, segments, and testing for lift.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Welcome, post-purchase, winback flows</li>
          <li>• Segmentation & experimentation</li>
          <li>• Deliverability and template performance</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Plan a flow →</a>
        </div>
      </div>
    </div>

    <div class="mt-16 grid gap-6 lg:grid-cols-2">
      <div class="rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm">
        <h3 class="text-lg font-semibold text-white">How we work</h3>
        <ol class="mt-4 space-y-3 text-sm text-white/70">
          <li>1. Discovery — goals, constraints, stack</li>
          <li>2. Plan — roadmap, deliverables, timeline</li>
          <li>3. Build — weekly checkpoints and previews</li>
          <li>4. Launch — QA, performance, analytics</li>
          <li>5. Grow — SEO/content and email iterations</li>
        </ol>
      </div>
      <div class="rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm">
        <h3 class="text-lg font-semibold text-white">FAQs</h3>
        <div class="mt-4 space-y-4 text-sm text-white/70">
          <div>
            <p class="font-medium text-white">How quickly can we start?</p>
            <p class="mt-1">Usually within 1–2 weeks. Smaller engagements can start sooner.</p>
          </div>
          <div>
            <p class="font-medium text-white">Do you maintain sites?</p>
            <p class="mt-1">Yes. We offer lightweight retainers for updates, monitoring, and growth.</p>
          </div>
          <div>
            <p class="font-medium text-white">What does success look like?</p>
            <p class="mt-1">Clear goals upfront — faster site, more leads, ranked pages, or higher LTV.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-auto mt-14 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Let’s get started</p></div>
      </a>
    </div>
  </div>
</section>
@endsection