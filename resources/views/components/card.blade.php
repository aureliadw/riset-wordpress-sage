{{-- resources/views/components/card.blade.php --}}
@props([
  'image' => '',
  'title' => '',
  'badges' => [],
  'rating' => '',
  'oldPrice' => '',
  'price' => '',
  'description' => '',
  'link' => ''
])

<div {{ $attributes->merge(['class' => 'bg-white rounded-2xl shadow-md overflow-hidden max-w-xs transition-all duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer']) }}>
  {{-- Gambar + Badge --}}
  <div class="relative overflow-hidden">
    @if($link)
      <a href="{{ $link }}">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-40 object-cover transition-transform duration-500 hover:scale-110">
      </a>
    @else
      <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-40 object-cover transition-transform duration-500 hover:scale-110">
    @endif

    {{-- Badge dinamis --}}
    @if(!empty($badges))
      <div class="absolute top-2 left-2 flex space-x-2">
        @foreach($badges as $badge)
          <span class="bg-{{ $badge['color'] }}-600 text-white text-xs px-2 py-1 rounded-md">
            {{ $badge['label'] }}
          </span>
        @endforeach
      </div>
    @endif
  </div>

  {{-- Konten --}}
  <div class="p-4">
    <div class="flex items-center justify-between mb-1">
      @if($link)
        <a href="{{ $link }}" class="font-semibold text-gray-800 hover:text-[#C1442E] transition">
          {{ $title }}
        </a>
      @else
        <h3 class="font-semibold text-gray-800">{{ $title }}</h3>
      @endif

      {{-- Rating --}}
      @if($rating)
        <div class="flex items-center text-yellow-500 text-sm">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
               viewBox="0 0 20 20" class="w-4 h-4 mr-1">
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
          <span>{{ $rating }}</span>
        </div>
      @endif
    </div>

    {{-- Harga --}}
    <div class="mb-2">
      @if($oldPrice)
        <span class="text-sm text-gray-500 line-through mr-2">Rp {{ number_format($oldPrice, 0, ',', '.') }}</span>
      @endif
      @if($price)
        <span class="text-red-600 font-bold">Rp {{ number_format($price, 0, ',', '.') }}</span>
      @endif
    </div>

    {{-- Deskripsi --}}
    @if($description)
      <p class="text-gray-600 text-sm line-clamp-2 mb-4">
        {{ $description }}
      </p>
    @endif

    {{-- Tombol --}}
    <div class="flex items-center justify-between">
      <button class="bg-[#C1442E] text-white text-sm px-4 py-2 rounded-xl hover:bg-red-700 transition">
        Pesan Sekarang
      </button>
      <button class="p-2 rounded-full border hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
             viewBox="0 0 24 24" class="w-5 h-5 text-gray-500">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 
                   000 6.364L12 20.364l7.682-7.682a4.5 
                   4.5 0 00-6.364-6.364L12 
                   7.636l-1.318-1.318a4.5 
                   4.5 0 00-6.364 0z" />
        </svg>
      </button>
    </div>
  </div>
</div>