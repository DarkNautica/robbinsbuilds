<!-- components/header.blade.php -->
<header data-aos="fade-in" class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between px-8 py-6 lg:px-12" aria-label="Global">
      <div class="flex items-center lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5 flex items-center">
          <span class="sr-only">RobbinsBuilds</span>
          <img class="h-8 w-auto mr-3" src="{{ asset('images/logo.svg') }}" alt="Your Company Logo">
          <span class="text-lg font-semibold text-gray-900">RobbinsBuilds</span>
        </a>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/" class="text-sm font-semibold text-gray-900 hover:text-red-600">Home</a>
        <a href="/pricing" class="text-sm font-semibold text-gray-900 hover:text-red-600">Pricing</a>
        <a href="/contact" class="text-sm font-semibold text-gray-900 hover:text-red-600">Contact</a>
        <!-- <a href="portfolio" class="text-sm font-semibold text-gray-900 hover:text-red-600">Portfolio</a> -->
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="/login" class="text-sm font-semibold text-gray-900 hover:text-red-600">
          Client Login <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    </nav>
</header>

