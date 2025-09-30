<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type'    => 'WebSite',
    'name'     => 'Bowerman Digital',
    'url'      => url('/'),
    'potentialAction' => [
        '@type'       => 'SearchAction',
        'target'      => url('/') . '?q={search_term_string}',
        'query-input' => 'required name=search_term_string',
    ],
]) !!}
</script>