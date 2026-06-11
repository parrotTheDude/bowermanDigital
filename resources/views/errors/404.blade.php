@extends('layouts.app')

@section('title', 'Page not found | Bowerman Digital')

@section('content')
<section class="relative min-h-screen flex flex-col items-center justify-center bg-cream text-ink text-center p-8">
  <div class="relative z-10">
    <h1 class="font-display text-6xl font-black text-ink mb-4">404</h1>
    <p class="text-lg text-ink-soft mb-6">Oops! The page you’re looking for doesn’t exist or has been moved.</p>
    <a href="{{ url('/') }}" class="btn-retro btn-retro-solid">
      Back to Home
    </a>
  </div>
</section>
@endsection