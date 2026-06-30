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
            'text' => 'Most projects kick off in about a week or two. Quick jobs like an llms.txt implementation or a single landing page can start even faster.',
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
            'text' => 'It depends on the scope, but we\'re always upfront about pricing. After an initial chat we\'ll give you a clear quote with no hidden fees. An llms.txt implementation or a single landing page are quick, affordable starting points.',
          ],
        ],
      ],
    ];
  @endphp
  <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')

{{-- ── HERO ── --}}
<section class="relative bg-cream">
  <div class="relative z-10 mx-auto max-w-7xl px-6 pt-24 pb-12 md:pt-40">
    <div class="mx-auto max-w-3xl text-center">
      <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">What we do</p>
      <h1 class="mt-4 font-display text-4xl font-black md:text-5xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Make your business <span class="und-retro">AI-ready</span></h1>
      <p class="mt-4 text-ink-soft opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">From AI search optimisation to intelligent automation, we build the digital infrastructure that keeps your business discoverable, competitive, and growing in the age of AI.</p>
    </div>
  </div>
</section>

{{-- ── SERVICES GRID ── --}}
<section class="relative z-20 border-y-2 border-ink bg-cream-2 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="mx-auto max-w-7xl">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

      {{-- AI Search Optimisation --}}
      <div class="sticker tilt-l bg-cream p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/seo.svg') }}" alt="AI search optimisation icon">
        <h2 class="font-display text-lg font-semibold">AI Search Optimisation</h2>
        <p class="mt-2 text-sm text-ink-soft">People search with ChatGPT, Perplexity, and Google AI now. Not just the blue links. We make sure AI recommends your business, not your competitor's.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Visibility audits across AI search platforms</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Structured data and entity-based SEO strategy</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Content optimised for AI retrieval and citation</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">Start a project &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="font-mono text-xs text-ink-faint transition-colors hover:text-ink">See TDAC results</a>
        </div>
      </div>

      {{-- AI-Ready Web Development --}}
      <div class="sticker tilt-r bg-[#eed9b2] p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/webDev.svg') }}" alt="AI-ready web development icon">
        <h2 class="font-display text-lg font-semibold">AI-Ready Websites</h2>
        <p class="mt-2 text-sm text-ink-soft">We build websites that work for both humans and machines. Clean code, comprehensive structured data, and content architecture AI systems can actually parse and recommend.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Semantic HTML and Schema.org structured data</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> llms.txt implementation for AI agent discovery</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Fast, accessible, mobile-first builds</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/portfolio') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">See examples &rarr;</a>
          <a href="{{ url('/portfolio/vizzbud') }}" class="font-mono text-xs text-ink-faint transition-colors hover:text-ink">Vizzbud case study</a>
        </div>
      </div>

      {{-- AI Tool Integration --}}
      <div class="sticker tilt-l bg-[#e9e3c6] p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/simplify.svg') }}" alt="AI tool integration icon">
        <h2 class="font-display text-lg font-semibold">AI Tool Integration</h2>
        <p class="mt-2 text-sm text-ink-soft">From AI chatbots to workflow automations, we set up the tools that save your team time and improve your customer experience. Properly. Not hacked together.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> AI chatbots for support and lead qualification</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Workflow automation connecting your existing tools</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Team training for responsible AI adoption</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">Chat about AI tools &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="font-mono text-xs text-ink-faint transition-colors hover:text-ink">See TDAC automation</a>
        </div>
      </div>

      {{-- CRM & Automation --}}
      <div class="sticker tilt-r bg-[#f0d9c8] p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/support.svg') }}" alt="CRM and automation icon">
        <h2 class="font-display text-lg font-semibold">CRM & Smart Automation</h2>
        <p class="mt-2 text-sm text-ink-soft">Keep all your leads, customers, and sales in one place. We set up a CRM that fits your business and automate the repetitive work so your team can focus on what matters.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> CRM setup (HubSpot, Pipedrive, or alternatives)</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Automated follow-ups, reminders, and hand-offs</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Email marketing that converts</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">Plan your automation &rarr;</a>
          <a href="{{ url('/portfolio/that-disability-adventure-company') }}" class="font-mono text-xs text-ink-faint transition-colors hover:text-ink">TDAC CRM build</a>
        </div>
      </div>

      {{-- Digital Strategy & Content --}}
      <div class="sticker tilt-l bg-cream-3 p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="100">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/design.svg') }}" alt="Digital strategy icon">
        <h2 class="font-display text-lg font-semibold">Digital Strategy & Content</h2>
        <p class="mt-2 text-sm text-ink-soft">A cohesive plan that ties everything together. Content, SEO, email, and AI discoverability working toward your business goals.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> AI readiness audits and digital roadmaps</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Content strategy optimised for AI and search</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Monthly support and performance reporting</li>
        </ul>
        <div class="mt-5 flex flex-wrap items-center gap-x-4 gap-y-1">
          <a href="{{ url('/contact') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">Plan your strategy &rarr;</a>
          <a href="{{ url('/portfolio/evie-graphic-design') }}" class="font-mono text-xs text-ink-faint transition-colors hover:text-ink">Evie's strategy</a>
        </div>
      </div>

      {{-- Privacy & Security --}}
      <div class="sticker tilt-r bg-cream p-6 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="150">
        <img class="mb-4 h-10 w-10" width="40" height="40" loading="lazy" src="{{ asset('icons/quality.svg') }}" alt="Privacy and security icon">
        <h2 class="font-display text-lg font-semibold">Privacy & Security</h2>
        <p class="mt-2 text-sm text-ink-soft">Protect your business and customer data. We set sensible defaults, keep things updated, and ensure your AI integrations handle data responsibly.</p>
        <ul class="mt-4 space-y-2 text-sm text-ink-soft">
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> SSL, backups, access control, and monitoring</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Privacy-first analytics and data handling</li>
          <li class="flex gap-2"><span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-rust"></span> Responsible AI policy and data governance</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="font-mono text-sm font-bold text-rust-deep transition-colors hover:text-rust-deep">Book a check &rarr;</a>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ── YOUR JOURNEY (Timeline) ── --}}
