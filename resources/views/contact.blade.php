@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Alpine.js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>


</head>
<body class="bg-gray-50">

<div class="relative isolate bg-gradient-to-b from-[#fef3f3] to-[#fff] px-8 py-24 sm:py-32 lg:px-12">
  
  <!-- Gradient Background -->
  <div
    aria-hidden="true"
    class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
  >
    <div
      class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff7f7f] to-[#fc8383] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
      style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
    ></div>
  </div>
<!-- Header -->
@include('components.header')

  
  <!-- Header -->
  <div class="mx-auto max-w-2xl text-center">
    <h2 data-aos="fade-right" class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Contact Us</h2>
    <p data-aos="fade-left" class="mt-4 text-lg text-gray-600">
      We'd love to hear from you! Fill out the form below, and we'll be in touch shortly.
    </p>
    {{ env('CLOUDFLARE_TURNSTILE_SITE_KEY') }}

  </div>

  <div class="container mx-auto px-6 sm:px-12 lg:px-20 py-12 max-w-3xl">
    <!-- Form -->
  <form action="{{ route('contact.send') }}" method="POST"> 
    @csrf
    <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
      <!-- First Name -->
      <div>
        <label for="first-name" class="block text-sm font-semibold text-gray-900">First Name</label>
        <input
          type="text"
          name="first-name"
          id="first-name"
          autocomplete="given-name"
          class="mt-2 block w-full rounded-md border border-gray-200 shadow-sm focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
        />
      </div>

      <!-- Last Name -->
      <div>
        <label for="last-name" class="block text-sm font-semibold text-gray-900">Last Name</label>
        <input
          type="text"
          name="last-name"
          id="last-name"
          autocomplete="family-name"
          class="mt-2 block w-full rounded-md border border-gray-200 shadow-sm focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
        />
      </div>

      <!-- Company -->
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold text-gray-900">Company</label>
        <input
          type="text"
          name="company"
          id="company"
          autocomplete="organization"
          class="mt-2 block w-full rounded-md border border-gray-200 shadow-sm focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
        />
      </div>

      <!-- Email -->
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          autocomplete="email"
          class="mt-2 block w-full rounded-md border border-gray-200 shadow-sm focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
        />
      </div>

      <!-- Phone Number -->
      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold text-gray-900">Phone Number</label>
        <div class="relative mt-2 flex rounded-md shadow-sm">
          <select
            id="country"
            name="country"
            class="block w-20 rounded-l-md border border-gray-200 bg-gray-50 text-gray-500 focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
          >
            <option>US</option>
            <option>CA</option>
            <option>EU</option>
          </select>
          <input
            type="tel"
            name="phone-number"
            id="phone-number"
            placeholder="123-456-7890"
            class="block w-full rounded-r-md border border-gray-200 focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
          />
        </div>
      </div>

      <!-- Message -->
      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold text-gray-900">Message</label>
        <textarea
          id="message"
          name="message"
          rows="4"
          class="mt-2 block w-full rounded-md border border-gray-200 shadow-sm focus:border-2 focus:border-red-600 focus:ring-red-600 focus:outline-none sm:text-base py-2 pl-4"
        ></textarea>
      </div>

      <!-- Turnstile Widget -->
      <div class="cf-turnstile" data-sitekey="{{ env('CLOUDFLARE_TURNSTILE_SITE_KEY') }}"></div>

      <!-- Toggle Switch -->
      <div class="flex gap-x-4 sm:col-span-2">
        <div x-data="{ isOn: false }" class="flex items-center">
          <span
            @click="isOn = !isOn"
            :aria-checked="isOn"
            :class="{
              'bg-red-600': isOn,
              'bg-gray-200': !isOn
            }"
            class="relative inline-block shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline"
            role="checkbox"
            tabindex="0"
          >
            <span
              aria-hidden="true"
              :class="{
                'translate-x-5': isOn,
                'translate-x-0': !isOn
              }"
              class="inline-block size-5 rounded-full bg-white shadow transform transition ease-in-out duration-200"
            ></span>
          </span>
        </div>
        <label class="text-sm text-gray-600">
          By selecting this, you agree to our
          <a href="#" class="font-semibold text-red-600">privacy&nbsp;policy</a>.
        </label>
      </div>
    </div>

    <!-- Submit Button -->
    <div class="mt-10">
      <button
        type="submit"
        class="block w-full rounded-md bg-red-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:ring-2 focus:ring-red-600 focus:ring-offset-2"
      >
        Send Message
      </button>
    </div>
  </form>
</div>

<!-- Include Turnstile Script -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>

<!-- Full-Page Scheduling Widget -->
<div class="relative isolate py-8 lg:py-16">
  <!-- Background Red Blur -->
  <div class="absolute inset-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" 
         style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
    </div>
  </div>

  <!-- Section Title -->
  <div class="text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">
      Schedule a Call
    </h2>
    <p class="mt-4 text-lg text-gray-600">
      Book a time that works best for you, and let's discuss your project.
    </p>
  </div>

  <!-- Calendly Widget -->
  <div class="calendly-inline-widget mt-10" 
       data-url="https://calendly.com/jaydenlyricr/30min" 
       style="width: 100%; height: 900px; border: none;"></div>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
</div>



</body>
</html>
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