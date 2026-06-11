@php
  /** Echo "B" mark — 70s rainbow stripes. $main = main stroke colour, $class = sizing classes. */
  $main = $main ?? '#3b2a1d';
  $class = $class ?? 'h-10 w-auto';
@endphp
<svg viewBox="148 64 250 312" class="{{ $class }}" role="img" aria-label="Bowerman Digital mark">
  <g fill="none" stroke-width="9" stroke-linejoin="round">
    <g stroke="#8a9a5b" transform="translate(27,27)"><rect x="180" y="96" width="44" height="344" rx="22"/><path d="M244 96a84 84 0 0 1 0 168z"/><path d="M244 264a88 88 0 0 1 0 176z"/></g>
    <g stroke="#e3a72f" transform="translate(18,18)"><rect x="180" y="96" width="44" height="344" rx="22"/><path d="M244 96a84 84 0 0 1 0 168z"/><path d="M244 264a88 88 0 0 1 0 176z"/></g>
    <g stroke="#d96d31" transform="translate(9,9)"><rect x="180" y="96" width="44" height="344" rx="22"/><path d="M244 96a84 84 0 0 1 0 168z"/><path d="M244 264a88 88 0 0 1 0 176z"/></g>
    <g stroke="{{ $main }}"><rect x="180" y="96" width="44" height="344" rx="22"/><path d="M244 96a84 84 0 0 1 0 168z"/><path d="M244 264a88 88 0 0 1 0 176z"/></g>
  </g>
</svg>
