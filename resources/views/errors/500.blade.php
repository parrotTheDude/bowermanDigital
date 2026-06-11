@extends('layouts.app')

@section('title', 'Something went wrong | Bowerman Digital')

@section('content')
<section class="relative min-h-screen flex flex-col items-center justify-center bg-cream text-ink text-center p-8">
  <div class="relative z-10">
    <h1 class="font-display text-6xl font-black text-ink mb-4">500</h1>
    <p class="text-lg text-ink-soft mb-6">Sorry, something broke on our end. We’re working on it!</p>
    <a href="{{ url('/') }}" class="btn-retro btn-retro-solid">
      Back to Home
    </a>
  </div>
</section>
@endsection