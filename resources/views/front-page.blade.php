@extends('layouts.app')

@section('content')

<div class="mx-auto px-4 max-w-[1280px]">

{{-- Hero Section --}}
<section class="bg-[#fdfaf7] pt-0 pb-12 px-6 md:px-12 lg:px-20 mb-16 rounded-3xl">
  <div class="max-w-6xl mx-auto">
    <div class="swiper heroSwiper relative rounded-3xl overflow-hidden h-[500px]">
      <div class="swiper-wrapper">
        
        {{-- Slide 1 --}}
        <div class="swiper-slide">
          <div class="relative w-full h-full flex items-center"
               style="background-image: url('{{ Vite::asset('resources/images/hero-bg.png') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10 px-8 md:px-16 lg:px-20 max-w-xl mt-[-64px] ml-8 md:ml-16">
              <h1 class="text-5xl md:text-6xl text-white font-bold leading-tight font-cabinet mb-4">
                Cita Rasa Nusantara<br>di Setiap Suapan
              </h1>
              <p class="text-lg text-gray-200 font-[jakarta] mb-6">
                Nikmati hidangan autentik dari Sabang hingga Merauke, dihidangkan dengan cinta.
              </p>
              <a href="#reservasi" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-lg transition">
                Reservasi Sekarang
              </a>
            </div>
          </div>
        </div>

        {{-- Slide 2 --}}
        <div class="swiper-slide">
          <div class="relative w-full h-full flex items-center"
               style="background-image: url('{{ Vite::asset('resources/images/menu-hero.png') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10 px-8 md:px-16 lg:px-20 max-w-xl mt-[-64px] ml-8 md:ml-16">
              <h1 class="text-5xl md:text-6xl text-white font-bold leading-tight font-cabinet mb-4">
                Warisan Kuliner<br>Indonesia
              </h1>
              <p class="text-lg text-gray-200 font-[jakarta] mb-6">
                Resep turun temurun yang dijaga keasliannya, disajikan dengan penuh kehangatan.
              </p>
              <a href="#menu" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-lg transition">
                Lihat Menu
              </a>
            </div>
          </div>
        </div>

        {{-- Slide 3 --}}
        <div class="swiper-slide">
          <div class="relative w-full h-full flex items-center"
               style="background-image: url('{{ Vite::asset('resources/images/sotobanjar.png') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10 px-8 md:px-16 lg:px-20 max-w-xl mt-[-64px] ml-8 md:ml-16">
              <h1 class="text-5xl md:text-6xl text-white font-bold leading-tight font-cabinet mb-4">
                Paket Keluarga<br>Spesial
              </h1>
              <p class="text-lg text-gray-200 font-[jakarta] mb-6">
                Nikmati berbagi cerita bersama keluarga dengan paket hemat dan lezat.
              </p>
              <a href="#paket" class="inline-block bg-red-600 hover:bg-red-700 text-white font-medium px-6 py-3 rounded-lg transition">
                Lihat Paket
              </a>
            </div>
          </div>
        </div>

      </div>

      {{-- Navigation Arrows --}}
      <div class="swiper-button-next !text-white !w-10 !h-10 after:!text-2xl"></div>
      <div class="swiper-button-prev !text-white !w-10 !h-10 after:!text-2xl"></div>

      {{-- Pagination Dots --}}
      <div class="swiper-pagination !bottom-6"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.heroSwiper', {
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  });
</script>

{{-- Spesial Hari Ini --}}
<div class="mb-10 px-6 md:px-12 lg:px-20">
  <h1 class="text-5xl text-gray-900 leading-[1.3] font-cabinet font-bold">
    Spesial Hari Ini, <br />Spesial untuk Anda
  </h1>
  <p class="mt-2 text-lg text-gray-700 max-w-xl font-[jakarta] font-normal">
    Jelajahi hidangan pilihan dari seluruh penjuru Nusantara, diracik dengan bumbu autentik dan disajikan segar hanya untuk Anda hari ini.
  </p>
</div>

