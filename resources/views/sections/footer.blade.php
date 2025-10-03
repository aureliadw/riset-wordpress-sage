<footer class="bg-neutral-900 text-gray-300 relative overflow-hidden">
  {{-- Logo dekoratif pojok kiri bawah --}}
  <div class="absolute left-0 bottom-0 pointer-events-none z-0">
    <img
      src="{{ Vite::asset('resources/images/Logo.svg') }}"
      alt="Logo Rasa Nusa"
      class="w-64 md:w-80 lg:w-[460px] max-w-none mix-blend-normal"
      style="opacity:1; filter:none;"
    >
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 pt-20 pb-32">
    {{-- Brand & Menu --}}
    <div class="flex flex-col md:flex-row md:justify-between gap-12 mb-10">
      
      {{-- Brand & Deskripsi --}}
      <div class="md:w-2/5 relative z-10 pb-16">
        <div class="flex items-center gap-3 mb-5">
          <img src="{{ Vite::asset('resources/images/logofooter.png') }}" alt="Rasa Nusa" class="h-8">
        </div>

        <p class="text-sm leading-relaxed text-gray-400 mb-6 max-w-sm">
          Di setiap hidangan, ada cerita dari tanah<br>
          kelahiran. Dari rempah yang harum hingga<br>
          sambal yang membangkitkan selera, kami ingin<br>
          membawa Anda berkeliling nusantara tanpa<br>
          harus meninggalkan meja makan. Mari, duduk<br>
          bersama dan rasakan hangatnya Indonesia di<br>
          setiap suapan.
        </p>

        <div class="flex gap-4 text-gray-400">
          <a href="#" class="hover:text-white transition">
            <img src="{{ Vite::asset('resources/images/tiktok.svg') }}" alt="TikTok" class="h-6 w-6">
          </a>
          <a href="#" class="hover:text-white transition">
            <img src="{{ Vite::asset('resources/images/whatsapp.svg') }}" alt="WhatsApp" class="h-6 w-6">
          </a>
          <a href="#" class="hover:text-white transition">
            <img src="{{ Vite::asset('resources/images/facebook.svg') }}" alt="Facebook" class="h-6 w-6">
          </a>
          <a href="#" class="hover:text-white transition">
            <img src="{{ Vite::asset('resources/images/instagram.svg') }}" alt="Instagram" class="h-6 w-6">
          </a>
        </div>
      </div>

      {{-- Menu Grid --}}
      <div class="grid grid-cols-2 gap-x-10 gap-y-8 md:grid-cols-4 md:w-3/5">
        <div>
          <h3 class="text-white font-semibold mb-4">Menu</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-white">Beranda</a></li>
            <li><a href="#" class="hover:text-white">Menu & Paket</a></li>
            <li><a href="#" class="hover:text-white">Promo & Event</a></li>
            <li><a href="#" class="hover:text-white">Pesan Online</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-white font-semibold mb-4">Informasi</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
            <li><a href="#" class="hover:text-white">Cerita di Balik RasaNusa</a></li>
            <li><a href="#" class="hover:text-white">API Docs</a></li>
            <li><a href="#" class="hover:text-white">Community Forum</a></li>
            <li><a href="#" class="hover:text-white">Webinars</a></li>
            <li><a href="#" class="hover:text-white">Status Page</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-white font-semibold mb-4">Bantuan</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-white">FAQ</a></li>
            <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
            <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
            <li><a href="#" class="hover:text-white">Kontak Kami</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-white font-semibold mb-4">Jelajahi</h3>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-white">Blog RasaNusa</a></li>
            <li><a href="#" class="hover:text-white">Resep Nusantara</a></li>
            <li><a href="#" class="hover:text-white">Galeri Foto</a></li>
            <li><a href="#" class="hover:text-white">Cerita Pelanggan</a></li>
            <li><a href="#" class="hover:text-white">Event Mendatang</a></li>
          </ul>
        </div>
      </div>
    </div>

    {{-- Alamat & Kontak --}}
    <div class="pt-8 grid grid-cols-1 md:grid-cols-3 gap-6 items-start text-sm text-gray-400">
      <div></div>

      <div class="text-center">
        <p>Jl. In aja dulu No. 45</p>
        <p>Jakarta, Indonesia</p>
      </div>

      <div class="text-right">
        <p>Email: <a href="mailto:info@rasanusa.com" class="hover:text-white">info@rasanusa.com</a></p>
        <p>Telp: <a href="tel:02333332077" class="hover:text-white">0233-3332077</a></p>
        <p>WhatsApp: <a href="https://wa.me/6212344556677" class="hover:text-white">+62 123-4455-6677</a></p>
      </div>
    </div>
  </div>
</footer>