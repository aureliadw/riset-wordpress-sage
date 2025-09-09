@php 
    $current_url = url()->current();
@endphp

<nav class="bg-[#fdfaf7] border-b border-gray-200" x-data="{ mobileOpen: false }">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">

      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center">
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
          <img src="{{ get_theme_file_uri('resources/images/Frame 1597885396.svg') }}" alt="RasaNusa Logo" class="h-8 w-auto">
        </a>
      </div>

      <!-- Desktop menu -->
      <div class="hidden md:flex space-x-6 items-center">
        <a href="{{ url('/') }}" 
           class="px-4 py-2 text-sm font-medium rounded-full {{ $current_url == url('/') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:text-gray-900' }}">
           Beranda
        </a>
        <a href="{{ url('/menu') }}" 
           class="px-4 py-2 text-sm font-medium rounded-full {{ $current_url == url('/menu') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:text-gray-900' }}">
           Menu
        </a>
        <a href="{{ url('/tentang') }}" 
           class="px-4 py-2 text-sm font-medium rounded-full {{ $current_url == url('/tentang') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:text-gray-900' }}">
           Tentang Kami
        </a>
        <a href="{{ url('/promo') }}" 
           class="px-4 py-2 text-sm font-medium rounded-full {{ $current_url == url('/promo') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:text-gray-900' }}">
           Promo
        </a>
        <a href="{{ url('/kontak') }}" 
           class="px-4 py-2 text-sm font-medium rounded-full {{ $current_url == url('/kontak') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:text-gray-900' }}">
           Kontak / Reservasi
        </a>
      </div>

      <!-- Icons & Hamburger -->
      <div class="flex items-center space-x-6">
        <!-- Icons (hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-6">
          <img src="{{ Vite::asset('resources/images/icon.svg') }}" alt="icon" class="w-5 h-5" />
          <img src="{{ Vite::asset('resources/images/icon2.svg') }}" alt="Cart" class="w-5 h-5" />
          <img src="{{ Vite::asset('resources/images/icon3.svg') }}" alt="User" class="w-5 h-5" />
        </div>
        
        <!-- Hamburger for mobile -->
        <button @click="mobileOpen = !mobileOpen" class="md:hidden p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none">
          <!-- Icon berubah tergantung state -->
          <svg x-show="!mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <svg x-show="mobileOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div x-show="mobileOpen" class="md:hidden bg-[#fdfaf7] px-4 pt-2 pb-3 space-y-2">
    <a href="{{ url('/') }}" 
       class="block px-4 py-2 rounded-md {{ $current_url == url('/') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
       Beranda
    </a>
    <a href="{{ url('/menu') }}" 
       class="block px-4 py-2 rounded-md {{ $current_url == url('/menu') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
       Menu
    </a>
    <a href="{{ url('/tentang') }}" 
       class="block px-4 py-2 rounded-md {{ $current_url == url('/tentang') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
       Tentang Kami
    </a>
    <a href="{{ url('/promo') }}" 
       class="block px-4 py-2 rounded-md {{ $current_url == url('/promo') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
       Promo
    </a>
    <a href="{{ url('/kontak') }}" 
       class="block px-4 py-2 rounded-md {{ $current_url == url('/kontak') ? 'bg-red-600 text-white font-semibold' : 'text-gray-600 hover:bg-gray-100' }}">
       Kontak / Reservasi
    </a>
  </div>
</nav>
