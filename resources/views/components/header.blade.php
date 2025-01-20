<header data-aos="fade-in" class="absolute inset-x-0 top-0 z-50">
  <nav class="flex items-center justify-between px-8 py-6 lg:px-12" aria-label="Global">
    <div class="flex items-center lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5 flex items-center">
        <span class="sr-only">RobbinsBuilds</span>
        <img class="h-8 w-auto mr-3" src="{{ asset('images/logo.svg') }}" alt="Your Company Logo">
        <span class="text-lg font-semibold text-gray-900">RobbinsBuilds</span>
      </a>
    </div>
    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
      <button
        type="button"
        class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-red-600 focus:outline-none"
        aria-controls="mobile-menu"
        aria-expanded="false"
        onclick="toggleMobileMenu()"
      >
        <span class="sr-only">Open menu</span>
        <!-- Menu Icon -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <!-- Desktop Navigation -->
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="/" class="text-sm font-semibold text-gray-900 hover:text-red-600">Home</a>
      <a href="/pricing" class="text-sm font-semibold text-gray-900 hover:text-red-600">Pricing</a>
      <a href="/contact" class="text-sm font-semibold text-gray-900 hover:text-red-600">Contact</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="/login" class="text-sm font-semibold text-gray-900 hover:text-red-600">
        Client Login <span aria-hidden="true">&rarr;</span>
      </a>
    </div>
  </nav>
  <!-- Mobile Navigation Menu -->
  <div id="mobile-menu" class="hidden lg:hidden">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a href="/" class="block text-sm font-semibold text-gray-900 hover:text-red-600">Home</a>
      <a href="/pricing" class="block text-sm font-semibold text-gray-900 hover:text-red-600">Pricing</a>
      <a href="/contact" class="block text-sm font-semibold text-gray-900 hover:text-red-600">Contact</a>
      <a href="/login" class="block text-sm font-semibold text-gray-900 hover:text-red-600">Client Login</a>
    </div>
  </div>
</header>

<script>
  function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  }
</script>
