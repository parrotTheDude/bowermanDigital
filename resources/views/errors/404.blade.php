@extends('layouts.app')

@section('title', 'Page not found | Bowerman Digital')

@section('content')
<section class="relative min-h-screen flex flex-col items-center justify-center bg-black text-white text-center p-8">
  <!-- background element (like on contact page) -->
  <div class="el pointer-events-none"></div>

  <div class="relative z-10">
    <h1 class="text-6xl font-bold text-cyan-400 mb-4">404</h1>
    <p class="text-lg mb-6">Oops! The page you’re looking for doesn’t exist or has been moved.</p>
    <a href="{{ url('/') }}"
       class="inline-block rounded-xl border border-cyan-400/30 bg-cyan-400/10 px-6 py-3 text-cyan-300 hover:bg-cyan-400/15">
      Back to Home
    </a>
  </div>
</section>
@endsection