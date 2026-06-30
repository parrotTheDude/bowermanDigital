@extends('layouts.app')

@section('title', 'Vizzbud — Dive Conditions App Case Study | Bowerman Digital')
@section('meta_description', "Vizzbud scores dive conditions hourly so divers know if it's worth getting in the water, with a community hub and dive log. Live on web, iOS and Android.")

@section('og_image', asset('images/vizzbud/vizzbud-feature.webp'))

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
    'summary'   => "Vizzbud is a project I built to give divers a dead-simple way to check dive conditions. An algorithm scores every site hourly from the latest wind, swell and tide data, so you know at a glance whether it's worth getting in the water. There's also a community hub — think Strava for diving — and an interactive dive log. Now live on web, iOS and Android.",
    'liveUrl'   => 'https://vizzbud.com/',
    'industry'  => 'Outdoor Recreation / Marine',

    // Keep services human + outcome-oriented
    'services'  => [
      'Hourly conditions-scoring algorithm',
      'Web app + native iOS & Android apps',
      'Community hub (like Strava for diving)',
      'Interactive dive log',
      'Live wind, swell & tide ingestion',
      'Dive site database + map',
      'Accounts + privacy controls',
    ],

    // Hero (swap to your preferred hero asset)
    'heroImage' => 'images/vizzbud/vizzbud-feature.webp',

    // Goals (clear, user-centric)
    'goals' => [
      ['label' => "Know if it's worth the drive", 'value' => 'An hourly score for every site'],
      ['label' => 'Share the stoke',              'value' => 'A community hub built for divers'],
      ['label' => 'Log every dive',               'value' => 'A dive log you actually use'],
    ],

    // Headline metrics
    'metrics' => [
      ['label' => 'Divers using it', 'value' => '150+'],
      ['label' => 'Community posts', 'value' => '100+'],
      ['label' => 'Dives logged',    'value' => '100+'],
    ],

    // Challenge (plain-English)
    'challenge' => "Divers had no easy way to know whether a site was worth the drive. Generic ocean forecasts don't tell you much about a specific shore dive, and the apps that existed were slow, global, or buried under ads. I wanted one place that scored real conditions for each site, and gave divers somewhere to log and share their dives.",

    // What I did (concise, first-person — it's my own project)
    'whatWeDid' => "• Built an algorithm that ingests the latest wind, swell and tide data every hour and turns it into a simple score for each dive site.\n
    • Designed clean cards so you can tell at a glance whether it's worth getting in the water.\n
    • Added a community hub — think Strava for diving — where divers share dives and sites.\n
    • Built an interactive dive log that records your dives and auto-fills the conditions.\n
    • Released it everywhere: a fast web app plus native iOS and Android apps.\n
    • Kept it quick, private, and free of ads or noise.",

    // Highlights (rename images to match your assets)
    'beforeAfter' => [
      'before'         => 'images/vizzbud/sitemap2.webp', // dive site map / conditions
      'after'          => 'images/vizzbud/divelog2.webp', // dive logbook entry
      'caption_before' => 'Interactive dive site map with live conditions',
      'caption_after'  => 'Streamlined dive log to record dives quickly',
    ],

    // Screens (extra showcase)
    'screens' => [
      'images/vizzbud/home2.webp',
      'images/vizzbud/community.webp',
    ],
    'captions' => [
      'Home page for Vizzbud',
      'Community page',
    ],

    'result' => "Vizzbud now has 150+ divers using it, with 100+ community posts and 100+ dives logged, across web, iOS and Android. Divers get a clear read on conditions before they leave home, a community to share with, and a logbook they actually come back to. Not just another app they forget about.",

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
      ['q' => 'How does the conditions score work?', 'a' => 'An algorithm ingests the latest wind, swell and tide data for each dive site every hour and turns it into a single, easy score, so you can tell at a glance whether it\'s worth getting in the water without reading a full forecast.'],
      ['q' => 'Can I get Vizzbud on my phone?', 'a' => 'Yes. Vizzbud is live on web plus native iOS and Android apps, so you can check conditions, log dives and join the community wherever you are.'],
      ['q' => 'What\'s the community hub?', 'a' => 'It\'s a bit like Strava for diving: divers share their dives and favourite sites, and interact with each other\'s logs. There are already 100+ community posts and 100+ dives logged.'],
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