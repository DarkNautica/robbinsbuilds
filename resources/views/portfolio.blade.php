@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="bg-white">
  @include('components.header')
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-24 sm:py-32 text-center">
      <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Our Portfolio</h1>
      <p class="mt-4 text-lg text-gray-600 sm:text-xl">Explore the projects that showcase our expertise in design and development.</p>
    </div>
  </div>

  <!-- Portfolio Section -->
  <section class="py-24">
    <div class="mx-auto w-full max-w-7xl px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-12 md:grid-cols-2 lg:grid-cols-3">
        <!-- Portfolio Item -->
        <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg bg-white/80 backdrop-blur-md">
          <img src="/path/to/placeholder1.jpg" alt="Project 1" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900">New Heights Construction & Repair</h3>
            <p class="mt-2 text-gray-600">Asheville, NC</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">Web Design</span>
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">UI/UX</span>
            </div>
            <div class="mt-6 flex justify-between">
              <a href="#" class="text-sm font-bold text-red-600 hover:underline">Visit Website →</a>
              <a href="#" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-md hover:bg-red-500">View Project</a>
            </div>
          </div>
        </div>

        <!-- Repeat Portfolio Items -->
        <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg bg-white/80 backdrop-blur-md">
          <img src="/path/to/placeholder2.jpg" alt="Project 2" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900">Critcher Brothers Produce, Inc.</h3>
            <p class="mt-2 text-gray-600">Deep Gap, NC</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">Webflow</span>
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">UI/UX</span>
            </div>
            <div class="mt-6 flex justify-between">
              <a href="#" class="text-sm font-bold text-red-600 hover:underline">Visit Website →</a>
              <a href="#" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-md hover:bg-red-500">View Project</a>
            </div>
          </div>
        </div>

        <div class="rounded-lg overflow-hidden shadow-md hover:shadow-lg bg-white/80 backdrop-blur-md">
          <img src="/path/to/placeholder3.jpg" alt="Project 3" class="w-full h-56 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900">Project Name</h3>
            <p class="mt-2 text-gray-600">A short description of the project highlighting its key features and impact.</p>
            <div class="mt-4 flex flex-wrap gap-2">
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">Web Design</span>
              <span class="px-3 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">Marketing</span>
            </div>
            <div class="mt-6 flex justify-between">
              <a href="#" class="text-sm font-bold text-red-600 hover:underline">Visit Website →</a>
              <a href="#" class="px-4 py-2 text-sm font-semibold text-white bg-red-600 rounded-md hover:bg-red-500">View Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
      duration: 1000, // Animation duration in milliseconds
      offset: 120, // Offset (in pixels) from the original trigger point
      easing: 'ease-in-out', // Default easing for AOS animations
      once: true, // Whether animation should happen only once
    });
  });
</script>
@endsection
