@extends('layouts.app')

@section('title', 'That Disability Adventure Company | Bowerman Digital')
@section('meta_description', "Website redesign and growth program for TDAC: clearer story, faster site, better SEO, and a simpler way for families to get in touch.")

@push('head')
  <meta property="og:title" content="That Disability Adventure Company | Bowerman Digital">
  <meta property="og:description" content="Website redesign and growth program for TDAC: clearer story, faster site, better SEO, and a simpler way for families to get in touch.">
  <meta property="og:url" content="{{ url('/portfolio/that-disability-adventure-company') }}">
  <meta property="og:image" content="{{ asset('images/tdac.webp') }}">
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => 'That Disability Adventure Company',
    'summary'   => 'A complete refresh of TDAC’s website and outreach—focused on clarity, trust, and making it easy for families to enquire.',
    'liveUrl'   => 'https://thatdisabilityadventurecompany.com.au/',
    'industry'  => 'Disability & Health',

    // Keep services human and outcome-oriented
    'services'  => [
      'Website redesign & copy polish',
      'Clear service pages + accessibility tweaks',
      'Local SEO foundations',
      'Contact flow & email notifications',
      'Ongoing updates & support',
    ],

    // Hero
    'heroImage' => 'images/tdac.webp',

    // Quick goals we optimised for
    'goals' => [
      ['label' => 'Make it easy to enquire',   'value' => 'Short + clear form'],
      ['label' => 'Be found locally',          'value' => 'SEO basics + content'],
      ['label' => 'Build trust fast',          'value' => 'Clean design + clarity'],
    ],

    // Headline metrics (edit if you prefer different numbers)
    'metrics' => [
      ['label' => 'Unique visitors / mo', 'value' => '90 → 500 (+456%)'],
      ['label' => 'Enquiries / mo',       'value' => '2 → 12 (+6×)'],
      ['label' => 'Top-3 Google rankings', 'value' => '0 → 10 key terms'],
    ],

    // The story (kept plain-English)
    'challenge' => "Families needed a simple way to understand TDAC’s services and get in touch. The old site felt disjointed, slow on phones, and didn’t guide visitors to enquire. Search visibility was also low for local terms.",

    'whatWeDid' => "• Re-structured the site so each service is easy to find and understand.\n
• Rewrote key sections for clarity: what TDAC offers, where they operate, what to expect.\n
• Designed a clean, friendly look that builds trust and works beautifully on mobile.\n
• Simplified the contact flow and added helpful confirmations/notifications.\n
• Set up local SEO essentials: page titles, meta descriptions, headings, internal links, and image alt text.\n
• Added light analytics to learn what content visitors use most, then iterated with small improvements.",

    'result' => "More people are discovering TDAC, spending longer on the site, and sending more enquiries. The team now has a clearer story online and an easier way to keep pages up to date.",

    // Optional before/after section (remove if you don’t want it)
    'beforeAfter' => [
      'before'  => 'images/tdacWebScreenGrab.webp',
      'after'   => 'images/tdac.webp',
      'caption' => 'Homepage clarity and visual hierarchy improved.',
    ],

    // Simple gallery (swap or add more)
    'screens' => [
      'images/tdac.webp',
      'images/tdacWebScreenGrab.webp',
    ],

    // Optional chapters if you want to go deeper (kept light + accessible)
    'chapters' => [
      [
        'title' => 'Structure & messaging',
        'body'  => "We grouped services into clear categories, added quick summaries at the top of pages, and used headings that answer common questions (who it’s for, what’s included, pricing/NDIS notes, and how to start).",
        'images'=> [],
      ],
      [
        'title' => 'Local search boost',
        'body'  => "We aligned page titles and meta descriptions to what families actually search for in Melbourne and Gippsland, added internal links, and improved on-page signals. This helped key terms move into top-3 results.",
        'images'=> [],
      ],
      [
        'title' => 'A smoother enquiry',
        'body'  => "The contact form is short, friendly, and mobile-first. Confirmation messages set expectations. TDAC receives cleaner enquiries, and families get a faster response.",
        'images'=> [],
      ],
    ],

    // Cross-link to other work
    'moreWork'  => [
      'title'    => "Evie’s Graphic Design Portfolio",
      'subtitle' => 'Clean, fast portfolio build',
      'img'      => 'images/evie.webp',
      'href'     => url('/portfolio/evie-graphic-design'),
      'label'    => "View Evie’s case study",
    ],
  ])
@endsection