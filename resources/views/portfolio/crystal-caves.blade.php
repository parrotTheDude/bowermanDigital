@extends('layouts.app')

@section('title', 'Crystal Caves Atherton Website Case Study | Bowerman Digital')
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

    'challenge' => "Crystal Caves is a one-of-a-kind experience: a man-made cave packed with over 600 crystals and fossils, built over decades by René Boissevain. The owner came with a clear, forward-looking brief. She wanted a modern website ready for the AI era, not just one that ranked on Google, but one that AI crawlers could read and understand, so Crystal Caves would show up in AI answers when someone asks what to do in Cairns or the Atherton Tablelands. The old site didn't show off the attraction, and AI had very little to go on.",

    'whatWeDid' => "• Built a clean, modern website that finally shows off the attraction, leading with bold imagery of the caves.\n
    • Told René's story properly, giving the man and his lifelong collection the spotlight they deserve.\n
    • Engineered for ultra crawlability: clean semantic markup, fast loads, and structured data throughout.\n
    • Implemented AI search optimisation with an llms.txt and machine-readable content, so AI tools can read and recommend Crystal Caves for Cairns and Atherton Tablelands questions.\n
    • Covered the SEO foundations: titles, meta descriptions, alt text, Open Graph, and schema.\n
    • Made it fast, accessible, and mobile-first, with a clear path to 'Book Now' and an accessibility menu for every kind of visitor.",

    'result' => "A new, clean website that shows off the business the way it deserves, and is built for the AI era. Visitors get a real feel for René's world before they arrive, while ultra-crawlable markup and AI search optimisation mean Crystal Caves can now surface in AI answers when people ask what to do around Cairns and the Atherton Tablelands.",

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

    'screens' => [
      'images/crystal/home.webp',
      'images/crystal/home2.webp',
      'images/crystal/home3.webp',
      'images/crystal/home4.webp',
    ],
    'captions' => [
      'A bold new homepage that leads with the caves',
      "René's story and the experience, told properly",
      'Clean, fast, and easy to navigate to a booking',
      'Built to show off the attraction at every scroll',
    ],

    'moreWork'  => [
      'title'    => 'That Disability Adventure Company',
      'subtitle' => 'Website redesign, SEO + custom CRM',
      'img'      => 'images/tdac/tdac.webp',
      'href'     => url('/portfolio/that-disability-adventure-company'),
      'label'    => 'See TDAC case study',
    ],
  ])
@endsection
