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
  <div class="relative mx-auto max-w-7xl px-6 pt-28 pb-16 text-center md:pt-36 md:pb-20">
    <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Sydney, Australia &middot; a one-person studio</p>

    <h1 class="mx-auto mt-6 max-w-3xl font-display text-4xl font-black leading-[1.06] tracking-tight md:text-6xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
      Tired of web devs who <span class="echo-retro">ghost</span> you?
    </h1>

    <p class="mx-auto mt-7 max-w-xl text-lg text-ink-soft md:text-xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      I answer the same day, build things properly, and get your website ready for the AI era. So when someone asks AI for the best in your industry, the answer is you.
    </p>

    <div class="mt-10 flex flex-wrap justify-center gap-4 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <a href="{{ url('/contact') }}" class="btn-retro btn-retro-solid">Get your free AI audit</a>
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

{{-- ─── Founder + testimonial ─── --}}
<section class="bg-cream px-6 py-20 md:py-24">
  <div class="mx-auto max-w-7xl">
    {{-- Photo hidden until there's a real one. To restore: change the div below back to
         class="grid items-center gap-10 md:grid-cols-[300px_1fr] md:gap-16" and uncomment the portrait. --}}
    {{--
      <div class="relative mx-auto h-[280px] w-[280px] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <div class="absolute inset-0 translate-x-3 translate-y-3 rounded-full border-2 border-ink bg-mustard"></div>
        <div class="relative flex h-full w-full items-center justify-center overflow-hidden rounded-full border-2 border-ink bg-[#eed9b2]">
          <img src="{{ asset('images/jacob.webp') }}" alt="Jacob, founder of Bowerman Digital" class="h-full w-full object-cover">
        </div>
      </div>
    --}}
    <div class="mx-auto max-w-3xl text-center">
      <div class="opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep">Who you'll work with</p>
        <h2 class="mt-3.5 font-display text-3xl font-black md:text-4xl">Hi, I'm Jacob.</h2>
        <p class="mx-auto mt-4 max-w-xl text-ink-soft">
          I build websites and digital strategy for Australian small businesses, one client at a time, so your project is never the small one on someone's list. You deal with me from first chat to launch and beyond. I'll explain what the robots are doing in plain English, and I won't use jargon unless you ask for it.
        </p>
        <p class="mt-4 font-display text-xl italic text-rust-deep">— Jacob, Bowerman Digital</p>

        {{-- TODO: swap in a real client quote --}}
        <blockquote class="sticker tilt-l mx-auto mt-8 max-w-xl bg-cream-3 px-8 py-7 text-left">
          <p class="font-display text-lg italic leading-normal">"Jacob rebuilt our website and quietly fixed things we didn't know were broken. Bookings went up, admin went down, and I finally understand where our enquiries come from."</p>
          <footer class="mt-3.5 font-mono text-[13px] text-ink-faint">That Disability Adventure Company</footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>

