@extends('layouts.app')

@section('content')

<div class="max-w-6xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
  {{-- Bagian Kiri: Gambar Utama + Thumbnail --}}
  <div x-data="{
    mainImage: '{{ Vite::asset('resources/images/rendang.png') }}',
    images: [
      '{{ Vite::asset('resources/images/rendang.png') }}',
      '{{ Vite::asset('resources/images/thumb1.png') }}',
      '{{ Vite::asset('resources/images/thumb2.png') }}',
      '{{ Vite::asset('resources/images/thumb3.png') }}'
    ]
  }">
    {{-- Gambar Utama --}}
    <div class="mb-4">
      <img :src="mainImage" 
           alt="Rendang Minang" 
           class="w-full h-64 sm:h-80 md:h-96 object-cover rounded-2xl shadow-md transition-all duration-300">
    </div>
  
    {{-- Thumbnail --}}
    <div class="grid grid-cols-4 gap-2 sm:gap-3">
      <template x-for="(image, index) in images" :key="index">
        <img :src="image" 
             :alt="'Thumbnail ' + (index + 1)"
             @click="mainImage = image"
             :class="mainImage === image ? 'border-[#C1442E] border-2' : 'border'"
             class="w-full aspect-square object-cover rounded-xl cursor-pointer hover:border-[#C1442E] transition-all duration-200">
      </template>
    </div>
  </div>

  {{-- Bagian Kanan: Detail Produk --}}
  <div>
    {{-- Judul + Subjudul --}}
    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-1">Rendang Minang</h1>
    <p class="text-gray-600 mb-3 text-sm sm:text-base">Persembahan Tanah Minang untuk Dunia</p>

    {{-- Rating + Ulasan --}}
    <div class="flex items-center mb-3">
      <div class="flex text-yellow-500 mr-2">
        @for ($i = 0; $i < 5; $i++)
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
               viewBox="0 0 20 20" class="w-4 h-4 sm:w-5 sm:h-5">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 
                     3.292a1 1 0 00.95.69h3.462c.969 0 
                     1.371 1.24.588 1.81l-2.8 
                     2.034a1 1 0 00-.364 
                     1.118l1.07 3.292c.3.921-.755 
                     1.688-1.54 1.118l-2.8-2.034a1 
                     1 0 00-1.176 0l-2.8 
                     2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 
                     1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 
                     1 0 00.95-.69l1.07-3.292z"/>
          </svg>
        @endfor
      </div>
      <span class="text-gray-600 text-xs sm:text-sm">(3k+ ulasan)</span>
    </div>

    {{-- Tiga Tombol --}}
    <div class="flex flex-wrap gap-2 sm:gap-3 mb-4">
      <button class="bg-[#C1442E] text-white text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg">
        Best Seller
      </button>
      <button class="bg-yellow-400 text-gray-900 text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg">
        Masterpiece
      </button>
      <button class="bg-green-600 text-white text-xs sm:text-sm px-3 sm:px-4 py-1.5 sm:py-2 rounded-lg">
        Khas Sumatera
      </button>
    </div>

    {{-- Harga --}}
    <div class="mb-4">
      <span class="text-red-600 font-bold text-2xl sm:text-3xl">Rp 35.000</span>
      <span class="text-gray-500 line-through ml-2 sm:ml-3 text-lg sm:text-xl">Rp 42.000</span>
    </div>

    {{-- Deskripsi Produk --}}
    <p class="text-gray-700 text-sm sm:text-base leading-relaxed mb-4">
      Daging sapi premium dimasak perlahan dengan santan kental dan rempah Minangkabau, menghasilkan tekstur lembut dengan bumbu gurih pedas yang meresap hingga ke serat daging. Cocok dinikmati dengan nasi hangat atau jadi sajian spesial bersama orang tersayang.
    </p>

    {{-- Detail Produk --}}
    <div class="mb-4">
      <h2 class="text-base sm:text-lg font-semibold text-gray-900 mb-2">Detail Produk</h2>
      <div class="space-y-1 text-gray-700 text-sm sm:text-base">
        <p><span class="font-medium w-20 sm:w-28 inline-block">Nama Menu</span>: Rendang Minang</p>
        <p><span class="font-medium w-20 sm:w-28 inline-block">Kategori</span>: Masakan Khas Sumatera</p>
        <p><span class="font-medium w-20 sm:w-28 inline-block">Porsi</span>: 1–2 Orang</p>
      </div>
    </div>

    {{-- Quantity + Tambah ke Keranjang --}}
    <div class="mb-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
      <div class="flex items-center space-x-2">
        <button class="px-3 py-2 border rounded-lg text-sm sm:text-base">−</button>
        <span class="px-4 py-2 border rounded-lg text-sm sm:text-base">1</span>
        <button class="px-3 py-2 border rounded-lg text-sm sm:text-base">+</button>
      </div>

      <div class="flex space-x-2 flex-1">
        <button class="flex-1 border rounded-lg px-4 py-2 text-gray-700 font-medium text-sm sm:text-base">
          Tambah ke Keranjang
        </button>
        <button class="p-2 border rounded-lg">
          ❤️
        </button>
      </div>
    </div>

    {{-- Tombol Pesan Sekarang --}}
    <div>
      <button class="w-full bg-[#C1442E] text-white py-3 rounded-xl text-base sm:text-lg font-semibold">
        Pesan Sekarang
      </button>
    </div>
  </div>
