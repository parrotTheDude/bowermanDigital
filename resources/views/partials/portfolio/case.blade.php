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

    <section class="relative z-10 mx-auto max-w-7xl px-5 pb-10 pt-16 md:px-6 md:pb-12 md:pt-32">
      {{-- Title + summary --}}
      <div class="mx-auto max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
        <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] tracking-wide text-white/80 backdrop-blur">
          Case study
        </span>
        <h1 class="mt-3 text-balance text-3xl font-bold text-white md:mt-4 md:text-5xl">
          {{ $title }} <span class="flash align-baseline">|</span>
        </h1>
        @if($summary)
          <p class="mt-2 text-sm text-white/70 md:mt-4 md:text-base md:text-white/80">{{ $summary }}</p>
        @endif
      </div>

      {{-- Inline bar: Visit site + Industry --}}
      @if($liveUrl || $industry)
        <div class="mt-4 will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal md:mt-6" data-delay="60">
          <div class="mx-auto flex w-full max-w-5xl flex-col gap-2 sm:flex-row sm:items-center sm:justify-between sm:gap-3">
            @if($liveUrl)
              @php $host = parse_url($liveUrl, PHP_URL_HOST) ?: $liveUrl; @endphp
              <a href="{{ $liveUrl }}" target="_blank" rel="noopener noreferrer"
                aria-label="Visit website: {{ $host }}"
                class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-white/20 bg-zinc-900 px-5 py-2 text-sm font-medium text-white transition hover:bg-zinc-800 sm:w-auto">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                  <path stroke-width="1.8" stroke-linecap="round" d="M14 3h7v7M21 3l-9 9"/>
                  <path stroke-width="1.8" stroke-linecap="round" d="M5 12v7a2 2 0 0 0 2 2h7"/>
                </svg>
                Visit website →
              </a>
            @endif

            @if($industry)
              <span class="inline-flex w-full items-center justify-center rounded-full border border-white/20 bg-zinc-900 px-4 py-1.5 text-sm font-medium text-cyan-300 sm:w-auto sm:py-2">
                {{ $industry }}
              </span>
            @endif
          </div>
        </div>
      @endif

      {{-- How we helped — horizontal auto-scrolling marquee --}}
      @if(!empty($services))
        <div class="mt-4 will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal md:mt-6" data-delay="90">
          <div class="relative mx-auto w-full max-w-5xl overflow-hidden rounded-2xl border border-white/10 bg-black/60 px-4 py-3 backdrop-blur md:px-5 md:py-4">
            <span class="block text-xs uppercase tracking-wide text-white/60 mb-2">How we helped</span>
            <div class="overflow-hidden relative" style="mask-image:linear-gradient(to right,transparent,black 4%,black 96%,transparent)">
              <div class="flex gap-2 animate-marquee whitespace-nowrap">
                @foreach($services as $s)
                  <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] text-white/80 md:text-xs shrink-0">{{ $s }}</span>
                @endforeach
                @foreach($services as $s)
                  <span class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-[11px] text-white/80 md:text-xs shrink-0" aria-hidden="true">{{ $s }}</span>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endif

      {{-- Hero image --}}
      @if($heroImage)
        <div class="mt-8 flex justify-center will-change-transform opacity-0 [transform:translateY(12px)] transition-all duration-700 ease-out reveal md:mt-12" data-delay="150">
          <div class="group perspective-1000 w-full max-w-5xl">
            <div class="relative mx-auto w-full overflow-hidden rounded-xl border border-white/10 bg-white/5">
              <div class="aspect-[16/9]">
                <picture>
                  @php
                    $isAbsolute = \Illuminate\Support\Str::startsWith($heroImage, ['http','/']);
                    $src = $isAbsolute ? $heroImage : asset($heroImage);
                  @endphp
                  <source srcset="{{ $src }}" type="image/webp">
                  <img
                    src="{{ $src }}"
                    alt="{{ $title }} hero"
                    class="h-full w-full object-cover transition group-hover:scale-[1.01]"
                    loading="eager"
                    decoding="async"
                    fetchpriority="high"
                    sizes="(min-width: 1280px) 960px, (min-width: 768px) 80vw, 100vw"
                    srcset="
                      {{ $src }} 960w
                    "
                  >
                </picture>
              </div>
            </div>
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

        <dl class="mt-5 grid gap-3 sm:grid-cols-2 md:grid-cols-3">
          @foreach($goals as $g)
            <div class="group relative h-full rounded-lg border border-black/10 bg-black/[0.03] p-4 transition hover:-translate-y-0.5 hover:border-cyan-400/30">
              {{-- subtle accent bar --}}
              <span aria-hidden="true" class="absolute inset-y-0 left-0 w-[2px] rounded-l-lg bg-gradient-to-b from-cyan-400/60 via-fuchsia-400/45 to-emerald-400/60"></span>

              <dt class="pl-2 text-xs uppercase tracking-wide text-black/60">{{ $g['label'] ?? '' }}</dt>

              <dd class="pl-2 mt-1 text-lg font-semibold tracking-tight text-black">
                {{ $g['value'] ?? '' }}
              </dd>
            </div>
          @endforeach
        </dl>
      </div>
    @endif

    @if(!empty($goals) && ($challenge || $whatWeDid || ($beforeAfter && !empty($beforeAfter['before'])) || !empty($screens) || !empty($metrics) || $result))
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Challenge --}}
    @if($challenge)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <h2 class="text-2xl font-semibold !text-black">The challenge</h2>
        <div class="mt-4 prose prose-neutral max-w-none leading-relaxed">
          {!! nl2br(e($challenge)) !!}
        </div>
      </div>
    @endif

    @if($challenge && (($beforeAfter && !empty($beforeAfter['before'])) || $whatWeDid))
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Showcase (key visuals) --}}
    @if($beforeAfter && !empty($beforeAfter['before']) && !empty($beforeAfter['after']))
      <div class="mx-auto mt-10 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <h2 class="text-xl font-semibold !text-black">Highlights</h2>
        <div class="mt-4 grid gap-4 md:grid-cols-2">
          <figure class="rounded-xl border border-black/10 bg-white p-3">
            <img class="w-full rounded-lg" src="{{ asset($beforeAfter['before']) }}" alt="{{ $beforeAfter['caption_before'] ?? $title . ' — before' }}" loading="lazy" width="800" height="450">
            <figcaption class="mt-2 text-sm text-black/70">
              {{ $beforeAfter['caption_before'] ?? 'Refreshed homepage' }}
            </figcaption>
          </figure>
          <figure class="rounded-xl border border-black/10 bg-white p-3">
            <img class="w-full rounded-lg" src="{{ asset($beforeAfter['after']) }}" alt="{{ $beforeAfter['caption_after'] ?? $title . ' — after' }}" loading="lazy" width="800" height="450">
            <figcaption class="mt-2 text-sm text-black/70">
              {{ $beforeAfter['caption_after'] ?? 'Activities page' }}
            </figcaption>
          </figure>
        </div>
        @if(!empty($beforeAfter['caption']))
          <p class="mt-2 text-sm text-black/60">{{ $beforeAfter['caption'] }}</p>
        @endif
      </div>
    @endif

    @if(($beforeAfter && !empty($beforeAfter['before'])) && $whatWeDid)
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- What we did --}}
    @if($whatWeDid)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <h2 class="text-2xl font-semibold !text-black">What we did</h2>
        <div class="mt-4 prose prose-neutral max-w-none leading-relaxed">
          {!! nl2br(e($whatWeDid)) !!}
        </div>
      </div>
    @endif

  {{-- Chapters (Design / Build / SEO / Email / Ops) --}}
  @if(!empty($chapters))
    <div class="mx-auto mt-12 max-w-5xl space-y-12">
      @foreach($chapters as $i => $ch)
        <section class="will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 200 + ($i*50) }}">
          <h2 class="text-xl font-semibold !text-black">{{ $ch['title'] ?? 'Section' }}</h2>
          
          @if(!empty($ch['body']))
            <div class="mt-3 prose prose-neutral max-w-none">
              {!! nl2br(e($ch['body'])) !!}
            </div>
          @endif

          @if(!empty($ch['images']))
            @if(count($ch['images']) === 1)
              {{-- Single image — centered --}}
              <div class="mt-5 flex justify-center">
                <div class="overflow-hidden rounded-xl border border-black/10 bg-white max-w-md">
                  <img src="{{ \Illuminate\Support\Str::startsWith($ch['images'][0],['http','/']) ? $ch['images'][0] : asset($ch['images'][0]) }}"
                      alt="{{ $ch['title'] ?? 'chapter' }}"
                      class="w-full"
                      loading="lazy">
                </div>
              </div>
            @else
              {{-- Multiple images — grid --}}
              <div class="mt-5 grid grid-cols-1 gap-4 md:grid-cols-2">
                @foreach($ch['images'] as $img)
                  <div class="overflow-hidden rounded-xl border border-black/10 bg-white">
                    <img src="{{ \Illuminate\Support\Str::startsWith($img,['http','/']) ? $img : asset($img) }}"
                        alt="{{ $ch['title'] ?? 'chapter' }}"
                        class="w-full"
                        loading="lazy">
                  </div>
                @endforeach
              </div>
            @endif
          @endif
        </section>
      @endforeach
    </div>
  @endif

    @if(($whatWeDid || !empty($chapters)) && !empty($screens))
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Screens showcase (styled like before/after) --}}
    @if(!empty($screens) && count($screens) >= 2)
      <div class="mx-auto mt-12 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="180">
        <h2 class="text-xl font-semibold !text-black">Highlights from the build</h2>
        <div class="mt-4 grid gap-6 md:grid-cols-2">
          @foreach($screens as $i => $img)
            <figure class="rounded-xl border border-black/10 bg-white p-3">
              <img src="{{ \Illuminate\Support\Str::startsWith($img, ['http','/']) ? $img : asset($img) }}"
                  alt="{{ $captions[$i] ?? $title . ' screenshot ' . ($i+1) }}"
                  class="w-full rounded-lg shadow-sm"
                  loading="lazy"
                  width="800" height="408">
              <figcaption class="mt-2 text-sm text-black/70">
                {{ $captions[$i] ?? 'Screenshot' }}
              </figcaption>
            </figure>
          @endforeach
        </div>
      </div>
    @elseif(!empty($screens))
      <div class="mx-auto mt-12 max-w-5xl flex justify-center">
        <img src="{{ \Illuminate\Support\Str::startsWith($screens[0], ['http','/']) ? $screens[0] : asset($screens[0]) }}"
            alt="{{ $title }} screenshot"
            class="w-full max-w-5xl rounded-xl shadow-sm"
            loading="lazy" width="960" height="490">
      </div>
    @endif

    @if(!empty($screens) && !empty($metrics))
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Metrics / Outcomes --}}
    @if(!empty($metrics))
      <div class="mx-auto mt-12 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
        <h2 class="text-2xl font-semibold !text-black">Outcomes</h2>
        <div class="mt-5 grid gap-4 sm:grid-cols-2 md:grid-cols-3">
          @foreach($metrics as $m)
            <div class="rounded-lg border border-black/10 bg-emerald-50 px-4 py-3">
              <div class="text-xs font-medium text-black/60 tracking-wide">{{ $m['label'] ?? '' }}</div>
              <div class="mt-1 text-base font-semibold">{{ $m['value'] ?? '' }}</div>
            </div>
          @endforeach
        </div>
      </div>
    @endif

    @if(!empty($metrics) && $result)
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Result Summary --}}
    @if($result)
      <div class="mx-auto mt-12 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="300">
        <h2 class="text-2xl font-semibold !text-black">The result</h2>
        <div class="mt-4 prose prose-neutral max-w-none leading-relaxed">
          {!! nl2br(e($result)) !!}
        </div>
      </div>
    @endif

    @if($result && !empty($tools))
      <hr style="border:none;height:1px;background:linear-gradient(to right,transparent,rgba(0,0,0,0.1),transparent)" class="mx-auto mt-14 max-w-3xl">
    @endif

    {{-- Tools / Tech Stack --}}
    @if(!empty($tools))
      <div class="mx-auto mt-12 max-w-5xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="320">
        <h2 class="text-2xl font-semibold !text-black">Built with</h2>
        <div class="mt-4 flex flex-wrap gap-2">
          @foreach($tools as $tool)
            <span class="rounded-full border border-black/10 bg-black/[0.03] px-4 py-1.5 text-sm font-medium text-black/75">{{ $tool }}</span>
          @endforeach
        </div>
      </div>
    @endif

    {{-- Testimonial --}}
    @if($quote && !empty($quote['text']))
      <figure class="mx-auto mt-16 max-w-4xl will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="350">

        {{-- gradient frame --}}
        <div class="relative rounded-3xl border border-white/10 bg-gradient-to-br from-black/80 via-black/70 to-black/80 p-8 shadow-xl backdrop-blur">
          
          {{-- testimonial label pill --}}
          <div class="mb-6 flex justify-center">
            <span class="inline-flex items-center rounded-full border border-cyan-400/30 bg-cyan-400/10 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-cyan-300">
              Client Testimonial
            </span>
          </div>

          <blockquote class="text-xl font-medium leading-relaxed text-white text-center">
            “{!! str_replace(
              ['Highly Recommend', 'game changer', 'easier for participants', 'positive feedback'],
              ['<span class="text-cyan-300 font-semibold">Highly Recommend</span>',
              '<span class="text-cyan-300 font-semibold">game changer</span>',
              '<span class="text-cyan-300 font-semibold">easier for participants</span>',
              '<span class="text-cyan-300 font-semibold">positive feedback</span>'],
              nl2br(e($quote['text']))
            ) !!}”
          </blockquote>
        </div>

        <figcaption class="mt-4 text-sm font-medium text-white/70 text-center">
          — {{ $quote['author'] ?? 'Client' }} 
          @if(!empty($quote['role'])) <span class="text-white/50">• {{ $quote['role'] }}</span> @endif
        </figcaption>
      </figure>
    @endif
  </div>

  {{-- ── CTA ── --}}
  <div class="mx-auto max-w-6xl px-4 pb-12 md:px-6 md:pb-16">
    <div class="relative mx-auto max-w-5xl overflow-hidden rounded-2xl md:rounded-3xl" style="background:#0a0a0a">

      {{-- visible colour glow orbs --}}
      <div class="absolute -top-10 left-1/4 h-48 w-48 rounded-full blur-2xl pointer-events-none md:h-72 md:w-72 md:blur-3xl" style="background:rgba(34,211,238,0.22)" aria-hidden="true"></div>
      <div class="absolute -bottom-10 right-1/4 h-44 w-44 rounded-full blur-2xl pointer-events-none md:h-64 md:w-64 md:blur-3xl" style="background:rgba(167,139,250,0.18)" aria-hidden="true"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-32 w-32 rounded-full blur-2xl pointer-events-none md:h-48 md:w-48 md:blur-3xl" style="background:rgba(52,211,153,0.14)" aria-hidden="true"></div>

      <div class="relative flex flex-col items-center px-5 py-10 sm:px-8 sm:py-12 md:px-16 md:py-16">

        <h2 class="max-w-sm text-xl font-semibold leading-snug text-white text-center sm:max-w-md sm:text-2xl md:text-3xl">
          Ready to build something great?
        </h2>

        {{-- buttons --}}
        <div class="mt-6 flex flex-col items-stretch gap-3 sm:flex-row sm:items-center sm:justify-center">
          <a href="{{ url('/contact') }}" class="no-underline flex justify-center sm:w-auto">
            <div class="glow-on-hover w-full"><p>Start your brief</p></div>
          </a>
          <a href="{{ url('/services') }}" class="rounded-xl border border-white/10 px-6 py-3 text-center text-sm font-medium text-white transition hover:bg-white/10 sm:w-auto">
            Explore services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

