@extends('layouts.app')

@section('title', 'That Disability Adventure Company | Bowerman Digital')
@section('meta_description', "Website redesign and growth program for TDAC: clearer story, faster site, better SEO, and a simpler way for families to get in touch.")

@section('og_image', asset('images/tdac/tdac.webp'))

@push('schema')
  @include('partials.schema.breadcrumb', ['breadcrumbs' => [
    ['name' => 'Home', 'url' => url('/')],
    ['name' => 'Portfolio', 'url' => url('/portfolio')],
    ['name' => 'That Disability Adventure Company', 'url' => url('/portfolio/that-disability-adventure-company')],
  ]])
@endpush

@section('content')
  @include('partials.portfolio.case', [
    'title'     => 'That Disability Adventure Company',
    'summary'   => "A complete refresh of TDAC's website and outreach — focused on clarity, trust, and making it easy for families to enquire.",
    'liveUrl'   => 'https://thatdisabilityadventurecompany.com.au/',
    'industry'  => 'Disability & Health',

    'services' => [
      'Website redesign',
      'CRM for participant management',
      'Email automations',
      'Reusable email templates + segments',
      'Local SEO + performance & accessibility',
      'Analytics, training & ongoing support',
    ],

    // Hero
    'heroImage' => 'images/tdac/tdac.webp',

    // Quick goals we optimised for
    'goals' => [
      ['label' => 'Clarity online',    'value' => 'A fresh site that explains services clearly'],
      ['label' => 'Efficiency inside', 'value' => 'CRM that cuts admin time + streamlines intake'],
      ['label' => 'Reach more people', 'value' => 'Email campaigns with better control + results'],
    ],

    // Headline metrics
    'metrics' => [
      ['label' => 'Unique Website Visitors',       'value' => '90 → 2000+ increase in 6 months'],
      ['label' => 'Participant records', 'value' => '0 → 300+ managed in CRM'],
      ['label' => 'Email workflows',     'value' => '100% automated for events & updates'],
    ],

    // The story (kept plain-English)
   'challenge' => "Families found it hard to understand TDAC's services or know how to start. The old site was clunky on mobile, slow to load, and didn't guide people toward enquiring. On top of that, search visibility was weak and day-to-day admin tasks like managing participants and sending emails were eating up time.",

    'whatWeDid' => "• Re-designed and rebuilt the entire website for clarity, trust, and mobile-first performance.\n
    • Re-structured service pages and rewrote content so families can quickly understand what TDAC offers and how to get started.\n
    • Built a custom CRM platform to streamline participant management, intake, and record-keeping.\n
    • Automated key processes: enquiry handling, participant info emails, reminders, and staff notifications.\n
    • Set up segmented email lists and reusable templates for newsletters, service updates, and event communications.\n
    • Added participant event tools, including recurring and one-off event management with personalised reminders.\n
    • Implemented local SEO essentials: structured titles, descriptions, headings, and image alt text for higher visibility.\n
    • Integrated analytics to learn which content visitors use most and guide ongoing improvements.",  

    'result' => "TDAC is now easier to discover, easier to trust, and easier to contact. Families are finding them through search, spending more time on the site, and sending more enquiries. Behind the scenes, the team has a streamlined CRM, email automations, and a site they can confidently update—freeing them to focus on participants instead of tech.",

    'tools' => [
      'Laravel', 'Tailwind CSS', 'MySQL', 'Postmark',
      'Custom CRM', 'Simple Analytics', 'cPanel',
    ],

    'faqs' => [
      ['q' => 'How did the website redesign help TDAC?', 'a' => 'The new site made it immediately clear what TDAC offers and how families can get started. Unique visitors grew from 90 to over 500 per month within six months.'],
      ['q' => 'What does the custom CRM do?', 'a' => 'It manages participant records, automates intake workflows, sends personalised emails for events and updates, and reduces the admin time the team spends on day-to-day operations.'],
      ['q' => 'Can TDAC update the site themselves?', 'a' => 'Yes — the site is built so the team can update content, add events, and manage communications without needing a developer for routine changes.'],
    ],

    // Showcase (two key visuals)
    'beforeAfter' => [
      'before'          => 'images/tdac/tdacWebScreenGrab.webp',   // refreshed homepage
      'after'           => 'images/tdac/tdacWebScreenGrab2.webp',        // activities page
      'caption_before'  => 'Refreshed homepage — clearer structure and faster to scan.',
      'caption_after'   => 'Activities page — services grouped with next steps.',
      // 'caption' => 'Optional overall note, if you want one.'
    ],

    // Screens (CRM showcase)
    'screens' => [
      'images/tdac/tdacCrmHome.webp',
      'images/tdac/tdacCrmEvents.webp',
    ],
    'captions' => [
      'CRM dashboard for participant management',
      'Automated event + email workflows',
    ],

    'quote' => [
      'text' => "We had a frustrating experience with previous web developers — poor communication, clunky systems, and a site that didn't reflect who we were. Then we made the switch to Jacob and it was a complete game changer. The process was collaborative, smooth, and genuinely exciting. Jacob took the time to understand our values, our community, and what we were trying to build at TDAC, and translated that into a website that actually feels like us. 

      Not only does it look great, but it's easier for participants and families to navigate, and we've already seen more enquiries and positive feedback. The backend is also a dream compared to what we had before. If you're in the tourism or adventure space and looking to grow your digital presence with someone who gets it, I couldn't recommend Jacob highly enough.",
        'author' => "That Disability Adventure Company",
        'role'   => "Directors",
      ],

    // Cross-link to other work
    'moreWork'  => [
      'title'    => "Evie's Graphic Design Portfolio",
      'subtitle' => 'Clean, fast portfolio build',
      'img'      => 'images/evie/evie.webp',
      'href'     => url('/portfolio/evie-graphic-design'),
      'label'    => "View Evie's case study",
    ],
  ])
@endsection