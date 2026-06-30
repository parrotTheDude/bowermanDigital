@extends('layouts.app')

@section('title', 'AI Digital Strategy & Web Development | Bowerman Digital Sydney')
@section('meta_description', "Your customers are searching with AI. Is your business ready? Bowerman Digital helps Australian businesses stay discoverable with AI search optimisation, AI-ready websites, and intelligent automation.")


@push('schema')
  @include('partials.schema.organization')
  @include('partials.schema.website')
@endpush

@section('content')

{{-- ─── Hero ─── --}}
<section class="relative overflow-hidden bg-cream">
  <div class="hero-burst" aria-hidden="true"></div>
  <div class="relative mx-auto max-w-7xl px-6 pt-28 pb-16 text-center md:pl-24 md:pt-36 md:pb-20">
    <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Web, AI &amp; automation &middot; Sydney, Australia</p>

    <h1 class="mx-auto mt-6 max-w-3xl font-display text-4xl font-black leading-[1.06] tracking-tight md:text-6xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
      Tired of your web person <span class="echo-retro">not replying</span> for days?
    </h1>

    <h2 class="mx-auto mt-6 max-w-2xl font-display text-xl font-semibold text-ink md:text-2xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
      Website design, SEO and AI search optimisation for Australian small businesses.
    </h2>

    <div class="mt-10 flex flex-wrap justify-center gap-4 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <a href="{{ url('/contact') }}" class="btn-retro btn-retro-solid">Start a project with us</a>
      <a href="{{ url('/portfolio') }}" class="btn-retro">See our work</a>
    </div>

  </div>
</section>

{{-- ─── Marquee ─── --}}
<div class="marquee-retro border-y-2 border-ink bg-ink py-3.5 text-cream" aria-hidden="true">
  <div class="marquee-track font-mono text-[13px] uppercase tracking-[0.16em]">
    @php $items = ['AI search optimisation','websites that load before you blink','llms.txt (ask me)','automation for the boring bits','no lock-in contracts','yes, a real person']; @endphp
    @foreach (array_merge($items, $items) as $item)
      {{ $item }} <span class="mx-6 text-mustard">&#10047;</span>
    @endforeach
  </div>
</div>