@if($moreWork)
  <section class="bg-black px-6 py-14 pt-6">
    <div class="mx-auto max-w-6xl">
      <h2 class="text-center text-2xl font-semibold text-white will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">More work</h2>

      <div class="mx-auto mt-8 grid max-w-4xl grid-cols-1 gap-6">
        <article class="group relative will-change-transform opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">
          <div class="pointer-events-none absolute -inset-[1px] rounded-2xl bg-gradient-to-r from-cyan-400/35 via-fuchsia-400/25 to-emerald-400/35 blur-[2px]"></div>
          <div class="relative rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur transition hover:border-cyan-400/30">
            @if(!empty($moreWork['img']))
              <div class="flex justify-center overflow-hidden rounded-xl">
                <img src="{{ asset($moreWork['img']) }}" alt="{{ $moreWork['title'] ?? 'Project' }}"
                     class="max-w-full rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.02]"
                     loading="lazy" width="800" height="437">
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


@once
  @push('head')
    <style>
      @media (prefers-reduced-motion: reduce){
        .reveal{opacity:1 !important; transform:none !important; transition:none !important}
      }
      .flash{animation:flash 1.2s ease-in-out infinite}
      @keyframes flash{50%{opacity:0}}
      .animate-marquee{animation:marquee 12s linear infinite;will-change:transform}
      @keyframes marquee{0%{transform:translate3d(0,0,0)}100%{transform:translate3d(-50%,0,0)}}
      @media (prefers-reduced-motion: reduce){.animate-marquee{animation:none}}
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