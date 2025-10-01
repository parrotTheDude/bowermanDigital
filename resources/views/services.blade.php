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
      <!-- Web Development -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">01</div>
        <h3 class="text-lg font-semibold text-white">Websites That Work</h3>
        <p class="mt-2 text-sm text-white/70">We build websites that look great, load fast, and help you win more customers—without the tech headache.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Easy for you (and your customers) to use</li>
          <li>• Built to show up properly on Google & social media</li>
          <li>• Fast, mobile-friendly, and reliable</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/portfolio') }}" class="text-cyan-300 hover:text-cyan-200">See examples →</a>
        </div>
      </div>

      <!-- SEO -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">02</div>
        <h3 class="text-lg font-semibold text-white">Get Found on Google (SEO)</h3>
        <p class="mt-2 text-sm text-white/70">We fix the issues that stop your site from showing up and create a clear plan to bring in more customers through search engines.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Full check-up on your website’s health</li>
          <li>• Better structure so Google actually shows you</li>
          <li>• Content ideas that drive enquiries & sales</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Get an audit →</a>
        </div>
      </div>

      <!-- Email Marketing -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">03</div>
        <h3 class="text-lg font-semibold text-white">Smart Email Marketing</h3>
        <p class="mt-2 text-sm text-white/70">Stay in touch with your customers automatically. From first-time buyers to repeat business, we set up emails that convert.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Welcome emails for new customers</li>
          <li>• Follow-ups that encourage repeat business</li>
          <li>• Clear reporting so you know it’s working</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Plan a flow →</a>
        </div>
      </div>

            <!-- CRM Platforms -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">04</div>
        <h3 class="text-lg font-semibold text-white">CRM Setup & Automation</h3>
        <p class="mt-2 text-sm text-white/70">
          Keep all your leads, customers, and sales in one tidy place. We set up a CRM that fits your business and automate the boring bits.
        </p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Pick the right tool (HubSpot, Pipedrive, or simple alternatives)</li>
          <li>• Track enquiries from website to sale with clear stages</li>
          <li>• Automations for follow-ups, reminders, and hand-offs</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Chat about CRM →</a>
        </div>
      </div>

      <!-- Privacy & Security -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">05</div>
        <h3 class="text-lg font-semibold text-white">Privacy & Security Basics</h3>
        <p class="mt-2 text-sm text-white/70">
          Protect your business and customer data without the hassle. We set sensible defaults and keep things up to date.
        </p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• SSL, backups, access control, and updates covered</li>
          <li>• Privacy policy, cookie banner, and data requests made simple</li>
          <li>• Best-practice security headers and uptime monitoring</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Book a quick check →</a>
        </div>
      </div>

      <!-- Content & Strategy -->
      <div class="group rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm transition-all duration-500 hover:-translate-y-1 hover:border-cyan-400/30">
        <div class="mb-3 text-sm text-white/70">06</div>
        <h3 class="text-lg font-semibold text-white">Content & Strategy</h3>
        <p class="mt-2 text-sm text-white/70">We help you plan, create, and publish content that connects with your audience and supports your business goals.</p>
        <ul class="mt-4 space-y-2 text-sm text-white/70">
          <li>• Blog posts and articles that build trust</li>
          <li>• Campaign ideas tailored to your customers</li>
          <li>• A clear strategy so content works (not just fills space)</li>
        </ul>
        <div class="mt-5">
          <a href="{{ url('/contact') }}" class="text-cyan-300 hover:text-cyan-200">Plan content →</a>
        </div>
      </div>
    </div>

    <div class="mt-16 grid gap-6 lg:grid-cols-2">
      <div class="rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm">
        <h3 class="text-lg font-semibold text-white">Your Journey With Us</h3>
        <ol class="mt-4 space-y-3 text-sm text-white/70">
          <li>1. Chat — We learn about your business and what you need</li>
          <li>2. Plan — We map out the best approach and timeline</li>
          <li>3. Build — You see regular updates as we bring it to life</li>
          <li>4. Launch — We test, fine-tune, and get everything live</li>
          <li>5. Grow — Ongoing support, SEO, and marketing to keep momentum</li>
        </ol>
      </div>
      <div class="rounded-2xl border border-white/10 bg-black/60 p-6 backdrop-blur-sm">
        <h3 class="text-lg font-semibold text-white">FAQs</h3>
        <div class="mt-4 space-y-4 text-sm text-white/70">
          <div>
            <p class="font-medium text-white">How soon can we get started?</p>
            <p class="mt-1">Most projects kick off in about a week or two. Quick jobs can start even faster.</p>
          </div>
          <div>
            <p class="font-medium text-white">Will you look after my website once it’s live?</p>
            <p class="mt-1">Absolutely. We can keep things updated, secure, and running smoothly so you don’t have to worry about it.</p>
          </div>
          <div>
            <p class="font-medium text-white">What does “success” mean for my business?</p>
            <p class="mt-1">That depends on your goals — more enquiries, more sales, a faster site, or showing up higher on Google. We set clear targets together.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mx-auto mt-14 flex justify-center">
      <a href="{{ url('/contact') }}" class="no-underline">
        <div class="glow-on-hover"><p>Start a Project</p></div>
      </a>
    </div>
  </div>
</section>
@endsection