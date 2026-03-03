@php
  $breadcrumbs = $breadcrumbs ?? [];
  $items = [];
  foreach ($breadcrumbs as $i => $crumb) {
    $items[] = [
      '@type' => 'ListItem',
      'position' => $i + 1,
      'name' => $crumb['name'],
      'item' => $crumb['url'],
    ];
  }
  $schema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $items,
  ];
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}</script>