{{-- Grid Menu --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-16 px-6 md:px-12 lg:px-20">
  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/ayamtaliwang.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Ayam Taliwang</div>
      <div class="text-sm">Mulai Rp 29.000</div>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2 sm:row-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/rendang.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Rendang</div>
      <div class="text-sm">Mulai Rp 39.000</div>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/gudeg.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Gudeg Jogja</div>
      <div class="text-sm">Mulai Rp 24.000</div>
      <button class="mt-2 px-3 py-1 bg-[#C1442E] text-xs rounded-full hover:bg-red-700 transition">
        Reservasi
      </button>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:row-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/coto1.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-3 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400">★★★★★</div>
      <div class="font-semibold">Coto Makassar</div>
      <div class="text-sm">Mulai Rp 34.000</div>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/rasa.png') }}" class="w-full h-full object-cover">
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/rawon.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Rawon</div>
      <div class="text-xs">Mulai Rp 22.000</div>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/papeda.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Papeda & Ikan</div>
      <div class="text-xs">Mulai Rp 49.000</div>
    </div>
  </div>

  <div class="relative rounded-2xl overflow-hidden shadow-lg sm:col-span-2 min-h-[212px]">
    <img src="{{ Vite::asset('resources/images/nasitutug.png') }}" class="w-full h-full object-cover">
    <div class="absolute bottom-0 w-full p-2 bg-gradient-to-t from-black/70 to-transparent text-white">
      <div class="text-yellow-400 text-sm">★★★★★</div>
      <div class="font-semibold text-sm">Nasi Tutug Oncom</div>
      <div class="text-xs">Mulai Rp 44.000</div>
    </div>
  </div>
</div>

{{-- Cita Rasa yang Selalu Dirindukan --}}
<section id="favorite" class="pt-10 pb-14 bg-[#fdfaf7] rounded-3xl px-6 md:px-12 lg:px-20 mb-16">
  <div class="mb-12 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
    <div>
      <h2 class="text-5xl text-gray-900 leading-[1.3] font-cabinet font-bold">
        Cita Rasa yang<br>Selalu Dirindukan
      </h2>
      <p class="mt-2 text-lg text-gray-700 max-w-xl font-[jakarta] font-normal">
        Dari Sabang sampai Merauke, menu andalan ini menjadi favorit karena kelezatannya yang tak lekang oleh waktu.
      </p>
    </div>
    <div class="flex space-x-4">
      <button class="px-4 py-2 bg-[#C1442E] text-white rounded-xl hover:bg-red-700 transition">
        Best Seller
      </button>
      <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-xl hover:bg-gray-300 transition">
        Rekomendasi
      </button>
    </div>
  </div>

  <div id="best-seller" role="tabpanel">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
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
            'badges' => [['label' => 'Best Seller', 'color' => 'red'], ['label' => 'Khas Sumatera', 'color' => 'green']],
            'rating' => '4.9',
            'oldPrice' => '42000',
            'price' => '35000',
            'description' => 'Daging sapi empuk khas Minang yang dimasak dengan santan dan rempah hingga meresap...',
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
        ];
      @endphp

      @foreach ($cards as $card)
        <div class="group">
          <x-card
            :image="$card['image']"
            :title="$card['title']"
            :badges="$card['badges']"
            :rating="$card['rating']"
            :oldPrice="$card['oldPrice']"
            :price="$card['price']"
            :description="$card['description']"
            class="transition-all duration-300 group-hover:scale-105 group-hover:shadow-2xl"
          />
        </div>
      @endforeach
    </div>

    <div class="flex justify-center mt-10">
      <a href="{{ url('/menu') }}" class="bg-[#C1442E] text-white px-6 py-3 rounded-full shadow-md hover:bg-[#a83620] transition">
        Lihat Semua Menu
      </a>
    </div>
  </div>
</section>

{{-- Paket Keluarga Nusantara --}}
<section class="bg-[#C1442E] py-14 mb-16 rounded-3xl px-6 md:px-12 lg:px-20">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <div class="text-white">
        <h2 class="text-3xl md:text-5xl font-bold leading-tight">
          Paket Keluarga<br>Nusantara
        </h2>
        <p class="mt-3 text-base md:text-lg max-w-md">
          Menu istimewa untuk berbagi cerita di meja makan.
        </p>

        <div class="flex gap-3 mt-6">
          <button id="paket-prev" class="w-10 h-10 flex items-center justify-center rounded-full border border-white hover:bg-white hover:text-[#C1442E] transition">
            ←
          </button>
          <button id="paket-next" class="w-10 h-10 flex items-center justify-center rounded-full border border-white hover:bg-white hover:text-[#C1442E] transition">
            →
          </button>
        </div>
      </div>

      <div class="overflow-hidden">
        <div class="swiper paketSwiper">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Vite::asset('resources/images/nasitutug2.png') }}" class="w-full h-72 md:h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 p-4 text-white">
                  <div class="flex items-center text-yellow-400 text-xs mb-1">★★★★★</div>
                  <h3 class="font-semibold text-base md:text-lg">Nasi Tutug Oncom</h3>
                  <p class="text-xs md:text-sm">Mulai Rp 150.000 untuk 4 orang</p>
                  <button class="mt-2 w-full bg-[#C1442E] text-white py-2 text-sm rounded-full hover:bg-red-700 transition">
                    Reservasi Sekarang
                  </button>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Vite::asset('resources/images/nasiliwet2.png') }}" class="w-full h-72 md:h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 p-4 text-white">
                  <div class="flex items-center text-yellow-400 text-xs mb-1">★★★★★</div>
                  <h3 class="font-semibold text-base md:text-lg">Nasi Liwet Solo</h3>
                  <p class="text-xs md:text-sm">Mulai Rp 110.000 untuk 4 orang</p>
                  <button class="mt-2 w-full bg-[#C1442E] text-white py-2 text-sm rounded-full hover:bg-red-700 transition">
                    Reservasi Sekarang
                  </button>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Vite::asset('resources/images/gudeg2.png') }}" class="w-full h-72 md:h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 p-4 text-white">
                  <div class="flex items-center text-yellow-400 text-xs mb-1">★★★★★</div>
                  <h3 class="font-semibold text-base md:text-lg">Gudeg Jogja</h3>
                  <p class="text-xs md:text-sm">Mulai Rp 96.000 untuk 4 orang</p>
                  <button class="mt-2 w-full bg-[#C1442E] text-white py-2 text-sm rounded-full hover:bg-red-700 transition">
                    Reservasi Sekarang
                  </button>
                </div>
              </div>
            </div>

             <div class="swiper-slide">
              <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Vite::asset('resources/images/buburmanado.png') }}" class="w-full h-72 md:h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 p-4 text-white">
                  <div class="flex items-center text-yellow-400 text-xs mb-1">★★★★★</div>
                  <h3 class="font-semibold text-base md:text-lg">Bubur Manado</h3>
                  <p class="text-xs md:text-sm">Mulai Rp 99.000 untuk 5 orang</p>
                  <button class="mt-2 w-full bg-[#C1442E] text-white py-2 text-sm rounded-full hover:bg-red-700 transition">
                    Reservasi Sekarang
                  </button>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="{{ Vite::asset('resources/images/rendang.png') }}" class="w-full h-72 md:h-80 object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute bottom-0 p-4 text-white">
                  <div class="flex items-center text-yellow-400 text-xs mb-1">★★★★★</div>
                  <h3 class="font-semibold text-base md:text-lg">Paket Rendang</h3>
                  <p class="text-xs md:text-sm">Mulai Rp 180.000 untuk 4 orang</p>
                  <button class="mt-2 w-full bg-[#C1442E] text-white py-2 text-sm rounded-full hover:bg-red-700 transition">
                    Reservasi Sekarang
                  </button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const paketSwiper = new Swiper('.paketSwiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
      },
    });

    document.getElementById('paket-prev').addEventListener('click', () => {
      paketSwiper.slidePrev();
    });

    document.getElementById('paket-next').addEventListener('click', () => {
      paketSwiper.slideNext();
    });
  });
