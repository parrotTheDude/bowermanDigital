@extends('layouts.app')

@section('title', 'Vizzbud | Bowerman Digital')
@section('meta_description', "Lightweight brand site and growth foundations for Vizzbud — faster load times, clearer story, and a smoother path to enquiries.")

@push('head')
  <meta property="og:title" content="Vizzbud | Bowerman Digital">
  <meta property="og:description" content="Lightweight brand site and growth foundations for Vizzbud — faster load times, clearer story, and a smoother path to enquiries.">
  <meta property="og:url" content="{{ url('/portfolio/vizzbud') }}">
  <meta property="og:image" content="{{ asset('images/turtle.webp') }}">
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => 'Vizzbud',
    'summary'   => 'A crisp, fast site paired with clear messaging and simple enquiry paths. Built to scale content and SEO without adding complexity.',
    'liveUrl'   => null, // add the live URL if/when you have it, e.g. 'https://vizzbud.com'
    'industry'  => 'Tech & Education', // tweak if you want something more specific

    // Services (plain-English, outcome-first)
    'services'  => [
      'Lean website build with fast page loads',
      'Clear homepage story & service pages',
      'SEO-ready structure (titles, headings, internal links)',
      'Contact & capture flows that reduce friction',
      'Analytics & privacy-friendly tracking',
    ],

    // Hero
    'heroImage' => 'images/turtle.webp',

    // Goals (quick hits that guided the work)
    'goals' => [
      ['label' => 'Tell the story quickly',   'value' => 'Clear value prop above the fold'],
      ['label' => 'Speed matters',             'value' => 'Core Web Vitals friendly'],
      ['label' => 'More enquiries',            'value' => 'Simple CTAs + short forms'],
    ],

    // Metrics — placeholders you can update later
    'metrics' => [
      ['label' => 'Page load (TTFB)',          'value' => '< 200ms on AU hosting'],
      ['label' => 'Bounce rate',               'value' => 'Down after clarity pass'],
      ['label' => 'Qualified enquiries',       'value' => 'Up with focused CTAs'],
    ],

    // The story
    'challenge' => "Vizzbud needed a modern site that explains the value in seconds, loads fast on mobile, and makes it effortless for visitors to get in touch or learn more — without heavy maintenance overhead.",

    'whatWeDid' => "• Designed a clean, focused layout that highlights the value proposition up front.\n
• Built a lightweight site with best-practice metadata, headings, and internal links.\n
• Sharpened copy on key pages to reduce jargon and encourage action.\n
• Simplified the enquiry path with short forms and clear follow-ups.\n
• Added privacy-friendly analytics for decision-making without bloat.",

    'result' => "The site feels faster, clearer, and more trustworthy. Visitors find the right info sooner and have a simpler path to reach out — setting a strong base for content and SEO growth.",

    // Optional before/after (add your own grabs later or remove this block)
    'beforeAfter' => [
      'before'  => null,
      'after'   => 'images/turtle.webp',
      'caption' => 'A clean, fast hero with a focused message.',
    ],

    // Simple gallery (swap/add as needed)
    'screens' => [
      'images/turtle.webp',
    ],

    // Optional chapters to go a bit deeper
    'chapters' => [
      [
        'title' => 'Messaging & structure',
        'body'  => "We prioritised a short headline and subhead that explain the offering fast. Navigation stays minimal; each page answers who it’s for, what’s included, and how to start.",
        'images'=> [],
      ],
      [
        'title' => 'Performance & SEO foundation',
        'body'  => "We kept the build lean (no heavy plugins), optimised images, and aligned titles/headings to real search terms. Internal linking sets up future content to perform.",
        'images'=> [],
      ],
      [
        'title' => 'Simpler enquiries',
        'body'  => "CTAs are consistent and forms are short. Success messages set expectations, and notifications ensure quick follow-up.",
        'images'=> [],
      ],
    ],

    // Cross-link to another project
    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website refresh & local SEO',
      'img'      => 'images/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => 'View TDAC case study',
    ],
  ])
@endsection