@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="relative rounded-3xl overflow-hidden h-[320px] md:h-[400px] lg:h-[480px] flex items-center max-w-6xl mx-auto"
         style="background-image: url('{{ Vite::asset('resources/images/menu-hero.png') }}'); background-size: cover; background-position: center;">
  <div class="px-6 md:px-12 lg:px-20 max-w-3xl">
    <h1 class="text-4xl md:text-5xl lg:text-6xl text-white font-bold leading-tight font-cabinet mb-4">
      Jelajahi Cita Rasa<br/>Nusantara
    </h1>
    <p class="text-base md:text-lg text-gray-200 font-[jakarta] mb-6">
      Dari Sabang sampai Merauke, kami hadirkan pilihan menu khas daerah, paket keluarga, 
      hingga promo spesial. Temukan hidangan favorit Anda dan nikmati kehangatan Indonesia di setiap suapan.
    </p>
    <a href="#reservasi"
       class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-lg transition">
      Reservasi Sekarang
    </a>
  </div>
</section>

{{-- Top filter pills + sort --}}
<div x-data="{
      selected: '{{ request()->get('filter', 'menu-nusantara') }}',
      filters: [
        { key: 'menu-nusantara', label: 'Menu Nusantara' },
        { key: 'paket-keluarga', label: 'Paket Keluarga' },
        { key: 'promo-spesial', label: 'Promo Spesial' },
        { key: 'menu-sehat', label: 'Menu Sehat' }
      ]
    }"
    class="max-w-6xl mx-auto mt-8 px-6 md:px-12 lg:px-20 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">

  <div class="flex flex-wrap gap-3 w-full lg:w-auto">
    <template x-for="filter in filters" :key="filter.key">
      <button
        type="button"
        class="px-4 py-2 rounded-md text-sm font-medium transition focus:outline-none focus:ring-2 focus:ring-offset-2"
        :class="selected === filter.key
                 ? 'bg-[#C1442E] text-white border-transparent shadow-sm'
                 : 'bg-white text-gray-700 border border-gray-200 hover:bg-gray-50'"
        @click="selected = filter.key"
        :aria-pressed="selected === filter.key ? 'true' : 'false'"
        x-text="filter.label"
      ></button>
    </template>
  </div>

  <div class="flex items-center space-x-3 w-full lg:w-auto justify-end">
    <span class="text-sm text-gray-600 hidden md:inline">Sortir Berdasarkan :</span>
    
    <div x-data="{ open: false, selected: 'Paling Populer', options: ['Paling Populer', 'Harga Terendah', 'Harga Tertinggi', 'Terbaru'] }" class="relative">
      <button @click="open = !open" 
              class="flex items-center justify-between w-40 px-3 py-2 bg-white border border-gray-200 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
        <span x-text="selected"></span>
        <svg class="w-4 h-4 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>

      <div x-show="open" @click.away="open = false" 
           class="absolute right-0 mt-1 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-10">
        <template x-for="option in options" :key="option">
          <button @click="selected = option; open = false" 
                  class="block w-full text-left px-3 py-2 text-sm text-gray-700 hover:bg-gray-100"
                  x-text="option"></button>
        </template>
      </div>
    </div>
  </div>
</div>

