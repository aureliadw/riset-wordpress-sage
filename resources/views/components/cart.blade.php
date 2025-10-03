<div 
  class="fixed top-0 right-0 w-full sm:w-96 h-full bg-[#fdfaf7] shadow-2xl transform transition-transform duration-300 ease-in-out z-50 flex flex-col"
  x-show="cartOpen"
  x-transition:enter="translate-x-full"
  x-transition:enter-end="translate-x-0"
  x-transition:leave="translate-x-0"
  x-transition:leave-end="translate-x-full"
>
  <div class="flex justify-between items-center px-4 sm:px-5 py-3 sm:py-4 border-b">
    <h2 class="text-lg sm:text-xl font-semibold">Keranjang Rasa</h2>
    <button @click="cartOpen = false" class="text-xl sm:text-2xl font-bold text-gray-600 hover:text-black">&times;</button>
  </div>

  <div class="flex justify-between items-center px-4 sm:px-5 py-2 border-b text-xs sm:text-sm">
    <span class="font-medium text-gray-700">1 Menu Dipilih</span>
    <button class="text-red-600 hover:underline">Bersihkan Semua</button>
  </div>

  <div class="flex-1 overflow-y-auto p-4 sm:p-5 space-y-4 sm:space-y-5">
    <div class="flex space-x-3 sm:space-x-4">
      <img src="{{ Vite::asset('resources/images/rendang2.png') }}" class="w-16 h-16 sm:w-20 sm:h-20 rounded-lg object-cover">
      <div class="flex-1">
        <p class="text-sm sm:text-base font-semibold">Rawon</p>
        <p class="text-xs text-gray-500">Khas Jawa Timur</p>
        <div class="flex items-center justify-between mt-2">
          <div class="flex items-center space-x-2">
            <button class="px-2 py-1 bg-gray-200 rounded">-</button>
            <span class="px-2">1</span>
            <button class="px-2 py-1 bg-red-600 text-white rounded">+</button>
          </div>
          <div class="text-right">
            <p class="text-[10px] sm:text-xs text-gray-400 line-through">Rp 32.000</p>
            <p class="text-sm sm:text-base font-semibold">Rp 27.000</p>
          </div>
        </div>
      </div>
      <button class="text-gray-400 hover:text-red-600">🗑</button>
    </div>
  </div>

  <div class="border-t px-4 sm:px-5 py-3 sm:py-4 space-y-2 text-xs sm:text-sm bg-[#fdfaf7]">
    <div class="flex justify-between">
      <span>Sub Total</span>
      <span class="font-semibold">Rp 133.000</span>
    </div>
    <div class="flex justify-between">
      <span>Diskon</span>
      <span class="text-green-600">Rp 23.000</span>
    </div>
    <div class="flex justify-between">
      <span>Kupon</span>
      <span class="text-gray-600">#promomerdeka</span>
    </div>
    <div class="flex justify-between font-bold text-sm sm:text-base border-t pt-2">
      <span>Total</span>
      <span>Rp 110.000</span>
    </div>
    <button class="w-full bg-red-600 text-white py-2 sm:py-3 rounded-lg mt-3 hover:bg-red-700 font-medium text-sm sm:text-base">
      Pesan Sekarang
    </button>
  </div>
</div>
