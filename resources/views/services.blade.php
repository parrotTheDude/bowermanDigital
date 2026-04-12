@extends('layouts.app')

@section('title', 'AI Digital Strategy Services | Bowerman Digital Sydney')
@section('meta_description', 'AI search optimisation, AI-ready web development, intelligent automation, and digital strategy. We help Australian businesses stay discoverable and competitive in the age of AI.')


@push('schema')
  @php
    $serviceSchema = [
      '@'.'context' => 'https://schema.org',
      '@type' => 'Service',
      'name' => 'AI Digital Strategy & Web Development',
      'provider' => [
        '@type' => 'Organization',
        'name'  => 'Bowerman Digital',
        'url'   => url('/'),
      ],
      'areaServed' => 'Australia',
      'serviceType' => ['AI Search Optimisation','AI-Ready Web Development','AI Tool Integration','Digital Strategy','SEO','Email Marketing'],
      'url' => url('/services'),
      'description' => 'Comprehensive AI digital strategy services including AI search optimisation, AI-ready web development, intelligent automation, and content strategy for Australian businesses.',
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>

  @php
    $faqSchema = [
      '@'.'context' => 'https://schema.org',
      '@type' => 'FAQPage',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name' => 'What is AI search optimisation?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'AI search optimisation ensures your business appears when people use AI tools like ChatGPT, Perplexity, or Google AI Overviews to find products and services. It goes beyond traditional SEO by focusing on structured data, entity recognition, and content that AI systems can parse and recommend.',
          ],
        ],
        [
          '@type' => 'Question',
          'name' => 'What is llms.txt and does my business need one?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'llms.txt is an emerging standard, similar to robots.txt but for AI. It provides a curated, machine-readable summary of your business that AI agents can consume. If AI tools are going to recommend businesses in your industry, having an llms.txt file helps ensure they recommend yours accurately.',
          ],
        ],
        [
          '@type' => 'Question',
          'name' => 'How soon can we get started?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Most projects kick off in about a week or two. Quick jobs like an AI readiness audit or llms.txt implementation can start even faster.',
          ],
        ],
        [
          '@type' => 'Question',
          'name' => 'Will you look after my website once it\'s live?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Absolutely. We keep things updated, secure, and optimised so you don\'t have to worry about it. The AI landscape moves fast, and we monitor your visibility and adapt your strategy as platforms evolve.',
          ],
        ],
        [
          '@type' => 'Question',
          'name' => 'How much does a project cost?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'It depends on the scope, but we\'re always upfront about pricing. After an initial chat we\'ll give you a clear quote with no hidden fees. AI audits and llms.txt implementation are quick, affordable starting points.',
          ],
        ],
      ],
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')

{{-- ── HERO ── --}}
<section class="relative bg-black">
  <div class="el pointer-events-none"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-24 pb-12 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex w-fit items-center rounded-full border border-white/10 bg-white/5 px-3 py-1 text-xs text-white/80 backdrop-blur opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">What we do</span>
      <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Make your business AI-ready</h1>
      <p class="mt-4 text-white/70 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">From AI search optimisation to intelligent automation, we build the digital infrastructure that keeps your business discoverable, competitive, and growing in the age of AI.</p>
    </div>
  </div>
</section>

