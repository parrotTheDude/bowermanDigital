@extends('layouts.app')

@section('title', 'Privacy Policy | Bowerman Digital')
@section('meta_description', 'How Bowerman Digital collects, uses, stores and protects your personal information. Plain-English privacy policy for our website, contact form, and hosting services.')

@push('head')
  <meta name="robots" content="index,follow">
@endpush

@section('content')
<section class="bg-cream px-6 pt-28 pb-12 md:pt-36">
  <div class="mx-auto max-w-3xl text-center">
    <p class="font-mono text-[13px] uppercase tracking-[0.2em] text-rust-deep">Legal</p>
    <h1 class="mt-4 font-display text-4xl font-black md:text-5xl">Privacy Policy</h1>
    <p class="mt-4 font-mono text-[13px] text-ink-faint">Last updated: 30 June 2026</p>
  </div>
</section>

<section class="bg-cream px-6 pb-24">
  <div class="mx-auto max-w-3xl text-[16.5px] leading-relaxed text-ink-soft">

    <p>
      Bowerman Digital ("we", "us", "our") respects your privacy. This policy explains what personal
      information we collect, how we use it, who we share it with, and the choices you have. It applies to
      <a href="{{ url('/') }}" class="font-medium text-rust-deep">bowermandigital.com</a> and the services we provide.
      If you have any questions, email <a href="mailto:hello@bowermandigital.com" class="font-medium text-rust-deep">hello@bowermandigital.com</a>.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Who we are</h2>
    <p>
      Bowerman Digital is a Sydney-based digital agency. We provide website design, AI search optimisation,
      automation, digital strategy, and website hosting for businesses across Australia.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Information we collect</h2>
    <p class="mb-4">
      <strong class="text-ink">Information you give us.</strong> When you fill in our contact form or email us,
      we collect the details you choose to provide — typically your name and email address, and optionally your
      phone number, business name, project type, budget, timeline, and the contents of your message.
    </p>
    <p class="mb-4">
      <strong class="text-ink">Information collected automatically.</strong> We use Simple Analytics, a
      privacy-first analytics tool, to understand how our site is used. It does not use cookies and does not
      collect personal information — only aggregate, anonymised data such as page views and referrers. We may
      also keep standard server logs (such as IP address and browser type) to keep the site secure and running.
    </p>
    <p>
      <strong class="text-ink">Spam protection.</strong> Our forms are protected by Google reCAPTCHA, which helps
      us tell real people from bots. To do this, Google may collect hardware and software information (such as
      device and application data) and send it to Google for analysis. Your use of reCAPTCHA is subject to
      Google's <a href="https://policies.google.com/privacy" class="font-medium text-rust-deep">Privacy Policy</a>
      and <a href="https://policies.google.com/terms" class="font-medium text-rust-deep">Terms of Service</a>.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">How we use your information</h2>
    <p class="mb-3">We use the information we collect to:</p>
    <ul class="mb-2 list-disc space-y-2 pl-6">
      <li>respond to your enquiry and prepare quotes or proposals;</li>
      <li>deliver and manage the services you engage us for;</li>
      <li>send you transactional emails, such as a confirmation that we've received your enquiry;</li>
      <li>operate, secure and improve our website;</li>
      <li>meet our legal and record-keeping obligations.</li>
    </ul>
    <p>
      We do not sell your personal information, and we won't send you marketing emails unless you've asked us to.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Email</h2>
    <p>
      Transactional emails — like your enquiry confirmation and our internal notifications — are sent and
      processed through Postmark, an email delivery service. The details you submit through our form are passed
      to Postmark so these emails can be delivered.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Website hosting</h2>
    <p>
      We host websites for our clients on servers located in Australia. Where we host a website on your behalf,
      any personal information collected through that website belongs to you, our client. You remain responsible
      for your own privacy obligations to your site's visitors, and we act as a service provider — storing and
      processing that data on your instructions. We keep hosted data on Australian servers and protect it with
      reasonable security measures.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Who we share information with</h2>
    <p class="mb-3">
      We only share personal information with the third-party services we rely on to run our business, and only
      as needed:
    </p>
    <ul class="list-disc space-y-2 pl-6">
      <li><strong class="text-ink">Postmark</strong> — to send transactional email (United States).</li>
      <li><strong class="text-ink">Google reCAPTCHA</strong> — to protect our forms from spam (United States).</li>
      <li><strong class="text-ink">Simple Analytics</strong> — privacy-first website analytics (European Union; no cookies, no personal data).</li>
      <li><strong class="text-ink">Our hosting infrastructure</strong> — servers located in Australia.</li>
    </ul>
    <p class="mt-3">We may also disclose information where we're required to by law.</p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Overseas disclosure</h2>
    <p>
      Some of the services above (Postmark and Google reCAPTCHA) are based overseas, which means limited
      information may be processed outside Australia — primarily in the United States. Simple Analytics is based
      in the European Union. We take reasonable steps to ensure these providers handle your information
      appropriately.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">How we store and protect your information</h2>
    <p>
      We store information on secure servers in Australia and use measures such as HTTPS encryption, access
      controls and regular updates to protect it. No system is ever perfectly secure, but we take reasonable
      steps to guard against loss, misuse and unauthorised access.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">How long we keep it</h2>
    <p>
      We keep enquiry and client information for as long as we need it to provide our services and meet our legal
      obligations, then delete or anonymise it.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Cookies</h2>
    <p>
      Our website does not use tracking or advertising cookies. Our analytics (Simple Analytics) is cookie-free.
      Google reCAPTCHA may set a cookie or use similar technology as part of its spam protection.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Your rights</h2>
    <p class="mb-3">You can ask us to:</p>
    <ul class="mb-2 list-disc space-y-2 pl-6">
      <li>access the personal information we hold about you;</li>
      <li>correct it if it's wrong; or</li>
      <li>delete it, where we're able to.</li>
    </ul>
    <p>
      Just email <a href="mailto:hello@bowermandigital.com" class="font-medium text-rust-deep">hello@bowermandigital.com</a>
      and we'll help.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Children</h2>
    <p>
      Our website and services aren't directed at children under 16, and we don't knowingly collect their
      personal information.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Changes to this policy</h2>
    <p>
      We may update this policy from time to time. The "last updated" date at the top shows when it last changed.
    </p>

    <h2 class="mt-12 mb-3 font-display text-2xl font-black text-ink">Contact &amp; complaints</h2>
    <p>
      Questions, requests or concerns? Email
      <a href="mailto:hello@bowermandigital.com" class="font-medium text-rust-deep">hello@bowermandigital.com</a>,
      or write to us in Sydney, NSW, Australia.
    </p>
    <p class="mt-3">
      If you're in Australia and you're not satisfied with how we've handled your information, you can contact the
      Office of the Australian Information Commissioner (OAIC) at
      <a href="https://www.oaic.gov.au" class="font-medium text-rust-deep">oaic.gov.au</a>.
    </p>

  </div>
</section>
@endsection
