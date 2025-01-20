@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="bg-white">
  @include('components.header')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">


  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        <div data-aos="fade-left" class="relative rounded-full px-3 py-1 text-sm text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          Announcing our new pricing. 
          <a href="/pricing" class="font-semibold text-red-600">
            <span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span>
          </a>
        </div>
      </div>
      <div class="text-center">
        <h1 data-aos="fade-right" class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
          Design to enrich your online <span id="typewriter" class="text-red-600"></span>
        </h1>
        <p data-aos="fade-up" class="mt-8 text-lg font-medium text-gray-500 sm:text-xl">Empower your vision with cutting-edge designs crafted to captivate, engage, and convert. Whether you're starting fresh or scaling to new heights, we provide the tools to fuel your success.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/contact" data-aos="fade-down" class="rounded-md bg-red-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Get started</a>
          <a href="/pricing" data-aos="fade-down" class="text-sm font-semibold text-gray-900">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#990000] to-[#cc0000] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 data-aos="fade-right" class="text-base font-semibold text-red-600">Why Choose Us?</h2>
      <p data-aos="fade-left" class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Your Vision, Custom-Built</p>
      <p data-aos="fade-in" class="mt-6 text-lg text-gray-600">We specialize in providing tailored web solutions that are designed to elevate your online presence. Here’s what makes us stand out:</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
        <!-- Custom Coded -->
        <div class="relative pl-16" data-aos="fade-right">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
              <!-- Font Awesome Code Icon -->
              <i class="fa-solid fa-code text-white text-lg"></i>
            </div>
            Custom Coded
          </dt>
          <dd class="mt-2 text-gray-600">Each website is built from scratch using high-quality code, ensuring performance and scalability.</dd>
        </div>

        <!-- No Drag-and-Drop Builders -->
        <div class="relative pl-16"data-aos="fade-left">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
              <!-- Font Awesome Block Icon -->
              <i class="fa-solid fa-ban text-white text-lg"></i>
            </div>
            No Drag-and-Drop Builders
          </dt>
          <dd class="mt-2 text-gray-600">Say goodbye to cookie-cutter templates. Our websites are tailored for your brand and needs.</dd>
        </div>

        <!-- Reliable Hosting -->
        <div class="relative pl-16" data-aos="fade-left">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
              <!-- Font Awesome Cloud Icon -->
              <i class="fa-solid fa-cloud text-white text-lg"></i>
            </div>
            Reliable Hosting
          </dt>
          <dd class="mt-2 text-gray-600">We ensure your site stays live and accessible, offering dependable hosting solutions for peace of mind.</dd>
        </div>

        <!-- Advanced Features -->
        <div class="relative pl-16" data-aos="fade-right">
          <dt class="text-base font-semibold text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-red-600">
              <!-- Font Awesome Microchip Icon -->
              <i class="fa-solid fa-microchip text-white text-lg"></i>
            </div>
            Advanced Features
          </dt>
          <dd class="mt-2 text-gray-600">From custom dashboards to integrated email systems, we offer features that elevate your website's functionality.</dd>
        </div>
      </dl>
    </div>
  </div>
</div>



