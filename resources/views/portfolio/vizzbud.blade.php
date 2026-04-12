@extends('layouts.app')

@section('title', 'Vizzbud | Bowerman Digital')
@section('meta_description', "Realtime dive conditions and a slick logbook for Sydney divers — fast, accurate, and privacy-first.")

@section('og_image', asset('images/vizzbud/turtle.webp'))

@push('schema')
  @include('partials.schema.breadcrumb', ['breadcrumbs' => [
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Portfolio', 'url' => url('/portfolio')],
    ['name' => 'Vizzbud', 'url' => url('/portfolio/vizzbud')],
  ]])
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => 'Vizzbud',
    'summary'   => "A lightweight tool that gives Sydney divers realtime site conditions (wind, swell, tides & more) plus a beautifully simple dive log. Built for speed, accuracy, and repeat use.",
    'liveUrl'   => 'https://vizzbud.com/',
    'industry'  => 'Outdoor Recreation / Marine',

    // Keep services human + outcome-oriented
    'services'  => [
      'Progressive Web App (PWA)',
      'Realtime conditions pipeline (wind/swell/tide)',
      'Sydney site database + map',
      'Dive log with photos, stats & gear',
      'Account system + privacy controls',
      'Email notices (tide windows, conditions)',
      'Analytics with zero tracking creep',
    ],

    // Hero (swap to your preferred hero asset)
    'heroImage' => 'images/vizzbud/turtle.webp',

    // Goals (clear, user-centric)
    'goals' => [
      ['label' => "Check if it's worth the drive", 'value' => 'Realtime local conditions at a glance'],
      ['label' => "Log dives you're proud of",     'value' => 'Fast, photo-first, auto-captured stats'],
      ['label' => 'Come back often',               'value' => 'Snappy PWA + useful notifications'],
    ],

    // Headline metrics (marketable, diver-friendly)
    'metrics' => [
      ['label' => 'Time to conditions', 'value' => '< 2 seconds'],
      ['label' => 'Users',      'value' => '23+'],
      ['label' => 'Dive logs created',  'value' => '60+'],
    ],

    // Challenge (plain-English)
    'challenge' => "Divers needed one trustworthy place to check today's conditions per site (not generic ocean forecasts) and a way to log dives quickly without wrestling a bloated app. Prior tools were either slow, global, or ad-heavy, and didn't fit how Sydney shore dives actually work.",

    // What we did (concise, user-first)
    'whatWeDid' => "• Created a lightweight app divers can save to their phone and use anywhere.\n
    • Pulled in the latest wind, swell, and tide data for each Sydney dive site.\n
    • Designed simple cards that highlight if conditions look good, with details just a tap away.\n
    • Built a photo-led dive log that auto-fills key info like tide, time, and weather.\n
    • Added handy extras: bookmark favourite sites, get gentle reminders when conditions look good, and keep full control of your privacy.\n
    • Made sure it's fast and reliable, so it works smoothly even with spotty reception.\n
    • Kept the focus on divers' needs, not ads or noise — just clean, useful tools.",

    // Highlights (rename images to match your assets)
    'beforeAfter' => [
      'before'         => 'images/vizzbud/sitemap.webp', // dive site map / conditions
      'after'          => 'images/vizzbud/divelog.webp', // dive logbook entry
      'caption_before' => 'Interactive dive site map with live conditions',
      'caption_after'  => 'Streamlined dive log to record dives quickly',
    ],

    // Screens (extra showcase)
    'screens' => [
      'images/vizzbud/home.webp',
      'images/vizzbud/divelogger.webp',
    ],
    'captions' => [
      'Home page for Vizzbud',
      'Dive Logger page',
    ],

    'result' => "Vizzbud gives divers the confidence to plan smarter and log easier. Conditions are clear at a glance, the logbook feels effortless to use, and it all works offline right at the pier. By focusing on speed, simplicity, and privacy, we built something divers actually enjoy coming back to — not just another app they forget about.",

    'tools' => [
      'Laravel', 'Tailwind CSS', 'PWA', 'MySQL',
      'Openmeteo Weather API', 'Mapbox Maps', 'Simple Analytics',
    ],

    'relatedServices' => [
      ['label' => 'AI-Ready Websites', 'href' => url('/services')],
      ['label' => 'AI Tool Integration', 'href' => url('/services')],
      ['label' => 'Privacy & Security', 'href' => url('/services')],
    ],

    'faqs' => [
      ['q' => 'Does Vizzbud work offline?', 'a' => 'Yes — it\'s a Progressive Web App, so divers can check cached conditions and log dives even without reception at the pier.'],
      ['q' => 'Where does the conditions data come from?', 'a' => 'Realtime data is pulled from official Australian Bureau of Meteorology feeds, plus tide and swell sources specific to Sydney dive sites.'],
      ['q' => 'Is my data private?', 'a' => 'Absolutely. Vizzbud uses privacy-first analytics with no third-party tracking. Dive logs and personal data stay under the diver\'s control.'],
    ],

    // Cross-link to another case if you like
    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website redesign + CRM & automations',
      'img'      => 'images/tdac/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => "See TDAC case study",
    ],
  ])
@endsection