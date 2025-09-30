{{-- resources/views/partials/portfolio/case.blade.php --}}
@php
  // ===== Props (all optional; render only if present) =====
  $title        = $title        ?? 'Case Study';
  $summary      = $summary      ?? '';
  $liveUrl      = $liveUrl      ?? null;
  $industry     = $industry     ?? null;
  $services     = $services     ?? [];
  $heroImage    = $heroImage    ?? null;

  $goals        = $goals        ?? [];  // [['label'=>'Leads/mo','value'=>'+45%'], ...]
  $metrics      = $metrics      ?? [];  // [['label'=>'Pagespeed','value'=>'98/100'], ...]
  $timeline     = $timeline     ?? null; // plain text or short bullets

  $challenge    = $challenge    ?? null;
  $whatWeDid    = $whatWeDid    ?? null;
  $result       = $result       ?? null;

  $beforeAfter  = $beforeAfter  ?? null; // ['before'=>'images/before.webp','after'=>'images/after.webp','caption'=>'Homepage']
  $screens      = $screens      ?? [];   // simple gallery: ['images/a.webp','images/b.webp']

  // Chapters: array of sections (any you want, any order)
  // e.g. [
  //   ['title'=>'Design System','body'=>'...md or text...','images'=>['images/x.webp','images/y.webp']],
  //   ['title'=>'Build & Performance','body'=>'...','images'=>[]],
  // ]
  $chapters     = $chapters     ?? [];

  $quote        = $quote        ?? null; // ['text'=>'','author'=>'','role'=>'']
  $tools        = $tools        ?? [];   // ['Laravel','TailwindCSS','Postmark','cPanel','Simple Analytics',...]
  $faqs         = $faqs         ?? [];   // [['q'=>'','a'=>''], ...]

  $moreWork     = $moreWork     ?? null; // ['title'=>'','subtitle'=>'','img'=>'','href'=>url(...),'label'=>'...']
@endphp

<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <section class="relative z-10 mx-auto max-w-7xl px-6 pb-12 pt-32 md:pt-40">
    <div class="flex flex-col gap-10 md:flex-row md:items-start md:justify-between">
      <div class="md:w-[60%] will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] tracking-wide text-white/80 backdrop-blur">Case study</span>
        <h1 class="mt-4 text-balance text-4xl font-bold text-white md:text-5xl">
          {{ $title }} <span class="flash align-baseline">|</span>
        </h1>
        @if($summary)
          <p class="mt-4 text-white/80">{{ $summary }}</p>
        @endif
      </div>

      <aside class="md:w-[32%] will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <div class="relative">
          <div class="pointer-events-none absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-cyan-400/35 via-fuchsia-400/25 to-emerald-400/35 blur-[2px]"></div>
          <div class="relative rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur">
            <ul class="space-y-4 text-white/90">
              @if($liveUrl)
                <li>
                  <span class="block text-xs uppercase tracking-wide text-white/60">Live link</span>
                  <a class="inline-flex items-center gap-2 underline decoration-white/30 underline-offset-2 transition hover:text-cyan-400"
                     target="_blank" rel="noopener" href="{{ $liveUrl }}">
                    <svg class="h-4 w-4 opacity-60" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path stroke-width="1.8" stroke-linecap="round" d="M14 3h7v7M21 3l-9 9"/><path stroke-width="1.8" stroke-linecap="round" d="M5 12v7a2 2 0 0 0 2 2h7"/></svg>
                    {{ parse_url($liveUrl, PHP_URL_HOST) ?? $liveUrl }}
                  </a>
                </li>
              @endif

              @if($industry)
                <li>
                  <span class="block text-xs uppercase tracking-wide text-white/60">Industry</span>
                  <span class="text-cyan-300">{{ $industry }}</span>
                </li>
              @endif

              @if(!empty($services))
                <li>
                  <span class="block text-xs uppercase tracking-wide text-white/60">How we helped</span>
                  <div class="mt-1 flex flex-wrap gap-2">
                    @foreach($services as $s)
                      <span class="rounded-full border border-white/10 bg-white/5 px-2.5 py-1 text-xs text-white/80">{{ $s }}</span>
                    @endforeach
                  </div>
                </li>
              @endif

              @if(!empty($tools))
                <li>
                  <span class="block text-xs uppercase tracking-wide text-white/60">Tools & stack</span>
                  <div class="mt-1 flex flex-wrap gap-2">
                    @foreach($tools as $t)
                      <span class="rounded-full border border-white/10 bg-white/5 px-2.5 py-1 text-xs text-white/80">{{ $t }}</span>
                    @endforeach
                  </div>
                </li>
              @endif

              @if($timeline)
                <li>
                  <span class="block text-xs uppercase tracking-wide text-white/60">Timeline</span>
                  <p class="mt-1 text-sm text-white/80">{{ $timeline }}</p>
                </li>
              @endif
            </ul>
          </div>
        </div>
      </aside>
    </div>

    @if($heroImage)
      <div class="mt-16 flex justify-center will-change-transform opacity-0 [transform:translateY(12px)] transition-all duration-700 ease-out reveal" data-delay="150">
        <div class="group perspective-1000">
          <img
            src="{{ \Illuminate\Support\Str::startsWith($heroImage, ['http','/']) ? $heroImage : asset($heroImage) }}"
            alt="{{ $title }} hero"
            class="w-full max-w-5xl rounded-xl border border-white/10 bg-white/5 transform-gpu transition will-change-transform group-hover:scale-[1.01]"
            data-tilt
          >
        </div>
      </div>
    @endif
  </section>