<!-- Additional Section -->
<div class="overflow-hidden bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div class="lg:pr-8 lg:pt-4">
        <div class="lg:max-w-lg">
          <h2 data-aos="fade-down" class="text-base font-semibold text-red-600">Streamline Your Success</h2>
          <p data-aos="fade-right" class="mt-2 text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Simplify Your Webflow</p>
          <p data-aos="fade-up" class="mt-6 text-lg text-gray-600">We provide tools and solutions designed to make managing your online presence seamless and efficient, so you can focus on growing your business.</p>
          <dl class="mt-10 max-w-xl space-y-8 text-base text-gray-600 lg:max-w-none">
            <!-- Feature 1 -->
            <div data-aos="fade-left" class="relative flex items-start gap-x-3">
              <svg  data-aos="fade-right" class="h-6 w-6 text-red-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 0 1-1.44-8.765 4.5 4.5 0 0 1 8.302-3.046 3.5 3.5 0 0 1 4.504 4.272A4 4 0 0 1 15 17H5.5Zm3.75-2.75a.75.75 0 0 0 1.5 0V9.66l1.95 2.1a.75.75 0 1 0 1.1-1.02l-3.25-3.5a.75.75 0 0 0-1.1 0l-3.25 3.5a.75.75 0 1 0 1.1 1.02l1.95-2.1v4.59Z" clip-rule="evenodd" />
              </svg>
              <div>
                <dt data-aos="fade-right" class="font-semibold text-gray-900">One-click Deployment</dt>
                <dd> Launch updates and changes effortlessly, keeping your business agile and up-to-date.</dd>
              </div>
            </div>
            <!-- Feature 2 -->
            <div data-aos="fade-left" class="relative flex items-start gap-x-3">
              <svg data-aos="fade-right" class="h-6 w-6 text-red-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 0 0-4.5 4.5V9H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2h-.5V5.5A4.5 4.5 0 0 0 10 1Zm3 8V5.5a3 3 0 1 0-6 0V9h6Z" clip-rule="evenodd" />
              </svg>
              <div>
                <dt data-aos="fade-right" class="font-semibold text-gray-900">Secure Infrastructure</dt>
                <dd>Protect your data and ensure seamless operations with SSL certificates and industry-standard security.</dd>
              </div>
            </div>
            <!-- Feature 3 -->
            <div data-aos="fade-left" class="relative flex items-start gap-x-3">
              <svg data-aos="fade-right" class="h-6 w-6 text-red-600 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M4.632 3.533A2 2 0 0 1 6.577 2h6.846a2 2 0 0 1 1.945 1.533l1.976 8.234A3.489 3.489 0 0 0 16 11.5H4c-.476 0-.93.095-1.344.267l1.976-8.234Z" />
                <path fill-rule="evenodd" d="M4 13a2 2 0 1 0 0 4h12a2 2 0 1 0 0-4H4Zm11.24 2a.75.75 0 0 1 .75-.75H16a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V15Zm-2.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H13a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd" />
              </svg>
              <div>
                <dt data-aos="fade-right" class="font-semibold text-gray-900">Automated Backups</dt>
                <dd>Rest easy with reliable backups that protect your work and ensure continuity.</dd>
              </div>
            </div>
          </dl>
        </div>
      </div>
      <img data-aos="fade-in" src="https://tailwindui.com/plus/img/component-images/dark-project-app-screenshot.png" alt="Product screenshot" class="w-[48rem] max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]" width="2432" height="1442">
    </div>
  </div>
</div>

<!-- New Testimonial Section -->
<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.red.100),white)] opacity-20"></div>
  <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-red-600/10 ring-1 ring-red-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
  <div class="mx-auto max-w-2xl lg:max-w-4xl">
    <img data-aos="fade-left" class="mx-auto h-12" src="https://tailwindui.com/plus/img/logos/workcation-logo-indigo-600.svg" alt="Workcation Logo">
    <figure class="mt-10">
      <blockquote data-aos="fade-right" class="text-center text-xl font-semibold text-gray-900 sm:text-2xl">
        <p>“Our website transformed into a seamless platform, enabling us to reach new heights in customer engagement.”</p>
      </blockquote>
      <figcaption class="mt-10">
        <img data-aos="fade-down" class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Judith Black">
        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
          <div data-aos="fade-up" class="font-semibold text-gray-900">Judith Black</div>
          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
            <circle cx="1" cy="1" r="1" />
          </svg>
          <div data-aos="fade-up" class="text-gray-600">CEO of Workcation</div>
        </div>
      </figcaption>
    </figure>
  </div>
</section>

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

<script src="https://cdn.jsdelivr.net/npm/typewriter-effect@latest/dist/core.js"></script>
<script>
  const typewriter = new Typewriter('#typewriter', {
    loop: true,
    delay: 75,
  });


  
  typewriter
    .typeString('store')
    .pauseFor(1500)
    .deleteAll()
    .typeString('business')
    .pauseFor(1500)
    .deleteAll()
    .typeString('brand')
    .pauseFor(1500)
    .deleteAll()
    .typeString('website')
    .pauseFor(1500)
    .deleteAll()
    .start();
</script>
@endsection