{{-- ─── Work ─── --}}
<section class="border-y-2 border-ink bg-cream-2 px-6 py-20 md:py-28">
  <div class="mx-auto max-w-7xl">
    <div class="mb-14 flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display text-3xl font-black leading-tight md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Some recent work</h2>
      <a href="{{ url('/portfolio') }}" class="font-mono text-sm font-bold text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">All case studies →</a>
    </div>

    {{-- Featured: Crystal Caves (newest) --}}
    <article class="sticker overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      <a href="{{ url('/portfolio/crystal-caves') }}" class="grid no-underline md:grid-cols-2">
        <div class="overflow-hidden border-b-2 border-ink md:border-b-0 md:border-r-2">
          <img src="{{ asset('images/crystal/crystalHero.webp') }}"
               srcset="{{ asset('images/crystal/crystalHero-sm.webp') }} 640w, {{ asset('images/crystal/crystalHero.webp') }} 1600w"
               sizes="(max-width: 767px) 90vw, 45vw"
               alt="Crystal Caves Atherton website" width="1600" height="1067" loading="lazy"
               class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.02]">
        </div>
        <div class="flex flex-col justify-center p-7 md:p-10">
          <div class="flex flex-wrap gap-2">
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">Website Rebuild</span>
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">SEO &amp; AI Search</span>
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">Tourism</span>
          </div>
          <h3 class="mt-4 font-display text-2xl font-black md:text-3xl">Crystal Caves</h3>
          <p class="mt-3 text-ink-soft">A rebuild for one of the Atherton Tablelands' best-loved attractions, designed to show off René's caves and get the whole experience found by AI and search.</p>
          <div class="mt-6 border-t-2 border-ink pt-4">
            <b class="font-display text-2xl font-black text-rust-deep md:text-3xl">Award-winning attraction</b>
            <span class="block font-mono text-[13px] text-ink-faint">600+ crystals, just over an hour from Cairns</span>
          </div>
          <span class="mt-6 inline-block font-mono text-sm font-bold text-rust-deep">Read the full story →</span>
        </div>
      </a>
    </article>

    {{-- Supporting: Vizzbud + TDAC + Evie --}}
    <div class="mt-5 grid gap-5 md:grid-cols-3">
      @php
        $projects = [
          ['href' => '/portfolio/vizzbud', 'img' => 'images/vizzbud/vizzbud-feature', 'w' => 992, 'alt' => 'Vizzbud dive conditions platform', 'tags' => ['iOS','Android','Web'], 'h' => 'Vizzbud', 'p' => 'My own project: realtime dive conditions and a logbook for divers, on web, iOS and Android.'],
          ['href' => '/portfolio/that-disability-adventure-company', 'img' => 'images/tdac/tdac', 'w' => 1280, 'alt' => 'That Disability Adventure Company website', 'tags' => ['SEO','CRM','Email'], 'h' => 'That Disability Adventure Company', 'p' => 'Rebuilt the site and built the CRM that runs their participants and staff. Traffic went 90 to 500+.'],
          ['href' => '/portfolio/evie-graphic-design', 'img' => 'images/evie/evie', 'w' => 1280, 'alt' => 'Evie graphic design portfolio website', 'tags' => ['Portfolio','Design'], 'h' => 'Evie Graphic Design', 'p' => 'A sleek portfolio that wins freelance clients on its own.'],
        ];
      @endphp
      @foreach ($projects as $i => $pr)
        <article class="sticker {{ $i % 2 ? 'tilt-r' : 'tilt-l' }} overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 150 + $i*50 }}">
          <a href="{{ url($pr['href']) }}" class="block no-underline">
            <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
              <img src="{{ asset($pr['img'].'.webp') }}"
                   srcset="{{ asset($pr['img'].'-sm.webp') }} 640w, {{ asset($pr['img'].'.webp') }} {{ $pr['w'] }}w"
                   sizes="(max-width: 767px) 90vw, 30vw"
                   alt="{{ $pr['alt'] }}" width="{{ $pr['w'] }}" height="720" loading="lazy"
                   class="retro-img h-full w-full object-cover object-top transition duration-700 hover:scale-[1.03]">
            </div>
            <div class="p-6">
              <div class="mb-3 flex flex-wrap gap-2">
                @foreach ($pr['tags'] as $tag)
                  <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">{{ $tag }}</span>
                @endforeach
              </div>
              <h3 class="font-display text-lg font-semibold">{{ $pr['h'] }}</h3>
              <p class="mt-1.5 text-[15px] text-ink-soft">{{ $pr['p'] }}</p>
              <span class="mt-3.5 inline-block font-mono text-sm font-bold text-rust-deep">View case study →</span>
            </div>
          </a>
        </article>
      @endforeach
    </div>
  </div>
</section>

{{-- ─── Services ─── --}}
<section class="bg-cream px-6 py-20 md:py-28">
  <div class="mx-auto max-w-7xl">
    <div class="mb-14 flex flex-wrap items-end justify-between gap-6">
      <h2 class="max-w-xl font-display text-3xl font-black leading-tight md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        Built to be found, <span class="und-retro">by people and by machines</span>
      </h2>
      <p class="max-w-sm text-ink-soft opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">What I actually do all day.</p>
    </div>

    <div class="grid gap-6 md:grid-cols-2">
      @php
        $services = [
          ['n' => 'No. 01', 'bg' => 'bg-cream-3',   'h' => 'AI search optimisation',   'p' => "When someone asks ChatGPT for the best physio in Penrith, there's an answer. My job is making it you.", 'd' => 'llms.txt · structured data · Google AI Overviews'],
          ['n' => 'No. 02', 'bg' => 'bg-[#eed9b2]', 'h' => 'Websites',                 'p' => "Fast, clean sites that read as well to a crawler as they do to a customer. No page builders, no bloat.", 'd' => 'hand-built · loads fast · easy to update'],
          ['n' => 'No. 03', 'bg' => 'bg-[#e9e3c6]', 'h' => 'CRMs & automation',        'p' => "Custom CRMs built around how you actually work. One client runs participants, staff and bookings on a system I built.", 'd' => 'bookings · staff · follow-ups · reporting'],
          ['n' => 'No. 04', 'bg' => 'bg-[#f0d9c8]', 'h' => 'Strategy',                 'p' => "A plan for the next two years, not the last ten. Including where to spend effort, and where not to bother.", 'd' => 'content · email · a plan you can actually follow'],
        ];
      @endphp
      @foreach ($services as $i => $s)
        <article class="sticker {{ $i % 2 ? 'tilt-r' : 'tilt-l' }} {{ $s['bg'] }} flex flex-col p-8 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 100 + $i*50 }}">
          <span class="font-mono text-[13px] font-bold tracking-[0.15em] text-rust-deep">{{ $s['n'] }}</span>
          <h3 class="mt-4 mb-2.5 font-display text-2xl font-semibold leading-snug">{{ $s['h'] }}</h3>
          <p class="text-base text-ink-soft">{{ $s['p'] }}</p>
          <p class="mt-auto pt-5 font-mono text-[12px] text-ink-faint">{{ $s['d'] }}</p>
        </article>
      @endforeach
    </div>

    <div class="mt-10 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <a href="{{ url('/services') }}" class="btn-retro">Everything I do →</a>
    </div>
  </div>