{{-- Grid Container: Sidebar kiri + Card kanan --}}
<div class="max-w-6xl mx-auto mt-6 px-6 md:px-12 lg:px-20 grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-8">

  <aside class="space-y-6 order-2 lg:order-1">
    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Availability</h4>
      <div class="space-y-2 text-sm text-gray-600">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded border-gray-300"> 
          <span>Tersedia</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded border-gray-300"> 
          <span>Pre-order</span>
        </label>
      </div>
    </div>

    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Level Pedas</h4>
      <div class="space-y-2 text-sm text-gray-600">
        <label class="flex items-center space-x-2">
          <input type="radio" name="pedas" class="text-[#C1442E] border-gray-300"> 
          <span>Tidak Pedas</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="pedas" class="text-[#C1442E] border-gray-300"> 
          <span>Sedang</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="pedas" class="text-[#C1442E] border-gray-300"> 
          <span>Pedas</span>
        </label>
      </div>
    </div>

    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Harga</h4>
      <input type="range" min="0" max="100" class="w-full accent-[#C1442E]">
      <div class="flex justify-between text-xs text-gray-500">
        <span>Rp0</span>
        <span>Rp100.000</span>
      </div>
    </div>

    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Daerah Asal Menu</h4>
      <div class="space-y-2 text-sm text-gray-600">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded"> 
          <span>Jawa</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded"> 
          <span>Sumatera</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded"> 
          <span>Kalimantan</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded"> 
          <span>Sulawesi</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded"> 
          <span>Bali</span>
        </label>
      </div>
    </div>

    <div>
      <h4 class="font-semibold text-gray-800 mb-2">Kategori</h4>
      <div class="space-y-2 text-sm text-gray-600">
        <label class="flex items-center space-x-2">
          <input type="radio" name="kategori" class="text-[#C1442E]"> 
          <span>Menu Nusantara</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="kategori" class="text-[#C1442E]"> 
          <span>Promo Spesial</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="kategori" class="text-[#C1442E]"> 
          <span>Paket Keluarga</span>
        </label>
      </div>
    </div>
  </aside>

  {{-- Grid Cards (kanan) --}}
  <div class="lg:col-span-3 order-1 lg:order-2">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      @php
        $cards = [
          [
            'image' => Vite::asset('resources/images/buburmanado.png'),
            'title' => 'Bubur Manado',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Sulawesi', 'color' => 'green']],
            'rating' => '4.3',
            'oldPrice' => '22000',
            'price' => '18000',
            'description' => 'Bubur khas Sulawesi dengan campuran sayuran segar, daun kemangi, dan rasa gurih...',
          ],
          [
            'image' => Vite::asset('resources/images/sotobanjar.png'),
            'title' => 'Soto Banjar',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Kalimantan', 'color' => 'green']],
            'rating' => '4.5',
            'oldPrice' => '26000',
            'price' => '22000',
            'description' => 'Hidangan khas Kalimantan dengan kuah bening gurih, suwiran ayam, perkedel, dan bawang...',
          ],
          [
            'image' => Vite::asset('resources/images/rawon.png'),
            'title' => 'Rawon',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Jawa Timur', 'color' => 'green']],
            'rating' => '4.6',
            'oldPrice' => '25000',
            'price' => '20000',
            'description' => 'Sup daging sapi khas Jawa Timur dengan kuah hitam dari kluwek, disajikan dengan tauge dan...',
          ],
          [
            'image' => Vite::asset('resources/images/pempek.png'),
            'title' => 'Pempek',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Sumatera', 'color' => 'green']],
            'rating' => '4.5',
            'oldPrice' => '26000',
            'price' => '20000',
            'description' => 'Olahan ikan khas Palembang dengan rasa gurih kenyal, disajikan dengan kuah cuko pedas-manis.',
          ],
          [
            'image' => Vite::asset('resources/images/rendang.png'),
            'title' => 'Rendang',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Sumatera Barat', 'color' => 'green']],
            'rating' => '4.9',
            'oldPrice' => '55000',
            'price' => '45000',
            'description' => 'Rendang daging sapi khas Minangkabau dengan bumbu kaya rempah dan santan.',
            'link' => 'http://localhost/project-pkl/rendang/',
          ],
          [
            'image' => Vite::asset('resources/images/sotokudus.png'),
            'title' => 'Soto Kudus',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Jawa Tengah', 'color' => 'green']],
            'rating' => '4.8',
            'oldPrice' => '29000',
            'price' => '25000',
            'description' => 'Soto ayam khas Kudus dengan kuah gurih ringan, suwiran ayam kampung, dan taburan bawang...',
          ],
          [
            'image' => Vite::asset('resources/images/ayambetutu.png'),
            'title' => 'Ayam Betutu',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Bali', 'color' => 'green']],
            'rating' => '4.5',
            'oldPrice' => '49000',
            'price' => '40000',
            'description' => 'Ayam utuh khas Bali yang dibumbui rempah pedas, dimasak perlahan hingga daging empuk dan...',
          ],
          [
            'image' => Vite::asset('resources/images/nasiliwet.png'),
            'title' => 'Nasi Liwet Solo',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Jawa Tengah', 'color' => 'green']],
            'rating' => '4.4',
            'oldPrice' => '26000',
            'price' => '22000',
            'description' => 'Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan areh santan yang creamy.',
          ],
          [
            'image' => Vite::asset('resources/images/papeda.png'),
            'title' => 'Papeda dan Ikan',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Papua', 'color' => 'green']],
            'rating' => '4.7',
            'oldPrice' => '49000',
            'price' => '39000',
            'description' => 'Hidangan khas Papua berbahan dasar sagu dengan tekstur kenyal dan rasa netral, biasanya...',
          ],
          [
            'image' => Vite::asset('resources/images/naniura.png'),
            'title' => 'Naniura',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Sumatera', 'color' => 'green']],
            'rating' => '4.5',
            'oldPrice' => '49000',
            'price' => '40000',
            'description' => 'Ikan mas segar khas Batak Toba, Sumatera Utara, dimasak tanpa api dengan bumbu rempah asam...',
          ],
          [
            'image' => Vite::asset('resources/images/gudegyogya.png'),
            'title' => 'Gudeg Yogya',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas DIY', 'color' => 'green']],
            'rating' => '4.8',
            'oldPrice' => '26000',
            'price' => '22000',
            'description' => 'Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan areh santan yang creamy.',
          ],
          [
            'image' => Vite::asset('resources/images/seitanah.png'),
            'title' => 'Sei Tanah Rote',
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Nusa Tenggara', 'color' => 'green']],
            'rating' => '4.8',
            'oldPrice' => '39000',
            'price' => '49000',
            'description' => 'Daging asap khas Nusa Tenggara Timur, dimasak perlahan dengan aroma kayu bakar, disajikan...',
          ],
        ];
      @endphp

      @foreach ($cards as $card)
        <x-card
          :image="$card['image']"
          :title="$card['title']"
          :badges="$card['badges']"
          :rating="$card['rating']"
          :oldPrice="$card['oldPrice']"
          :price="$card['price']"
          :description="$card['description']"
          :link="$card['link']"
        />
      @endforeach
    </div>

    {{-- Tombol --}}
    <div class="mt-8 text-center">
      <button class="bg-[#C1442E] text-white px-6 py-3 rounded-md text-sm hover:bg-[#a63723] w-full sm:w-auto">
        Pesan Sekarang
      </button>
    </div>
  </div>

</div>

@endsection