</section>

<section class="bg-white text-black">
  <div class="mx-auto max-w-6xl px-6 py-12 md:py-16">

    {{-- Goals / KPIs --}}
    @if(!empty($goals))
      <div class="mx-auto max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <h2 class="text-2xl font-semibold !text-black">Goals</h2>
        <div class="mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
          @foreach($goals as $g)
            <div class="rounded-xl border border-black/10 bg-black/5 p-4">
              <div class="text-sm text-black/60">{{ $g['label'] ?? '' }}</div>
              <div class="mt-1 text-lg font-semibold">{{ $g['value'] ?? '' }}</div>
            </div>
          @endforeach
        </div>
      </div>
    @endif

    {{-- Challenge --}}
    @if($challenge)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <h2 class="text-2xl font-semibold !text-black">The challenge</h2>
        <p class="mt-4">{{ $challenge }}</p>
      </div>
    @endif

    {{-- Before / After --}}
    @if($beforeAfter && !empty($beforeAfter['before']) && !empty($beforeAfter['after']))
      <div class="mx-auto mt-10 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <h3 class="text-xl font-semibold">Before & after</h3>
        <div class="mt-4 grid gap-4 md:grid-cols-2">
          <figure class="rounded-xl border border-black/10 bg-white p-3">
            <img class="w-full rounded-lg" src="{{ asset($beforeAfter['before']) }}" alt="Before">
            <figcaption class="mt-2 text-sm text-black/70">Before</figcaption>
          </figure>
          <figure class="rounded-xl border border-black/10 bg-white p-3">
            <img class="w-full rounded-lg" src="{{ asset($beforeAfter['after']) }}" alt="After">
            <figcaption class="mt-2 text-sm text-black/70">After</figcaption>
          </figure>
        </div>
        @if(!empty($beforeAfter['caption']))
          <p class="mt-2 text-sm text-black/60">{{ $beforeAfter['caption'] }}</p>
        @endif
      </div>
    @endif

    {{-- What we did --}}
    @if($whatWeDid)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <h2 class="text-2xl font-semibold !text-black">What we did</h2>
        <div class="prose prose-neutral prose-h3:mt-6 max-w-none">
          {!! nl2br(e($whatWeDid)) !!}
        </div>
      </div>
    @endif

    {{-- Chapters (Design / Build / SEO / Email / Ops) --}}
    @if(!empty($chapters))
      <div class="mx-auto mt-12 max-w-5xl space-y-12">
        @foreach($chapters as $i => $ch)
          <section class="will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 200 + ($i*50) }}">
            <h3 class="text-xl font-semibold !text-black">{{ $ch['title'] ?? 'Section' }}</h3>
            @if(!empty($ch['body']))
              <div class="mt-3 prose prose-neutral max-w-none">
                {!! nl2br(e($ch['body'])) !!}
              </div>
            @endif
            @if(!empty($ch['images']))
              <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                @foreach($ch['images'] as $img)
                  <div class="overflow-hidden rounded-xl border border-black/10 bg-white">
                    <img src="{{ \Illuminate\Support\Str::startsWith($img,['http','/']) ? $img : asset($img) }}" alt="{{ $ch['title'] ?? 'chapter' }}" class="w-full">
                  </div>
                @endforeach
              </div>
            @endif
          </section>
        @endforeach
      </div>
    @endif

    {{-- Simple Screens Gallery --}}
    @if(!empty($screens))
      <div class="mt-12 grid grid-cols-1 gap-6 md:grid-cols-{{ min(count($screens), 2) }}">
        @foreach($screens as $img)
          <div class="flex justify-center">
            <img src="{{ \Illuminate\Support\Str::startsWith($img, ['http','/']) ? $img : asset($img) }}"
                 alt="{{ $title }} screenshot"
                 class="w-full max-w-5xl rounded-xl shadow-sm">
          </div>
        @endforeach
      </div>
    @endif

    {{-- Metrics / Outcomes --}}
    @if(!empty($metrics))
      <div class="mx-auto mt-12 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
        <h2 class="text-2xl font-semibold !text-black">Outcomes</h2>
        <div class="mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
          @foreach($metrics as $m)
            <div class="rounded-xl border border-black/10 bg-emerald-50 p-4">
              <div class="text-sm text-black/60">{{ $m['label'] ?? '' }}</div>
              <div class="mt-1 text-lg font-semibold">{{ $m['value'] ?? '' }}</div>
            </div>
          @endforeach
        </div>
      </div>
    @endif

    {{-- Result Summary --}}
    @if($result)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="300">
        <h2 class="text-2xl font-semibold !text-black">The result</h2>
        <p class="mt-4">{{ $result }}</p>
      </div>
    @endif

    {{-- Testimonial --}}
    @if($quote && !empty($quote['text']))
      <figure class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="350">
        <blockquote class="rounded-2xl border border-black/10 bg-black/5 p-6 text-lg leading-relaxed">
          “{{ $quote['text'] }}”
        </blockquote>
        <figcaption class="mt-3 text-sm text-black/70">
          — {{ $quote['author'] ?? 'Client' }} @if(!empty($quote['role'])) • <span>{{ $quote['role'] }}</span> @endif
        </figcaption>
      </figure>
    @endif

    {{-- FAQ --}}
    @if(!empty($faqs))
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="400">
        <h2 class="text-2xl font-semibold !text-black">Project FAQ</h2>
        <div class="mt-4 space-y-3">
          @foreach($faqs as $f)
            <details class="rounded-xl border border-black/10 bg-white p-4">
              <summary class="cursor-pointer select-none text-base font-medium">{{ $f['q'] ?? '' }}</summary>
              @if(!empty($f['a']))
                <div class="mt-2 text-black/80">{{ $f['a'] }}</div>
              @endif
            </details>
          @endforeach
        </div>
      </div>
    @endif
  </div>

  {{-- standout CTA --}}
  <div class="mx-auto max-w-6xl">
    <div class="relative mx-auto max-w-5xl overflow-hidden rounded-3xl pb-8">
      {{-- animated glow border --}}
      <div class="pointer-events-none absolute -inset-[1.5px] rounded-3xl bg-[conic-gradient(at_30%_50%,#22d3ee33,transparent_25%,#a78bfa33_50%,transparent_75%,#34d39933)] blur-[4px]"></div>

      {{-- subtle spotlight + grid --}}
      <div class="absolute inset-0 -z-0">
        <div class="absolute -top-32 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-cyan-400/15 blur-3xl"></div>
        <div class="absolute -bottom-24 -left-16 h-56 w-56 rounded-full bg-fuchsia-400/15 blur-3xl"></div>
        <svg class="absolute inset-0 opacity-[0.08]" aria-hidden="true">
          <defs>
            <pattern id="dots" width="16" height="16" patternUnits="userSpaceOnUse">
              <circle cx="1" cy="1" r="1" fill="white"></circle>
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#dots)"></rect>
        </svg>
      </div>

      <div class="relative isolate rounded-3xl border border-white/10 bg-black/60 p-8 text-center shadow-2xl backdrop-blur md:p-14">
        <div class="mx-auto inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] tracking-wide text-white/80">
          <span class="inline-block h-2 w-2 animate-pulse rounded-full bg-emerald-400"></span>
          Work with us
        </div>

        <h2 class="mt-4 text-3xl font-semibold leading-tight text-white md:text-4xl">
          Ready to turn your idea into real results?
        </h2>
        <p class="mx-auto mt-3 max-w-2xl text-white/80">
          Share a quick brief and we’ll map the fastest path to launch, traction, and measurable growth.
        </p>

        {{-- trust badges --}}
        <div class="mx-auto mt-6 flex flex-wrap items-center justify-center gap-2 text-sm">
          <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-white/70">Replies in &lt; 1 business day</span>
          <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-white/70">One client at a time</span>
          <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-white/70">Sydney-based</span>
        </div>

        <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
          <a href="{{ url('/contact') }}" class="no-underline">
            <div class="glow-on-hover"><p>Start your brief</p></div>
          </a>
          <a href="{{ url('/services') }}" class="rounded-xl border border-white/10 bg-white/0 px-6 py-3 text-white transition hover:bg-white/10">
            Explore services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@if($moreWork)
  <section class="bg-black px-6 py-14">
    <div class="mx-auto max-w-6xl">
      <h2 class="text-center text-2xl font-semibold text-white will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">More work</h2>

      <div class="mx-auto mt-8 grid max-w-4xl grid-cols-1 gap-6">
        <article class="group relative will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
          <div class="pointer-events-none absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-cyan-400/35 via-fuchsia-400/25 to-emerald-400/35 blur-[2px]"></div>
          <div class="relative rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur transition hover:border-cyan-400/30">
            @if(!empty($moreWork['img']))
              <div class="flex justify-center overflow-hidden rounded-xl">
                <img src="{{ asset($moreWork['img']) }}" alt="{{ $moreWork['title'] ?? 'Project' }}"
                     class="max-w-full rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.02]">
              </div>
            @endif
            <div class="mt-5 text-center">
              <h3 class="text-lg font-semibold text-white">{{ $moreWork['title'] ?? 'Case study' }}</h3>
              @if(!empty($moreWork['subtitle']))
                <p class="mt-1 text-white/70">{{ $moreWork['subtitle'] }}</p>
              @endif
            </div>
            @if(!empty($moreWork['href']))
              <div class="mt-6 flex justify-center">
                <a href="{{ $moreWork['href'] }}" class="no-underline">
                  <div class="glow-on-hover"><p>{{ $moreWork['label'] ?? 'View project' }}</p></div>
                </a>
              </div>
            @endif
          </div>
        </article>
      </div>
    </div>
  </section>