</section>

{{-- ─── Process ─── --}}
<section class="bg-cream px-6 py-20 md:py-28">
  <div class="mx-auto max-w-7xl">
    <div class="mb-14 flex flex-wrap items-end justify-between gap-6">
      <h2 class="max-w-xl font-display text-3xl font-black leading-tight md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">How a project runs</h2>
      <p class="max-w-sm text-ink-soft opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">You deal with me the whole way through. There is no one to be handed off to.</p>
    </div>

    <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-4">
      @php
        $steps = [
          ['n' => '01', 'bg' => 'bg-cream',     'h' => 'You get in touch', 'p' => "Tell me what's not working. You'll hear back from me, not a form letter — usually the same day.", 'g' => 'a real reply, fast'],
          ['n' => '02', 'bg' => 'bg-cream-3',   'h' => 'We have a chat',    'p' => "A proper call to talk through what you want and set clear expectations, so we both know what 'done' looks like.", 'g' => 'a call, no pressure'],
          ['n' => '03', 'bg' => 'bg-[#eed9b2]', 'h' => 'A free proposal',   'p' => "I put together a clear proposal — what I'll do, what it costs, how long it takes — in plain English. No obligation.", 'g' => 'a clear proposal, free'],
          ['n' => '04', 'bg' => 'bg-[#e9e3c6]', 'h' => 'We build it',       'p' => "If you're happy, we kick off. I keep you in the loop the whole way through, until it's finished and handed over.", 'g' => 'updates the whole way'],
        ];
      @endphp
      @foreach ($steps as $i => $st)
        <article class="sticker {{ $i % 2 ? 'tilt-r' : 'tilt-l' }} {{ $st['bg'] }} flex flex-col p-7 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 100 + $i*50 }}">
          <span class="font-display text-4xl font-black text-rust">{{ $st['n'] }}</span>
          <h3 class="mt-3.5 mb-2 font-display text-xl font-semibold">{{ $st['h'] }}</h3>
          <p class="text-[15px] text-ink-soft">{{ $st['p'] }}</p>
          <p class="mt-auto pt-5 font-mono text-[12px] font-bold text-rust-deep">you get: {{ $st['g'] }}</p>
        </article>
      @endforeach
    </div>

    <p class="mt-8 text-center font-mono text-[13px] text-ink-faint opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      No jargon, no lock-in, and no disappearing — you're kept in the loop from the first chat to the finished site.
    </p>
  </div>
</section>

{{-- ─── CTA ─── --}}
<section class="border-t-2 border-ink bg-rust px-6 py-24 text-center md:py-32">
  <div class="mx-auto max-w-3xl">
    <h2 class="font-display text-4xl font-black !text-[#fff7ea] md:text-6xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
      Let's make you <span class="[text-shadow:5px_5px_0_#bd4f1a]">findable.</span>
    </h2>
    <p class="mx-auto mt-5 mb-10 max-w-lg text-lg text-[#fff7ea]/90 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
      Tell me about your business and what's not working. I'll come back to you the same day with a plan, in plain English and no obligation.
    </p>
    <div class="opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      <a href="{{ url('/contact') }}" class="btn-retro">Start a project with us</a>
    </div>
    <div class="mt-7 flex items-center justify-center gap-2 font-mono text-[13px] text-[#fff7ea]/85 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <span class="inline-block h-2 w-2 animate-pulse rounded-full bg-mustard"></span>
      Currently open for new projects
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  (() => {
    const els = document.querySelectorAll('.reveal');
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduce || !('IntersectionObserver' in window)) {
      els.forEach(el => el.classList.remove('opacity-0', 'translate-y-6'));
      return;
    }
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const delay = parseInt(el.dataset.delay || '0', 10);
        setTimeout(() => el.classList.remove('opacity-0', 'translate-y-6'), delay);
        io.unobserve(el);
      });
    }, { threshold: 0.12 });
    els.forEach(el => io.observe(el));
  })();
</script>
@endpush