</div>

{{-- Ulasan Customer --}}
<div class="max-w-6xl mx-auto px-4 sm:px-6 mt-12 sm:mt-16">
  <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-6">Ulasan Customer</h2>

  {{-- Filter tombol --}}
<div class="flex flex-col sm:flex-row sm:items-center gap-3 mb-6">
  <div class="flex flex-wrap items-center gap-2 sm:gap-3">
    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-[#C1442E] hover:text-white transition-colors">
      Semua
    </button>
    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-[#C1442E] hover:text-white transition-colors">
      Paling Relevan
    </button>
    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-[#C1442E] hover:text-white transition-colors">
      Dengan Foto
    </button>
    <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm hover:bg-[#C1442E] hover:text-white transition-colors">
      Ulasan Terbaik
    </button>
  </div>

    {{-- Search bar --}}
    <div class="sm:ml-auto">
      <div class="relative">
        <input type="text" placeholder="Cari Ulasan"
               class="pl-10 pr-4 py-2 border rounded-lg w-full sm:w-64 text-sm">
        <svg xmlns="http://www.w3.org/2000/svg" 
             class="w-4 h-4 absolute left-3 top-3 text-gray-400" 
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"/>
        </svg>
      </div>
    </div>
  </div>

  {{-- Rating besar --}}
  <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-0 mb-8">
    <span class="text-3xl sm:text-4xl font-bold text-gray-900 mr-2">4.9</span>
    <span class="text-lg sm:text-xl text-gray-600">/5</span>
    <div class="flex text-yellow-500 ml-0 sm:ml-3">
      @for ($i = 0; $i < 5; $i++)
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
             viewBox="0 0 20 20" class="w-5 h-5 sm:w-6 sm:h-6">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 
                   3.292a1 1 0 00.95.69h3.462c.969 0 
                   1.371 1.24.588 1.81l-2.8 
                   2.034a1 1 0 00-.364 
                   1.118l1.07 3.292c.3.921-.755 
                   1.688-1.54 1.118l-2.8-2.034a1 
                   1 0 00-1.176 0l-2.8 
                   2.034c-.785.57-1.84-.197-1.54-1.118l1.07-3.292a1 
                   1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.462a1 
                   1 0 00.95-.69l1.07-3.292z"/>
        </svg>
      @endfor
    </div>
    <span class="ml-0 sm:ml-3 text-gray-600 text-sm sm:text-base">Dari 3k+ Ulasan</span>
  </div>

  {{-- Grid ulasan --}}
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">
    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">Worth it dengan harganya. Tekstur daging lembut, tidak alot, dan aroma rempahnya bikin nagih. Rasanya benar-benar Nusantara</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          @for ($i = 0; $i < 5; $i++)
            ★
          @endfor
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Jessica</span>
      </div>
    </div>

    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">Rendangnya enak, tapi agak berminyak. Tapi rasa tetap top, recommended buat pecinta rendang asli Minang!</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          ★★★★☆
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Clara</span>
      </div>
    </div>

    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">Dagingnya empuk banget, bumbunya meresap sampai ke dalam. Rasanya autentik seperti rendang di rumah nenek di Padang. Pasti repeat order!</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          @for ($i = 0; $i < 5; $i++)
            ★
          @endfor
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Uni Bakwan</span>
      </div>
    </div>

    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">Pengiriman cepat, packaging rapi, dan porsinya pas. Bumbunya pekat, meski aku lebih suka sedikit lebih pedas. Overall enak banget</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          ★★★★☆
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Rizky</span>
      </div>
    </div>

    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">Rasanya kaya rempah dan gurihnya mantap. Cocok banget dimakan bareng nasi panas. Ini salah satu rendang terenak yang pernah aku coba</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          @for ($i = 0; $i < 5; $i++)
            ★
          @endfor
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Maya</span>
      </div>
    </div>

    <div class="border rounded-xl p-4">
      <p class="text-gray-700 mb-3 text-sm sm:text-base">First time coba, langsung jatuh cinta! Packagingnya juga rapi dan ramah lingkungan, jadi makin suka.</p>
      <div class="flex items-center justify-between">
        <div class="flex text-yellow-500 text-sm">
          ★★★★☆
        </div>
        <span class="font-semibold text-gray-900 text-sm sm:text-base">Bayu</span>
      </div>
    </div>
  </div>

  {{-- Tombol Lihat Ulasan --}}
  <div class="mt-8 text-center">
    <button class="bg-[#C1442E] text-white px-6 py-3 rounded-full text-sm font-medium">
      Lihat Ulasan ⌄
    </button>
  </div>
</div>

{{-- Menu yang mungkin kamu suka --}}
<div class="max-w-6xl mx-auto px-4 sm:px-6 mt-12 sm:mt-16">
  <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-6">Menu yang Mungkin Kamu Suka</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
    <x-card 
      image="{{ Vite::asset('resources/images/nasiliwet.png') }}"
      title="Nasi Liwet Solo"
      :badges="[['label' => 'Best Seller', 'color' => 'red']]"
      rating="4.4"
      oldPrice="26.000"
      price="22.000"
      description="Nasi gurih khas Solo dengan lauk sayur labu siam, ayam suwir, dan areh.."
      link="#"
    />

    <x-card 
      image="{{ Vite::asset('resources/images/ayambetutu.png') }}"
      title="Ayam Betutu"
      :badges="[['label' => 'Masterpiece', 'color' => 'yellow']]"
      rating="4.5"
      oldPrice="49.000"
      price="40.000"
      description="Ayam utuh khas Bali yang dibumbui rempah pedas, dimasak perlahan..."
      link="#"
    />

    <x-card 
      image="{{ Vite::asset('resources/images/sotokudus.png') }}"
      title="Soto Kudus"
      :badges="[['label' => 'Khas Jawa Tengah', 'color' => 'green']]"
      rating="4.8"
      oldPrice="29.000"
      price="25.000"
      description="Soto ayam khas Kudus dengan kuah gurih ringan, suwiran ayam kampung."
      link="#"
    />

    <x-card 
      image="{{ Vite::asset('resources/images/pempek.png') }}"
      title="Pempek"
      :badges="[['label' => 'Best Seller', 'color' => 'red']]"
      rating="4.5"
      oldPrice="26.000"
      price="20.000"
      description="Olahan ikan khas Palembang dengan rasa gurih kenyal, disajikan dengan..."
      link="#"
    />
  </div>
</div>

@endsection