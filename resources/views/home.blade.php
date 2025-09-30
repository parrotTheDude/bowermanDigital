@extends('layouts.app')

@section('title', 'Web Development & SEO Agency | Bowerman Digital')
@section('meta_description', "We don't work for your competitors. We are a small digital agency located in Sydney, who decides to grow your business over the rest. It's simple as that.")

@push('head')
  <meta name="robots" content="index,follow">
  <meta property="og:title" content="Web Development & SEO Agency | Bowerman Digital">
  <meta property="og:description" content="We don't work for your competitors. We are a small digital agency located in Sydney, who decides to grow your business over the rest. It's simple as that.">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:image" content="{{ asset('images/og-default.jpg') }}">
  <meta name="twitter:card" content="summary_large_image">
@endpush

@push('schema')
  @include('partials.schema.organization')
  @include('partials.schema.website')
@endpush

@section('content')
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  {{-- MOBILE phone pinned to bottom of hero, raised higher --}}
  <div class="-mb-8 absolute inset-x-0 bottom-28 z-10 mx-auto flex justify-center md:hidden pointer-events-none">
    <a href="{{ url('/portfolio/evie-graphic-design') }}" class="block">
      <img
        class="h-auto w-80"
        src="{{ asset('images/mockups/evie-mobile2.webp') }}"
        alt="Evie Bowerman portfolio website"
      >
    </a>
  </div>

{{-- Fade overlay above phone but below text --}}
<div class="pointer-events-none absolute inset-x-0 bottom-0 z-20 h-80 bg-gradient-to-t from-black via-black/90 to-transparent md:hidden"></div>

  {{-- GRID with copy sits above everything --}}
  <section
    class="relative z-30 mx-auto grid max-w-7xl grid-cols-1 gap-10 px-6 
    pt-72 [@media(min-width:400px)_and_(max-width:767px)]:pt-96 
    md:grid-cols-12 md:pt-32 md:pb-32 md:items-center">
    {{-- LEFT copy --}}
    <div class="order-2 relative flex flex-col justify-end md:justify-center 
                opacity-0 translate-y-6 transition-all duration-700 ease-out 
                md:order-1 will-change-transform reveal md:col-span-7"
        data-delay="0">
        <div class="relative">
          <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur">
            Web • SEO • Email
          </span>

          <h1 class="mt-4 text-balance text-4xl font-bold text-white md:text-6xl">
            Build, optimize, and grow your online presence <span class="flash align-baseline">|</span>
          </h1>

          <p class="mt-5 hidden max-w-xl text-white/80 md:block">
            Welcome to Bowerman Digital 🤘🏼 Based in Sydney, we specialize in creating modern,
            user-focused websites and strategies tailored to elevate your business.
          </p>
          <p class="mt-2 hidden max-w-xl text-white/80 md:block">
            Know what you're looking for? Submit a short brief below to get started.
          </p>

          {{-- Buttons side-by-side --}}
          <div class="mt-8 flex flex-row flex-wrap items-center gap-3">
            <a href="{{ url('/contact') }}" class="no-underline">
              <div class="glow-on-hover"><p class="text-center">Get in touch</p></div>
            </a>
            <a href="{{ url('/services') }}"
              class="rounded-xl border border-white/10 bg-white/0 px-6 py-3 text-center text-white hover:bg-white/10 transition will-change-transform hover:scale-[1.02]">
              See services
            </a>
          </div>
        </div>
      </div>

    {{-- RIGHT: desktop mock unchanged --}}
    <div class="order-1 relative hidden items-center justify-center 
              md:order-2 md:flex md:col-span-5">
      <div class="group perspective-1000 opacity-0 transition-all duration-700 ease-out reveal" data-delay="100">
        <a href="{{ url('/portfolio/evie-graphic-design') }}"
          class="inline-block transform-gpu transition will-change-transform origin-bottom group-hover:scale-[1.02] group-hover:-rotate-1">
          <img class="h-auto w-[40rem] max-w-full" src="{{ asset('images/mockups/evie-mobile.webp') }}" alt="eviebowerman.com iPhone mockup">
        </a>
      </div>
    </div>
  </section>
</section>