{{-- ─── Work ─── --}}
<section class="border-y-2 border-ink bg-cream-2 px-6 py-20 md:py-28">
  <div class="mx-auto max-w-7xl">
    <div class="mb-14 flex flex-wrap items-end justify-between gap-6">
      <h2 class="font-display text-3xl font-black leading-tight md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Some recent work</h2>
      <a href="{{ url('/portfolio') }}" class="font-mono text-sm font-bold text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">All case studies →</a>
    </div>

    {{-- Featured: TDAC --}}
    <article class="sticker overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="grid no-underline md:grid-cols-2">
        <div class="overflow-hidden border-b-2 border-ink md:border-b-0 md:border-r-2">
          <img src="{{ asset('images/tdac/tdac.webp') }}"
               srcset="{{ asset('images/tdac/tdac-sm.webp') }} 640w, {{ asset('images/tdac/tdac.webp') }} 1280w"
               sizes="(max-width: 767px) 90vw, 45vw"
               alt="That Disability Adventure Company website" width="1280" height="720" loading="lazy"
               class="retro-img h-full w-full object-cover object-top transition duration-700 hover:scale-[1.02]">
        </div>
        <div class="flex flex-col justify-center p-7 md:p-10">
          <div class="flex flex-wrap gap-2">
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">SEO</span>
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">CRM</span>
            <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">Email</span>
          </div>
          <h3 class="mt-4 font-display text-2xl font-black md:text-3xl">That Disability Adventure Company</h3>
          <p class="mt-3 text-ink-soft">Rebuilt the website to get them discovered, and built the CRM that now runs their participants, staff and bookings.</p>
          <div class="mt-6 border-t-2 border-ink pt-4">
            <b class="font-display text-3xl font-black text-rust-deep md:text-4xl">90 &rarr; 500+</b>
            <span class="block font-mono text-[13px] text-ink-faint">monthly visitors after the rebuild</span>
          </div>
          <span class="mt-6 inline-block font-mono text-sm font-bold text-rust-deep">Read the full story →</span>
        </div>
      </a>
    </article>

    {{-- Supporting: Crystal Caves + Vizzbud + Evie --}}
    <div class="mt-5 grid gap-5 md:grid-cols-3">
      {{-- Crystal Caves (newest) — placeholder tile until a screenshot lands --}}
      <article class="sticker tilt-l overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <a href="{{ url('/portfolio/crystal-caves') }}" class="block no-underline">
          <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
            <img src="{{ asset('images/crystal/crystalHero.webp') }}" srcset="{{ asset('images/crystal/crystalHero-sm.webp') }} 640w, {{ asset('images/crystal/crystalHero.webp') }} 1920w" sizes="(max-width: 767px) 90vw, 30vw" alt="Crystal Caves Atherton website" width="1920" height="1280" class="retro-img h-full w-full object-cover object-center transition duration-700 hover:scale-[1.03]" loading="lazy">
          </div>
          <div class="p-6">
            <div class="mb-3 flex flex-wrap gap-2">
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">Tourism</span>
              <span class="rounded-full border-[1.5px] border-ink bg-cream px-2.5 py-0.5 font-mono text-[11.5px]">SEO &amp; AI</span>
            </div>
            <h3 class="font-display text-lg font-semibold">Crystal Caves</h3>
            <p class="mt-1.5 text-[15px] text-ink-soft">Rebuilt the site for an award-winning Atherton attraction to show it off and get it found by AI and search.</p>
            <span class="mt-3.5 inline-block font-mono text-sm font-bold text-rust-deep">View case study →</span>
          </div>
        </a>
      </article>
      @php
        $projects = [
          ['href' => '/portfolio/vizzbud', 'img' => 'images/vizzbud/turtle', 'alt' => 'Vizzbud dive conditions platform', 'tags' => ['iOS','Android','Web'], 'h' => 'Vizzbud', 'p' => 'My own project: realtime dive conditions and a logbook for divers, on web, iOS and Android.'],
          ['href' => '/portfolio/evie-graphic-design', 'img' => 'images/evie/evie', 'alt' => 'Evie graphic design portfolio website', 'tags' => ['Portfolio','Design'], 'h' => 'Evie Graphic Design', 'p' => 'A sleek portfolio that wins freelance clients on its own.'],
        ];
      @endphp
      @foreach ($projects as $i => $pr)
        <article class="sticker {{ $i % 2 ? 'tilt-l' : 'tilt-r' }} overflow-hidden bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 200 + $i*50 }}">
          <a href="{{ url($pr['href']) }}" class="block no-underline">
            <div class="aspect-[16/9] overflow-hidden border-b-2 border-ink">
              <img src="{{ asset($pr['img'].'.webp') }}"
                   srcset="{{ asset($pr['img'].'-sm.webp') }} 640w, {{ asset($pr['img'].'.webp') }} 1280w"
                   sizes="(max-width: 767px) 90vw, 45vw"
                   alt="{{ $pr['alt'] }}" width="1280" height="720" loading="lazy"
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

    <div class="relative grid overflow-hidden rounded-[20px] border-2 border-ink md:grid-cols-3 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      @php
        $steps = [
          ['n' => '01', 'w' => 'Week one',      'bg' => 'bg-cream',     'h' => 'Audit', 'p' => "First I look at what the robots currently say about you. Sometimes it's nothing. Sometimes it's worse than nothing.", 'g' => 'you get: a plain-English report, free'],
          ['n' => '02', 'w' => 'Weeks two on',  'bg' => 'bg-cream-3',   'h' => 'Build', 'p' => "Then I fix it: site, structured data, llms.txt, automations. I build things rather than write reports about them.", 'g' => 'you get: weekly updates, a site you own'],
          ['n' => '03', 'w' => 'Ongoing',       'bg' => 'bg-[#e9e3c6]', 'h' => 'Grow',  'p' => "The platforms keep moving, so we keep adjusting. Month to month. Leave whenever you like.", 'g' => 'you get: monthly check-ins, no lock-in'],
        ];
      @endphp
      @foreach ($steps as $i => $st)
        <div class="{{ $st['bg'] }} flex flex-col border-ink p-9 {{ $i < 2 ? 'border-b-2 md:border-b-0 md:border-r-2' : '' }}">
          <div class="flex items-baseline justify-between gap-3">
            <span class="font-display text-5xl font-black text-rust">{{ $st['n'] }}</span>
            <span class="font-mono text-[12px] uppercase tracking-[0.15em] text-ink-faint">{{ $st['w'] }}</span>
          </div>
          <h3 class="mt-3.5 mb-2.5 font-display text-xl font-semibold">{{ $st['h'] }}</h3>
          <p class="text-[15.5px] text-ink-soft">{{ $st['p'] }}</p>
          <p class="mt-auto pt-5 font-mono text-[12px] font-bold text-rust-deep">{{ $st['g'] }}</p>
        </div>
      @endforeach

      {{-- Arrow badges on the seams (desktop) --}}
      <div class="pointer-events-none absolute left-1/3 top-1/2 hidden h-10 w-10 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border-2 border-ink bg-mustard font-display text-lg font-black text-ink md:flex" aria-hidden="true">→</div>
      <div class="pointer-events-none absolute left-2/3 top-1/2 hidden h-10 w-10 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border-2 border-ink bg-mustard font-display text-lg font-black text-ink md:flex" aria-hidden="true">→</div>
    </div>

    <p class="mt-8 text-center font-mono text-[13px] text-ink-faint opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      Most projects kick off within a week or two. And yes, I really do reply the same day.
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
      Tell me about your business and I'll send back a free, plain-English read on how visible you are to AI, and whether it's worth fixing.
    </p>
    <div class="opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
      <a href="{{ url('/contact') }}" class="btn-retro">Get your free AI audit</a>
    </div>
    <div class="mt-7 flex items-center justify-center gap-2 font-mono text-[13px] text-[#fff7ea]/85 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
      <span class="inline-block h-2 w-2 animate-pulse rounded-full bg-mustard"></span>
      Currently taking on one new client
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
