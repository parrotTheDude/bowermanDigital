@extends('layouts.app')

@section('title', 'Services | Bowerman Digital')
@section('meta_description', 'Web development, technical SEO, email marketing, and CRM setup. We build fast, accessible websites and growth strategies with clear, measurable outcomes.')


@push('schema')
  @php
    $schema = [
      '@@context' => 'https://schema.org',
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

{{-- ── HERO ── --}}
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-24 pb-12 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">What we do</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Build smart. Grow faster.</h1>
      <p class="mt-4 text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">We focus on the fundamentals that compound: performance, accessibility, and a content/search strategy that actually converts.</p>
    </div>
  </div>
</section>

{{-- ── SERVICES GRID ── --}}
<section class="relative z-20 bg-zinc-900 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

      {{-- Web Development --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/webDev.svg') }}" alt="Web development icon">
        <h2 class="text-lg font-semibold text-white">Websites That Work</h2>
        <p class="mt-2 text-sm text-white/70">We build websites that look great, load fast, and help you win more customers — without the tech headache.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Easy for you (and your customers) to use</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Built to show up properly on Google & social media</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Fast, mobile-friendly, and reliable</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/portfolio') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">See examples →</a>
        </div>
      </div>

      {{-- SEO --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/seo.svg') }}" alt="SEO icon">
        <h2 class="text-lg font-semibold text-white">Get Found on Google (SEO)</h2>
        <p class="mt-2 text-sm text-white/70">We fix the issues that stop your site from showing up and create a clear plan to bring in more customers through search engines.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Full check-up on your website's health</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Better structure so Google actually shows you</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Content ideas that drive enquiries & sales</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Get an audit →</a>
        </div>
      </div>

      {{-- Email Marketing --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/support.svg') }}" alt="Email marketing icon">
        <h2 class="text-lg font-semibold text-white">Smart Email Marketing</h2>
        <p class="mt-2 text-sm text-white/70">Stay in touch with your customers automatically. From first-time buyers to repeat business, we set up emails that convert.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Welcome emails for new customers</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Follow-ups that encourage repeat business</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Clear reporting so you know it's working</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Plan a flow →</a>
        </div>
      </div>

      {{-- CRM --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/simplify.svg') }}" alt="CRM icon">
        <h2 class="text-lg font-semibold text-white">CRM Setup & Automation</h2>
        <p class="mt-2 text-sm text-white/70">Keep all your leads, customers, and sales in one tidy place. We set up a CRM that fits your business and automate the boring bits.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Pick the right tool (HubSpot, Pipedrive, or simple alternatives)</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Track enquiries from website to sale with clear stages</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Automations for follow-ups, reminders, and hand-offs</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Chat about CRM →</a>
        </div>
      </div>

      {{-- Privacy & Security --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/quality.svg') }}" alt="Security icon">
        <h2 class="text-lg font-semibold text-white">Privacy & Security Basics</h2>
        <p class="mt-2 text-sm text-white/70">Protect your business and customer data without the hassle. We set sensible defaults and keep things up to date.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> SSL, backups, access control, and updates covered</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Privacy policy, cookie banner, and data requests made simple</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Best-practice security headers and uptime monitoring</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Book a quick check →</a>
        </div>
      </div>

      {{-- Content & Strategy --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" src="{{ asset('icons/design.svg') }}" alt="Content strategy icon">
        <h2 class="text-lg font-semibold text-white">Content & Strategy</h2>
        <p class="mt-2 text-sm text-white/70">We help you plan, create, and publish content that connects with your audience and supports your business goals.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Blog posts and articles that build trust</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> Campaign ideas tailored to your customers</li>
          <li class="flex gap-2"><span class="text-cyan-400/60">—</span> A clear strategy so content works (not just fills space)</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Plan content →</a>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ── YOUR JOURNEY (Timeline) ── --}}
<section class="relative z-20 bg-black px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <div class="text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">How it works</span>
      <h2 class="mt-3 text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Your Journey With Us</h2>
    </div>

    <div class="relative mx-auto mt-12 max-w-2xl">
      {{-- Timeline line --}}
      <div class="absolute left-5 top-0 bottom-0 w-px bg-gradient-to-b from-cyan-400/40 via-cyan-400/20 to-transparent md:left-1/2 md:-translate-x-px"></div>

      @php
        $steps = [
          ['num' => '01', 'title' => 'Chat', 'desc' => 'We learn about your business, goals, and what you need. No commitments, just a conversation.'],
          ['num' => '02', 'title' => 'Plan', 'desc' => 'We map out the best approach, timeline, and budget so there are no surprises.'],
          ['num' => '03', 'title' => 'Build', 'desc' => 'You see regular updates as we bring it to life. Feedback loops keep everything on track.'],
          ['num' => '04', 'title' => 'Launch', 'desc' => 'We test, fine-tune, and get everything live. You sign off before anything goes public.'],
          ['num' => '05', 'title' => 'Grow', 'desc' => 'Ongoing support, SEO, and marketing to keep momentum building month after month.'],
        ];
      @endphp

      @foreach ($steps as $i => $step)
        <div class="relative flex items-start gap-5 pb-10 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 50 + $i * 50 }}">
          {{-- Dot --}}
          <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-cyan-400/30 bg-black text-xs font-bold text-cyan-300">
            {{ $step['num'] }}
          </div>
          {{-- Content --}}
          <div class="pt-1.5">
            <h3 class="text-base font-semibold text-white">{{ $step['title'] }}</h3>
            <p class="mt-1 text-sm text-white/60">{{ $step['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ── FAQs (Accordion) ── --}}
<section class="relative z-20 bg-zinc-900 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-2xl">
    <div class="text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Questions</span>
      <h2 class="mt-3 text-3xl font-semibold text-white opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Frequently Asked</h2>
    </div>

    <div class="mt-10 space-y-3" id="faq-list">
      @php
        $faqs = [
          ['q' => 'How soon can we get started?', 'a' => 'Most projects kick off in about a week or two. Quick jobs can start even faster.'],
          ['q' => 'Will you look after my website once it\'s live?', 'a' => 'Absolutely. We can keep things updated, secure, and running smoothly so you don\'t have to worry about it.'],
          ['q' => 'What does "success" mean for my business?', 'a' => 'That depends on your goals — more enquiries, more sales, a faster site, or showing up higher on Google. We set clear targets together.'],
          ['q' => 'How much does a project cost?', 'a' => 'It depends on the scope, but we\'re always upfront about pricing. After an initial chat we\'ll give you a clear quote with no hidden fees.'],
          ['q' => 'Do I need to provide content?', 'a' => 'It helps, but it\'s not essential. We can write copy, source imagery, and shape the content strategy for you if needed.'],
        ];
      @endphp

      @foreach ($faqs as $i => $faq)
        <div class="faq-item rounded-xl border border-white/10 bg-white/[0.03] transition-colors hover:bg-white/[0.05] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 50 + $i * 40 }}">
          <button class="faq-trigger flex w-full items-center justify-between px-5 py-4 text-left" aria-expanded="false">
            <span class="text-sm font-medium text-white">{{ $faq['q'] }}</span>
            <svg class="faq-chevron h-4 w-4 shrink-0 text-white/40 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-body hidden px-5 pb-4">
            <p class="text-sm text-white/60">{{ $faq['a'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="relative z-20 overflow-hidden bg-black px-6 pt-6 pb-16 md:pt-10 md:pb-20 text-center">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>
  <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(ellipse_at_center,rgba(34,211,238,0.06)_0%,transparent_70%)]"></div>

  <div class="relative mx-auto max-w-3xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
    <span class="mx-auto mb-3 block w-fit rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs tracking-wide text-white/60">Ready?</span>
    <h2 class="text-3xl font-semibold text-white md:text-4xl">Let's build something great together</h2>
    <p class="mx-auto mt-4 max-w-lg text-white/70">Share a few details about your project and we'll get back to you within one business day.</p>
    <div class="mt-8 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Start a Project</p></div>
      </a>
    </div>
  </div>
</section>
@endsection

@push('scripts')
<script>
  (function(){
    // Reveal animations
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      document.querySelectorAll('.reveal').forEach(el => {
        el.style.opacity = '1';
        el.style.transform = 'none';
      });
    } else {
      const isMobile = window.innerWidth < 768;
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const el = entry.target;
            const baseDelay = parseInt(el.getAttribute('data-delay') || '0', 10);
            const delay = isMobile ? Math.min(baseDelay * 0.4, 80) : baseDelay;
            setTimeout(() => { el.style.opacity = '1'; el.style.transform = 'none'; }, delay);
            io.unobserve(el);
          }
        });
      }, { threshold: isMobile ? 0.05 : 0.2 });

      document.querySelectorAll('.reveal').forEach(el => {
        if (isMobile) { el.style.transitionDuration = '900ms'; el.style.transform = 'translateY(12px)'; }
        io.observe(el);
      });
    }

    // FAQ accordion
    document.querySelectorAll('.faq-trigger').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.closest('.faq-item');
        const body = item.querySelector('.faq-body');
        const chevron = item.querySelector('.faq-chevron');
        const isOpen = btn.getAttribute('aria-expanded') === 'true';

        // Close all others
        document.querySelectorAll('.faq-item').forEach(other => {
          if (other !== item) {
            other.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
            other.querySelector('.faq-body').classList.add('hidden');
            other.querySelector('.faq-chevron').style.transform = '';
          }
        });

        // Toggle current
        btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        body.classList.toggle('hidden', isOpen);
        chevron.style.transform = isOpen ? '' : 'rotate(180deg)';
      });
    });
  })();
</script>
@endpush