<section class="relative z-20 bg-black px-6 py-16">
  <div class="mx-auto max-w-7xl">
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Our work so far</h2>
    <p class="mt-3 text-center text-white/80 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Here are some of our projects so far. Check out what we did with each project.</p>

    <div class="mt-10 grid gap-6 md:grid-cols-2">
      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="100">
        <div class="flex justify-center overflow-hidden rounded-xl">
          <img src="{{ asset('images/tdac.webp') }}" alt="TDAC Promotional Picture" class="max-w-full rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]">
        </div>
        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold text-white">That Disability Adventure Company</h3>
          <p class="mx-auto mt-2 max-w-prose text-sm text-white/80">
            TDAC is an NDIS disability service provider located in Melbourne and Gippsland. They provide services
            for those dealing with a range of disabilities to lead fulfilling lives and develop independent living skills.
          </p>
        </div>
        <div class="mx-auto mt-6 flex justify-center">
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="no-underline">
            <div class="glow-on-hover"><p>TDAC's Journey</p></div>
          </a>
        </div>
      </article>

      <article class="group rounded-2xl border border-white/10 bg-black/60 p-5 backdrop-blur-sm transition-all duration-500 will-change-transform hover:-translate-y-1 hover:border-cyan-400/30 hover:shadow-[0_0_0_1px_rgba(34,211,238,0.15)] opacity-0 translate-y-6 reveal" data-delay="150">
        <div class="flex justify-center overflow-hidden rounded-xl">
          <img src="{{ asset('images/evie.webp') }}" alt="Evie Bowerman Promotional Picture" class="max-w-full rounded-xl transform-gpu transition duration-700 group-hover:scale-[1.03]">
        </div>
        <div class="mt-6 text-center">
          <h3 class="text-lg font-semibold text-white">Evie's Graphics Portfolio</h3>
          <p class="mx-auto mt-2 max-w-prose text-sm text-white/80">
            Evie is a recent graduate of graphic design out of Northumbria University. We built a website to
            display her digital portfolio, helping her land work and showcase her projects.
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

<section class="relative z-20 bg-black px-6 pb-14 pt-14">
  <div class="pointer-events-none absolute inset-0 -z-10 opacity-40">
    <div class="el h-full w-full"></div>
  </div>
  <div class="mx-auto max-w-7xl">
    <h2 class="text-center text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Experts in digital experiences</h2>
    <p class="mx-auto mt-3 max-w-2xl text-center text-white/80 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
      From custom websites to seamless SEO strategies, we craft digital experiences that inspire.
    </p>

    <div class="mx-auto mt-10 grid w-full grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
      <aside class="rounded-2xl border border-white/10 bg-black/60 p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 opacity-0 translate-y-6 reveal" data-delay="100">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-3" alt="Simple Icon" src="{{ asset('icons/simplify.svg') }}">
        <h3 class="text-lg font-semibold text-white">Simple</h3>
        <p class="mt-2 text-sm text-white/80">We focus on simplicity, making it easy to manage, grow, and succeed online.</p>
      </aside>
      <aside class="rounded-2xl border border-white/10 bg-black/60 p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 opacity-0 translate-y-6 reveal" data-delay="150">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:-rotate-3" alt="Quality Icon" src="{{ asset('icons/quality.svg') }}">
        <h3 class="text-lg font-semibold text-white">Quality</h3>
        <p class="mt-2 text-sm text-white/80">Exceptional quality in every project so your brand shines.</p>
      </aside>
      <aside class="rounded-2xl border border-white/10 bg-black/60 p-6 text-center backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 opacity-0 translate-y-6 reveal" data-delay="200">
        <img class="mx-auto mb-3 h-16 w-16 invert transition-transform duration-500 will-change-transform group-hover:rotate-1" alt="Reliable Icon" src="{{ asset('icons/handshake.svg') }}">
        <h3 class="text-lg font-semibold text-white">Reliable</h3>
        <p class="mt-2 text-sm text-white/80">Count on us for solutions that keep your business running smoothly.</p>
      </aside>
    </div>

    <div class="mx-auto mt-10 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="250">
      <a href="{{ url('/services') }}" class="no-underline">
        <div class="glow-on-hover"><p>Learn about our services</p></div>
      </a>
    </div>
  </div>
</section>

<section class="relative z-20 bg-black px-6 py-16 text-center">
  <div class="mx-auto max-w-3xl">
    <h2 class="text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Get in touch</h2>
    <p class="mt-3 text-white/80 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="75">What are you waiting for? Click below to reach our contact form!</p>
    <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow pointing to the contact form" class="mx-auto mt-6 h-10 w-10 invert opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150" />
    <div class="mx-auto mt-6 flex justify-center opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="200">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Contact us today</p></div>
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

    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = parseInt(el.getAttribute('data-delay') || '0', 10);
          setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'none';
          }, delay);
          io.unobserve(el);
        }
      });
    }, { threshold: 0.2 });

    document.querySelectorAll('.reveal').forEach(el => io.observe(el));

    const mock = document.querySelector('.md\\:block a img');
    if (mock) {
      const wrap = mock.closest('.group');
      wrap.addEventListener('mousemove', (e) => {
        const rect = wrap.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width - 0.5) * 6;
        const y = ((e.clientY - rect.top) / rect.height - 0.5) * 6;
        mock.style.transform = `translateZ(0) rotateX(${ -y }deg) rotateY(${ x }deg) scale(1.02)`;
      });
      wrap.addEventListener('mouseleave', () => {
        mock.style.transform = '';
      });
    }
  })();
</script>
@endpush