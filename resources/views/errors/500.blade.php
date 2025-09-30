@extends('layouts.app')

@section('title', 'Something went wrong | Bowerman Digital')

@section('content')
<section class="relative min-h-screen flex flex-col items-center justify-center bg-black text-white text-center p-8">
  <!-- background element -->
  <div class="el pointer-events-none"></div>

  <div class="relative z-10">
    <h1 class="text-6xl font-bold text-emerald-400 mb-4">500</h1>
    <p class="text-lg mb-6">Sorry, something broke on our end. We’re working on it!</p>
    <a href="{{ url('/') }}"
       class="inline-block rounded-xl border border-emerald-400/30 bg-emerald-400/10 px-6 py-3 text-emerald-300 hover:bg-emerald-400/15">
      Back to Home
    </a>
  </div>
</section>
@endsection