@endif

<section class="bg-black px-6 pb-16 pt-8 text-center">
  <div class="mx-auto max-w-3xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
    <h2 class="text-2xl font-semibold text-white">Interested in working with us?</h2>
    <p class="mt-2 text-white/80">Click below to get to our contact form.</p>
    <img src="{{ asset('icons/arrow.svg') }}" class="mx-auto mt-6 h-10 w-10 invert" alt="">
    <div class="mt-6 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Contact us today</p></div>
      </a>
    </div>
  </div>
</section>

@once
  @push('head')
    <style>
      @media (prefers-reduced-motion: reduce){
        .reveal{opacity:1 !important; transform:none !important; transition:none !important}
      }
      .flash{animation:flash 1.1s steps(2,end) infinite}
      @keyframes flash{50%{opacity:0}}
    </style>
  @endpush

  @push('scripts')
    <script>
      (function(){
        const els = document.querySelectorAll('.reveal');
        if (!els.length) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
          els.forEach(el => { el.style.opacity = '1'; el.style.transform = 'none'; });
          return;
        }
        const io = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const delay = parseInt(el.getAttribute('data-delay') || '0', 10);
            setTimeout(() => {
              el.style.opacity = '1';
              el.style.transform = 'none';
            }, delay);
            io.unobserve(el);
          });
        }, { threshold: 0.18 });
        els.forEach(el => io.observe(el));

        const tiltImg = document.querySelector('[data-tilt]');
        if (tiltImg && window.matchMedia('(pointer:fine)').matches) {
          const wrap = tiltImg.closest('.group');
          wrap.addEventListener('mousemove', (e) => {
            const r = wrap.getBoundingClientRect();
            const x = ((e.clientX - r.left) / r.width - 0.5) * 6;
            const y = ((e.clientY - r.top) / r.height - 0.5) * 6;
            tiltImg.style.transform = `translateZ(0) rotateX(${-y}deg) rotateY(${x}deg) scale(1.01)`;
          });
          wrap.addEventListener('mouseleave', () => {
            tiltImg.style.transform = '';
          });
        }
      })();
    </script>
  @endpush
@endonce