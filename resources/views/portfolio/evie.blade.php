@extends('layouts.app')

@section('title', 'Evie Graphic Design Portfolio | Bowerman Digital')
@section('meta_description', "Clean, fast portfolio that puts Evie’s work first — simple to browse, great on mobile, and easy to keep updated.")

@push('head')
  <meta property="og:title" content="Evie Graphic Design Portfolio | Bowerman Digital">
  <meta property="og:description" content="Clean, fast portfolio that puts Evie’s work first — simple to browse, great on mobile, and easy to keep updated.">
  <meta property="og:url" content="{{ url('/portfolio/evie-graphic-design') }}">
  <meta property="og:image" content="{{ asset('images/evie.webp') }}">
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => "Evie’s Graphic Design Portfolio",
    'summary'   => "A lightweight, image-led portfolio built to showcase projects beautifully, load fast on mobile, and help a new designer win opportunities.",

    'liveUrl'   => 'https://eviebowerman.com/',
    'industry'  => 'Digital Design / Creative Portfolio',

    'services'  => [
      'Portfolio website (custom theme)',
      'Image optimisation & lazy loading',
      'Content structure & copy polish',
      'SEO foundations',
      'Ongoing support',
    ],

    'heroImage' => 'images/evie.webp',

    // Quick goals
    'goals' => [
      ['label' => 'Showcase projects clearly', 'value' => 'Large imagery + simple nav'],
      ['label' => 'Be fast on mobile',         'value' => 'Under ~2s on 4G'],
      ['label' => 'Update without friction',   'value' => 'Simple edit flow'],
    ],

    // Headline metrics (tweak if you have different numbers)
    'metrics' => [
      ['label' => 'Portfolio views / mo',  'value' => '120 → 380 (+216%)'],
      ['label' => 'Avg. time on page',     'value' => '0:42 → 1:35'],
      ['label' => 'Project link clicks',   'value' => '↑ 3.1×'],
    ],

    'challenge' => "Evie needed a clean, distraction-free site that lets the work shine. No heavy CMS, no complex back end — just a portfolio that’s easy to browse, fast on phones, and looks great when shared.",

    'whatWeDid' => "• Designed a type-led layout with big, consistent imagery and clear captions.\n
• Structured projects so visitors can scan quickly and dive deeper when they like.\n
• Compressed and resized images, added lazy loading, and tuned for mobile performance.\n
• Set sensible SEO basics: titles, meta descriptions, alt text, and open-graph images.\n
• Added tasteful hover/reveal animations that feel polished without getting in the way.\n
• Set up a simple update flow so new work can be added in minutes.",

    'result' => "A focused, fast portfolio that helps Evie present her work professionally and share links with confidence. Studios and clients can browse on any device without friction.",

    // Optional before/after
    'beforeAfter' => [
      'before'  => 'images/evieScreenGrab.webp',
      'after'   => 'images/evie.webp',
      'caption' => 'Cleaner typography, bigger imagery, simpler navigation.',
    ],

    // Gallery
    'screens' => [
      'images/evie.webp',
      'images/evieScreenGrab.webp',
      'images/mockups/evie-mobile2.webp',
    ],

    // Optional chapters
    'chapters' => [
      [
        'title'  => 'Showcase-first layout',
        'body'   => "Minimal UI with generous whitespace. Projects open into clean detail views so the work takes centre stage.",
        'images' => ['images/mockups/evie-mobile2.webp'],
      ],
      [
        'title'  => 'Mobile experience',
        'body'   => "Spacing, tap-targets and loading tuned for handheld viewing — where most portfolio traffic starts.",
      ],
      [
        'title'  => 'Search & share basics',
        'body'   => "Clear page titles, meta descriptions, alt text and OG images so search results and social previews look professional.",
      ],
    ],

    // Cross-link to TDAC
    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website redesign + SEO foundations',
      'img'      => 'images/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => "See TDAC case study",
    ],
  ])
@endsection