{{-- ── SERVICES GRID ── --}}
<section class="relative z-20 bg-zinc-900 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-white/15 to-transparent"></div>

  <div class="mx-auto max-w-7xl">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

      {{-- AI Search Optimisation --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/seo.svg') }}" alt="AI search optimisation icon">
        <h2 class="text-lg font-semibold text-white">AI Search Optimisation</h2>
        <p class="mt-2 text-sm text-white/70">People search with ChatGPT, Perplexity, and Google AI now. Not just the blue links. We make sure AI recommends your business, not your competitor's.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Visibility audits across AI search platforms</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Structured data and entity-based SEO strategy</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Content optimised for AI retrieval and citation</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Get an AI audit &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="text-xs text-white/40 transition-colors hover:text-white/70">See TDAC results</a>
        </div>
      </div>

      {{-- AI-Ready Web Development --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/webDev.svg') }}" alt="AI-ready web development icon">
        <h2 class="text-lg font-semibold text-white">AI-Ready Websites</h2>
        <p class="mt-2 text-sm text-white/70">We build websites that work for both humans and machines. Clean code, comprehensive structured data, and content architecture AI systems can actually parse and recommend.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Semantic HTML and Schema.org structured data</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> llms.txt implementation for AI agent discovery</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Fast, accessible, mobile-first builds</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/portfolio') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">See examples &rarr;</a>
          <a href="{{ url('/portfolio/vizzbud') }}" class="text-xs text-white/40 transition-colors hover:text-white/70">Vizzbud case study</a>
        </div>
      </div>

      {{-- AI Tool Integration --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/simplify.svg') }}" alt="AI tool integration icon">
        <h2 class="text-lg font-semibold text-white">AI Tool Integration</h2>
        <p class="mt-2 text-sm text-white/70">From AI chatbots to workflow automations, we set up the tools that save your team time and improve your customer experience. Properly. Not hacked together.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> AI chatbots for support and lead qualification</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Workflow automation connecting your existing tools</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Team training for responsible AI adoption</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Chat about AI tools &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="text-xs text-white/40 transition-colors hover:text-white/70">See TDAC automation</a>
        </div>
      </div>

      {{-- CRM & Automation --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/support.svg') }}" alt="CRM and automation icon">
        <h2 class="text-lg font-semibold text-white">CRM & Smart Automation</h2>
        <p class="mt-2 text-sm text-white/70">Keep all your leads, customers, and sales in one place. We set up a CRM that fits your business and automate the repetitive work so your team can focus on what matters.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> CRM setup (HubSpot, Pipedrive, or alternatives)</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Automated follow-ups, reminders, and hand-offs</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Email marketing that converts</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Plan your automation &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="text-xs text-white/40 transition-colors hover:text-white/70">TDAC CRM build</a>
        </div>
      </div>

      {{-- Digital Strategy & Content --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/design.svg') }}" alt="Digital strategy icon">
        <h2 class="text-lg font-semibold text-white">Digital Strategy & Content</h2>
        <p class="mt-2 text-sm text-white/70">A cohesive plan that ties everything together. Content, SEO, email, and AI discoverability working toward your business goals.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> AI readiness audits and digital roadmaps</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Content strategy optimised for AI and search</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Monthly support and performance reporting</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Plan your strategy &rarr;</a>
          <a href="{{ url('/portfolio/evie-graphic-design') }}" class="text-xs text-white/40 transition-colors hover:text-white/70">Evie's strategy</a>
        </div>
      </div>

      {{-- Privacy & Security --}}
      <div class="group rounded-2xl border border-white/10 bg-white/[0.03] p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30 hover:bg-white/[0.06] opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10 invert transition-transform duration-500 group-hover:scale-110" width="40" height="40" loading="lazy" src="{{ asset('icons/quality.svg') }}" alt="Privacy and security icon">
        <h2 class="text-lg font-semibold text-white">Privacy & Security</h2>
        <p class="mt-2 text-sm text-white/70">Protect your business and customer data. We set sensible defaults, keep things updated, and ensure your AI integrations handle data responsibly.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/60">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> SSL, backups, access control, and monitoring</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Privacy-first analytics and data handling</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-cyan-400/40"></span> Responsible AI policy and data governance</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-sm font-medium text-cyan-300 transition-colors hover:text-cyan-200">Book a check &rarr;</a>
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
      <div class="absolute left-5 top-0 bottom-0 w-px bg-gradient-to-b from-cyan-400/40 via-cyan-400/20 to-transparent md:left-1/2 md:-translate-x-px"></div>

      @php
        $steps = [
          ['num' => '01', 'title' => 'Chat', 'desc' => 'We learn about your business, goals, and where you stand with AI and digital. No commitments, just a conversation.'],
          ['num' => '02', 'title' => 'Audit', 'desc' => 'We run a free AI readiness check: how you show up in AI search, what your site signals to machines, and where the gaps are.'],
          ['num' => '03', 'title' => 'Plan', 'desc' => 'We map out the best approach, timeline, and budget. Clear priorities, no surprises.'],
          ['num' => '04', 'title' => 'Build', 'desc' => 'You see regular updates as we bring it to life. AI optimisation, web development, and automation. Implemented, not just recommended.'],
          ['num' => '05', 'title' => 'Grow', 'desc' => 'Ongoing support and optimisation. The AI landscape moves fast, and we keep your business ahead of it.'],
        ];
      @endphp

      @foreach ($steps as $i => $step)
        <div class="relative flex items-start gap-5 pb-10 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 50 + $i * 50 }}">
          <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border border-cyan-400/30 bg-black text-xs font-bold text-cyan-300">
            {{ $step['num'] }}
          </div>
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
          ['q' => 'What is AI search optimisation?', 'a' => 'AI search optimisation ensures your business appears when people use AI tools like ChatGPT, Perplexity, or Google AI Overviews to find products and services. It goes beyond traditional SEO by focusing on structured data, entity recognition, and content that AI systems can parse and recommend.'],
          ['q' => 'What is llms.txt and does my business need one?', 'a' => 'llms.txt is an emerging standard, similar to robots.txt but for AI. It provides a curated, machine-readable summary of your business that AI agents can consume. If AI tools are going to recommend businesses in your industry, having an llms.txt file helps ensure they recommend yours accurately.'],
          ['q' => 'How soon can we get started?', 'a' => 'Most projects kick off in about a week or two. Quick jobs like an AI readiness audit or llms.txt implementation can start even faster.'],
          ['q' => 'Will you look after my website once it\'s live?', 'a' => 'Absolutely. We keep things updated, secure, and optimised so you don\'t have to worry about it. The AI landscape moves fast, and we monitor your visibility and adapt your strategy as platforms evolve.'],
          ['q' => 'How much does a project cost?', 'a' => 'It depends on the scope, but we\'re always upfront about pricing. After an initial chat we\'ll give you a clear quote with no hidden fees. AI audits and llms.txt implementation are quick, affordable starting points.'],
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
    <h2 class="text-3xl font-semibold text-white md:text-4xl">Find out if your business is AI-ready</h2>
    <p class="mx-auto mt-4 max-w-lg text-white/70">Tell us about your business and we'll send you a free AI readiness audit. No strings. Just clarity.</p>
    <div class="mt-8 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Get your free AI audit</p></div>
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

        document.querySelectorAll('.faq-item').forEach(other => {
          if (other !== item) {
            other.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
            other.querySelector('.faq-body').classList.add('hidden');
            other.querySelector('.faq-chevron').style.transform = '';
          }
        });

        btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        body.classList.toggle('hidden', isOpen);
        chevron.style.transform = isOpen ? '' : 'rotate(180deg)';
      });
    });
  })();
</script>
@endpush