</script>

{{-- Cerita Dibalik Rasa Nusa --}}
<section class="pt-10 pb-14 bg-[#fdfaf7] rounded-3xl mb-16 px-6 md:px-12 lg:px-20">
  <div class="text-left mb-10 max-w-6xl mx-auto">
    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
      Cerita Dibalik Rasa Nusa
    </h2>
    <p class="text-gray-600 max-w-2xl leading-relaxed">
      Setiap hidangan punya kisah.<br />
      Temukan perjalanan rasa dari bahan pilihan hingga tradisi yang kami jaga.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-6xl mx-auto">
    <div x-data="{ open: true }" class="border border-gray-300 rounded-2xl overflow-hidden">
      <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-base md:text-lg font-medium text-gray-900">
        Sejarah Rasa Nusa
        <span x-show="!open">+</span>
        <span x-show="open">−</span>
      </button>
      <div x-show="open" x-transition class="px-6 pb-6 text-white bg-gray-900 rounded-b-2xl">
        <p>
          Kami percaya bahwa rasa terbaik lahir dari bahan terbaik. Semua bahan yang kami gunakan berasal dari petani dan nelayan lokal,
          dipilih secara ketat untuk menjaga kesegaran, kualitas, dan rasa yang autentik. Dengan cara ini, kami tidak hanya menjaga cita rasa,
          tetapi juga mendukung perekonomian lokal.
        </p>
      </div>
    </div>

    <div x-data="{ open: false }" class="border border-gray-300 rounded-2xl overflow-hidden">
      <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-base md:text-lg font-medium text-gray-900">
        Filosofi Rasa
        <span x-show="!open">+</span>
        <span x-show="open">−</span>
      </button>
      <div x-show="open" x-transition class="px-6 pb-6 text-gray-200 bg-gray-900 rounded-b-2xl">
        <p>
          Setiap hidangan mengandung filosofi tentang kebersamaan, kesederhanaan,
          dan cinta pada budaya nusantara. Kami percaya bahwa makanan bukan hanya sekadar
          untuk mengenyangkan, tetapi juga sarana mempererat hubungan dan berbagi cerita.
        </p>
      </div>
    </div>

    <div x-data="{ open: false }" class="border border-gray-300 rounded-2xl overflow-hidden">
      <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-base md:text-lg font-medium text-gray-900">
        Komitmen Halal
        <span x-show="!open">+</span>
        <span x-show="open">−</span>
      </button>
      <div x-show="open" x-transition class="px-6 pb-6 text-gray-200 bg-gray-900 rounded-b-2xl">
        <p>
          Kami berkomitmen menghadirkan hidangan halal dengan standar kualitas tinggi
          yang sesuai syariat, mulai dari pemilihan bahan, proses memasak, hingga penyajian.
          Dengan begitu, Anda bisa menikmati rasa nusantara dengan tenang.
        </p>
      </div>
    </div>

    <div x-data="{ open: false }" class="border border-gray-300 rounded-2xl overflow-hidden">
      <button @click="open = !open" class="w-full flex justify-between items-center px-6 py-4 text-base md:text-lg font-medium text-gray-900">
        Perjalanan Kami ke Depan
        <span x-show="!open">+</span>
        <span x-show="open">−</span>
      </button>
      <div x-show="open" x-transition class="px-6 pb-6 text-gray-200 bg-gray-900 rounded-b-2xl">
        <p>
          Dengan inovasi dan semangat menjaga warisan budaya, kami terus berkomitmen
          menghadirkan cita rasa nusantara untuk generasi mendatang. Visi kami adalah
          membawa kelezatan kuliner lokal ke panggung dunia.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- Apa Kata Mereka --}}
