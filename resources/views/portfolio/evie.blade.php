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

    'services' => [
      'Image-first portfolio redesign',
      'Clear project structure & captions',
      'Image optimisation + mobile performance',
      'SEO foundations (titles, meta, alt, OG)',
      'Light analytics & simple reporting',
      'Easy updates, training & support',
    ],

    'heroImage' => 'images/evie/evie.webp',

    'goals' => [
      ['label' => 'Showcase work',        'value' => 'Large images, clean layout'],
      ['label' => 'Smooth mobile use',    'value' => 'Fast load, easy tap targets'],
      ['label' => 'Simple updates',       'value' => 'Add new projects in minutes'],
    ],

    // Headline metrics
    'metrics' => [
      ['label' => 'Monthly portfolio views', 'value' => '120 → 380 (+216%)'],
      ['label' => 'Average time on page',    'value' => '0:42 → 1:35'],
      ['label' => 'Project link clicks',     'value' => '3.1× increase'],
    ],

    'challenge' => "Evie’s old portfolio made it harder than it should be for people to enjoy her work. She needed a clean, distraction-free site where the projects take centre stage — no bulky CMS, no complex back end. Just a simple, professional portfolio that’s easy to browse, quick on mobile, and looks great when shared.",

    'whatWeDid' => "• Created a clean, type-led layout with consistent imagery and clear captions.\n
    • Structured projects so visitors can scan at a glance or dive deeper into details.\n
    • Optimised images: compressed, resized, lazy-loaded, and tuned for fast mobile load times.\n
    • Set SEO foundations: meaningful titles, meta descriptions, alt text, and OG images.\n
    • Added subtle hover and reveal animations for polish without distraction.\n
    • Built a simple update flow so new work can be added in minutes.",

    'result' => "A clean, fast portfolio that puts Evie’s work first — professional to share, effortless to update, and smooth to browse on any device. Studios and clients can quickly explore projects without friction.",

    // Optional before/after
    'beforeAfter' => [
      'before'         => 'images/evie/home.webp',
      'after'          => 'images/evie/portfolio.webp',
      'caption_before' => 'Homepage — clean entry, focused intro',
      'caption_after'  => 'Portfolio showcase — bold imagery, simple navigation',
      'caption'        => 'Cleaner typography, bigger images, and a navigation that makes the work easy to explore.',
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
      ]
    ],

    // Screens (About & Contact showcase)
    'screens' => [
      'images/evie/about.webp',
      'images/evie/contact.webp',
    ],
    'captions' => [
      'About page — personal yet professional intro',
      'Contact page — simple form and clear links',
    ],

    // Cross-link to TDAC
    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website redesign + SEO foundations',
      'img'      => 'images/tdac/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => "See TDAC case study",
    ],
  ])
@endsection