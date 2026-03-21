<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type'    => 'LocalBusiness',
    '@id'      => url('/') . '/#business',
    'name'     => 'Bowerman Digital',
    'description' => 'Sydney digital agency specialising in web development, SEO, and email marketing. We partner with one business at a time to deliver real results.',
    'url'      => url('/'),
    'logo'     => asset('images/logo.webp'),
    'image'    => asset('images/og-default.webp'),
    'email'    => 'hello@bowermandigital.com',
    'address'  => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Sydney',
        'addressRegion' => 'NSW',
        'addressCountry' => 'AU',
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => -33.8688,
        'longitude' => 151.2093,
    ],
    'areaServed' => [
        '@type' => 'Country',
        'name' => 'Australia',
    ],
    'priceRange' => '$$',
    'knowsLanguage' => 'en-AU',
    'sameAs' => [],
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
</script>