<section class="bg-[#fdfaf7] pt-10 pb-14 px-6 md:px-12 lg:px-20 overflow-hidden rounded-3xl mb-16">
  <div class="max-w-[1600px] mx-auto">
    <div class="mb-12 text-left px-6 md:px-12 lg:px-20">
      <h2 class="text-3xl md:text-5xl font-bold text-gray-900">
        Apa Kata Mereka?
      </h2>
      <p class="text-gray-600 mt-2 max-w-2xl">
        Cerita nyata dari pelanggan yang telah mencicipi dan jatuh cinta pada cita rasa nusantara di Rasa Nusa.
      </p>
    </div>

    <div class="swiper testiSwiper">
      <div class="swiper-wrapper items-center">
        
        {{-- Testimoni 1 - Jessica --}}
        <div class="swiper-slide">
          <div class="flex w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl transition-all duration-500">
            <div class="w-1/2">
              <img src="{{ Vite::asset('resources/images/jessica.png') }}" alt="Jessica" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#1a1a1a] text-white w-1/2 p-10 flex flex-col justify-between">
              <div class="text-6xl mb-4">"</div>
              <p class="text-lg leading-relaxed mb-6">
                Rasa masakannya benar-benar membawa saya pulang ke kampung halaman.
                Rempahnya pas, nasinya pulen, dan sambalnya bikin nagih!
              </p>
              <div>
                <div class="flex items-center text-yellow-400 text-base mb-2">★★★★★</div>
                <h4 class="font-semibold text-xl">Jessica</h4>
                <p class="text-base text-gray-300">Bandung</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Testimoni 2 - Budi --}}
        <div class="swiper-slide">
          <div class="flex w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl transition-all duration-500">
            <div class="w-1/2">
              <img src="{{ Vite::asset('resources/images/testi2.png') }}" alt="Budi" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#1a1a1a] text-white w-1/2 p-10 flex flex-col justify-between">
              <div class="text-6xl mb-4">"</div>
              <p class="text-lg leading-relaxed mb-6">
                Tempatnya nyaman, pelayanan ramah, dan yang paling penting makanannya enak banget!
                Jadi langganan keluarga nih.
              </p>
              <div>
                <div class="flex items-center text-yellow-400 text-base mb-2">★★★★★</div>
                <h4 class="font-semibold text-xl">Melissa</h4>
                <p class="text-base text-gray-300">Jakarta</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Testimoni 3 - Siti --}}
        <div class="swiper-slide">
          <div class="flex w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl transition-all duration-500">
            <div class="w-1/2">
              <img src="{{ Vite::asset('resources/images/rendang.png') }}" alt="Siti" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#1a1a1a] text-white w-1/2 p-10 flex flex-col justify-between">
              <div class="text-6xl mb-4">"</div>
              <p class="text-lg leading-relaxed mb-6">
                Saya suka sekali dengan variasi menunya yang beragam dari berbagai daerah.
                Harga terjangkau dan porsi pas!
              </p>
              <div>
                <div class="flex items-center text-yellow-400 text-base mb-2">★★★★★</div>
                <h4 class="font-semibold text-xl">Siti Aminah</h4>
                <p class="text-base text-gray-300">Surabaya</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Testimoni 4 - Andi --}}
        <div class="swiper-slide">
          <div class="flex w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl transition-all duration-500">
            <div class="w-1/2">
              <img src="{{ Vite::asset('resources/images/gudeg.png') }}" alt="Andi" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#1a1a1a] text-white w-1/2 p-10 flex flex-col justify-between">
              <div class="text-6xl mb-4">"</div>
              <p class="text-lg leading-relaxed mb-6">
                Gudegnya mantap! Rasanya persis seperti di Jogja asli. Pelayanannya juga cepat dan ramah banget.
              </p>
              <div>
                <div class="flex items-center text-yellow-400 text-base mb-2">★★★★★</div>
                <h4 class="font-semibold text-xl">Andi Wijaya</h4>
                <p class="text-base text-gray-300">Yogyakarta</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Testimoni 5 - Rina --}}
        <div class="swiper-slide">
          <div class="flex w-full h-[500px] rounded-2xl overflow-hidden shadow-2xl transition-all duration-500">
            <div class="w-1/2">
              <img src="{{ Vite::asset('resources/images/rawon.png') }}" alt="Rina" class="w-full h-full object-cover">
            </div>
            <div class="bg-[#1a1a1a] text-white w-1/2 p-10 flex flex-col justify-between">
              <div class="text-6xl mb-4">"</div>
              <p class="text-lg leading-relaxed mb-6">
                Rawonnya enak banget! Bumbunya meresap dan dagingnya empuk. Pasti balik lagi!
              </p>
              <div>
                <div class="flex items-center text-yellow-400 text-base mb-2">★★★★★</div>
                <h4 class="font-semibold text-xl">Rina Kusuma</h4>
                <p class="text-base text-gray-300">Semarang</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="flex justify-end gap-3 mt-8 pr-10">
      <button id="testi-prev" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-800 hover:bg-gray-800 hover:text-white transition">
        ←
      </button>
      <button id="testi-next" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-800 hover:bg-gray-800 hover:text-white transition">
        →
      </button>
    </div>
  </div>