<section class="relative z-20 bg-cream px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="mx-auto max-w-7xl">
    <div class="text-center">
      <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">How it works</p>
      <h2 class="mt-3 font-display text-3xl font-black opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Your Journey With Us</h2>
    </div>

    <div class="relative mx-auto mt-12 max-w-2xl">
      <div class="absolute left-5 top-0 bottom-0 w-px bg-ink/20 md:left-1/2 md:-translate-x-px"></div>

      @php
        $steps = [
          ['num' => '01', 'title' => 'Chat', 'desc' => 'We learn about your business, goals, and where you stand with AI and digital. No commitments, just a conversation.'],
          ['num' => '02', 'title' => 'Review', 'desc' => 'We look at how you show up in AI search, what your site signals to machines, and where the gaps are.'],
          ['num' => '03', 'title' => 'Plan', 'desc' => 'We map out the best approach, timeline, and budget. Clear priorities, no surprises.'],
          ['num' => '04', 'title' => 'Build', 'desc' => 'You see regular updates as we bring it to life. AI optimisation, web development, and automation. Implemented, not just recommended.'],
          ['num' => '05', 'title' => 'Grow', 'desc' => 'Ongoing support and optimisation. The AI landscape moves fast, and we keep your business ahead of it.'],
        ];
      @endphp

      @foreach ($steps as $i => $step)
        <div class="relative flex items-start gap-5 pb-10 opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 50 + $i * 50 }}">
          <div class="relative z-10 flex h-10 w-10 shrink-0 items-center justify-center rounded-full border-2 border-ink bg-mustard font-mono text-xs font-bold text-ink">
            {{ $step['num'] }}
          </div>
          <div class="pt-1.5">
            <h3 class="font-display text-base font-semibold">{{ $step['title'] }}</h3>
            <p class="mt-1 text-sm text-ink-soft">{{ $step['desc'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ── FAQs (Accordion) ── --}}
<section class="relative z-20 border-t-2 border-ink bg-cream-2 px-6 pt-10 pb-16 md:pt-12 md:pb-20">
  <div class="mx-auto max-w-2xl">
    <div class="text-center">
      <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">Questions</p>
      <h2 class="mt-3 font-display text-3xl font-black opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="50">Frequently Asked</h2>
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
        <div class="faq-item rounded-xl border-2 border-ink bg-cream opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="{{ 50 + $i * 40 }}">
          <button class="faq-trigger flex w-full items-center justify-between px-5 py-4 text-left" aria-expanded="false">
            <span class="text-sm font-medium text-ink">{{ $faq['q'] }}</span>
            <svg class="faq-chevron h-4 w-4 shrink-0 text-rust-deep transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
          </button>
          <div class="faq-body hidden px-5 pb-4">
            <p class="text-sm text-ink-soft">{{ $faq['a'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ── CTA ── --}}
<section class="relative z-20 overflow-hidden border-t-2 border-ink bg-rust px-6 pt-14 pb-16 md:pt-20 md:pb-24 text-center">
  <div class="relative mx-auto max-w-3xl opacity-0 translate-y-6 transition-all duration-700 ease-out reveal" data-delay="0">
    <span class="mx-auto mb-3 block w-fit font-mono text-[13px] uppercase tracking-[0.2em] text-[#fff7ea]/85">Ready?</span>
    <h2 class="font-display text-3xl font-black !text-[#fff7ea] md:text-4xl">Ready when you are</h2>
    <p class="mx-auto mt-4 max-w-lg text-[#fff7ea]/90">Tell us about your business and what you need. We'll come back with a clear, no-obligation proposal in plain English.</p>
    <div class="mt-8 flex justify-center">
      <a href="{{ url('/contact') }}" class="btn-retro">Start a project with us</a>
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
