@extends('layouts.app')

@section('title', 'Crystal Caves Atherton | Bowerman Digital')
@section('meta_description', "Website rebuild for Crystal Caves, the award-winning Atherton Tablelands attraction. Built to show off the experience and get discovered by AI and search.")

@section('og_image', asset('images/crystal/crystalHero.webp'))

@push('schema')
  @include('partials.schema.breadcrumb', ['breadcrumbs' => [
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Portfolio', 'url' => url('/portfolio')],
    ['name' => 'Crystal Caves', 'url' => url('/portfolio/crystal-caves')],
  ]])
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => 'Crystal Caves',
    'summary'   => "A rebuild for one of the Atherton Tablelands' best-loved attractions, designed to show off René's caves the way they deserve, and to make the whole experience easy for both visitors and AI to find.",

    'liveUrl'   => 'https://crystalcaves.com.au/',
    'industry'  => 'Tourism / Visitor Attraction',

    'services' => [
      'Full website redesign',
      'Visual, experience-led storytelling',
      'AI search optimisation (llms.txt, structured data)',
      'SEO foundations (titles, meta, alt, OG, schema)',
      'Fast, accessible, mobile-first build',
      'Clear booking journey',
    ],

    'heroImage' => 'images/crystal/crystalHero.webp',

    'goals' => [
      ['label' => 'Show off the attraction', 'value' => 'Big imagery, immersive feel'],
      ['label' => 'Get discovered',          'value' => 'Strong SEO + AI visibility'],
      ['label' => 'Make booking easy',       'value' => 'Clear path to "Book Now"'],
    ],

    'challenge' => "Crystal Caves is a genuinely one-of-a-kind experience: a man-made cave packed with over 600 crystals and fossils, built over decades by René Boissevain. The brief was twofold. First, the site needed to do the attraction justice, conveying the wonder of actually walking through the caves rather than just describing it. Second, it needed to be far more discoverable, both in traditional search and in the new world of AI-powered answers, so that a family searching for things to do near Cairns actually finds it.",

    'whatWeDid' => "• Redesigned the site around the experience, leading with bold, immersive imagery so visitors feel the caves before they arrive.\n
    • Told René's story properly, giving the man and his lifelong collection the spotlight they deserve.\n
    • Built strong SEO foundations: clean titles, meta descriptions, alt text, Open Graph, and structured data throughout.\n
    • Implemented AI search optimisation, including an llms.txt and machine-readable content, so AI tools can accurately recommend Crystal Caves.\n
    • Made the path to booking obvious, with a clear, repeated route to 'Book Now'.\n
    • Built it fast, accessible, and mobile-first, with an accessibility menu for every kind of visitor.",

    'result' => "A site that finally matches the attraction: immersive, fast, and genuinely discoverable. Visitors get a real sense of René's world before they arrive, and both search engines and AI tools can now understand and recommend Crystal Caves with confidence.",

    'tools' => [
      'Laravel', 'Tailwind CSS', 'Vite', 'WebP Optimisation',
      'Structured Data (Schema.org)', 'llms.txt', 'Simple Analytics',
    ],

    'relatedServices' => [
      ['label' => 'AI Search Optimisation', 'href' => url('/services')],
      ['label' => 'AI-Ready Websites', 'href' => url('/services')],
      ['label' => 'Digital Strategy & Content', 'href' => url('/services')],
    ],

    'faqs' => [
      ['q' => 'What was the main goal of the rebuild?', 'a' => 'Two things: show off the attraction so the website does the real experience justice, and make Crystal Caves far more discoverable, both in traditional search and in AI tools like ChatGPT, Perplexity and Google AI Overviews.'],
      ['q' => 'How does the site help with AI discovery?', 'a' => 'Alongside traditional SEO, the site uses structured data and an llms.txt file so AI systems can read, understand, and accurately recommend Crystal Caves when people ask for things to do in the Atherton Tablelands.'],
      ['q' => 'Is the site accessible?', 'a' => 'Yes. It is built mobile-first and includes an accessibility menu with options for vision, reading, motion and contrast, so the experience works for as many visitors as possible.'],
    ],

    {{-- TODO (images): once you have screenshots, add 'beforeAfter', 'screens' + 'captions', and/or 'chapters' here. The case template renders them automatically. --}}

    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website redesign, SEO + custom CRM',
      'img'      => 'images/tdac/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => 'See TDAC case study',
    ],
  ])
@endsection