</section>

<style>
  .testiSwiper {
    overflow: hidden !important;
    padding: 20px 0;
  }

  .testiSwiper .swiper-slide {
    opacity: 0.5;
    transform: scale(0.8);
    transition: all 0.6s ease;
  }

  .testiSwiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
    z-index: 10;
  }
</style>

<script>
  window.addEventListener('load', function() {
    const testiSwiper = new Swiper('.testiSwiper', {
      effect: 'slide',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 1.8,
      loop: true,
      speed: 800,
      spaceBetween: 20,
    });

    document.getElementById('testi-prev').addEventListener('click', function() {
      testiSwiper.slidePrev();
    });

    document.getElementById('testi-next').addEventListener('click', function() {
      testiSwiper.slideNext();
    });
  });
</script>

{{-- CTA Section --}}
<section class="bg-[#fdfaf7] py-14 px-6 md:px-12 lg:px-20 rounded-3xl mb-16">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <div>
      <h2 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight mb-4">
        Rasakan Kemewahan<br>Cita Rasa Nusantara
      </h2>
      <p class="text-gray-600 mb-6 max-w-md">
        Setiap hidangan adalah karya seni dari rempah terbaik negeri.
        Nikmati pengalaman bersantap yang berkelas, autentik, dan penuh kehangatan tradisi.
      </p>

      <div class="flex gap-4">
        <a href="#" class="bg-[#e74c3c] text-white px-6 py-3 rounded-lg font-medium shadow hover:bg-[#c0392b] transition">
          Pesan sekarang
        </a>
        <a href="#" class="bg-[#f3e5e1] text-gray-800 px-6 py-3 rounded-lg font-medium shadow hover:bg-[#e6d8d3] transition">
          Jelajahi Rasa
        </a>
      </div>
    </div>

    <div class="relative flex justify-center">
      <div class="overflow-hidden rounded-[120px]">
        <img src="{{ Vite::asset('resources/images/makanan.png') }}" alt="Cita Rasa Nusantara" class="w-full h-[400px] object-cover">
      </div>
    </div>
  </div>
</section>

</div>

@endsection