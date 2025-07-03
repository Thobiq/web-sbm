@extends('layouts.app')

@section('content')
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<div class="container mx-auto px-4 py-16 overflow-x-hidden">
  <h2 class="text-3xl font-bold text-center text-[#008369] mb-12" data-aos="fade-down">Kontak Kami</h2>

  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
    <!-- Kolom Kiri -->
    <div class="space-y-6" data-aos="fade-right" data-aos-delay="100">
      <!-- Lokasi -->
      <div>
        <h3 class="text-xl font-semibold text-[#008369] mb-2">Lokasi Kami</h3>
        <p class="text-gray-700 mb-4 leading-relaxed">
          Toyamas, Wringinrejo, Kec. Gambiran, Kabupaten Banyuwangi, Jawa Timur
        </p>
        <div class="border-2 border-[#008369] rounded-lg overflow-hidden shadow-lg">
          <iframe
            src="https://www.google.com/maps?q=CV.+Surya+Barokah+Mandiri+Banyuwangi&output=embed"
            class="w-full h-64"
            allowfullscreen=""
            loading="lazy"
            style="border: 0;"
          ></iframe>
        </div>
      </div>

      <!-- Sosial Media -->
      <div>
        <h3 class="text-xl font-semibold text-[#008369] mb-2">Social Media</h3>
        <div class="space-y-4">
          <div class="flex items-center space-x-3">
            <svg class="w-6 h-6 text-[#008369]" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M4 4h16v16H4V4zm8 8c1.66 0 3-1.34 3-3S13.66 6 12 6s-3 1.34-3 3 1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V18h14v-.5c0-2.33-4.67-3.5-7-3.5z"
              />
            </svg>
            <span class="text-gray-700 text-sm">suryabarokahmandiri@gmail.com</span>
          </div>
          <div class="flex items-center space-x-3">
            <svg class="w-6 h-6 text-[#008369]" fill="currentColor" viewBox="0 0 24 24">
              <path
                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.41c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.26c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34v6.99C18.34 21.12 22 16.99 22 12z"
              />
            </svg>
            <span class="text-gray-700 text-sm">Surya Barokah Mandiri</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Kolom Kanan -->
    <div class="bg-[#007B67] text-white p-8 rounded-xl shadow-md w-full" data-aos="fade-left" data-aos-delay="200">
      <h3 class="text-xl font-semibold mb-6">Kirim Pesan</h3>
      <form class="space-y-5">
        <div>
          <label class="block mb-1 text-sm font-semibold">Nama</label>
          <input
            type="text"
            placeholder="Masukkan Nama Anda"
            class="w-full px-4 py-2 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
          />
        </div>
        <div>
          <label class="block mb-1 text-sm font-semibold">Email</label>
          <input
            type="email"
            placeholder="Masukkan Email Anda"
            class="w-full px-4 py-2 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
          />
        </div>
        <div>
          <label class="block mb-1 text-sm font-semibold">No HP (Opsional)</label>
          <input
            type="text"
            placeholder="Masukkan No HP Anda"
            class="w-full px-4 py-2 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
          />
        </div>
        <div>
          <label class="block mb-1 text-sm font-semibold">Pesan</label>
          <textarea
            rows="4"
            placeholder="Masukkan Pesan Anda"
            class="w-full px-4 py-2 rounded-md bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-teal-500"
          ></textarea>
        </div>
        <div>
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-[#00D880] to-[#11C669] text-white py-3 rounded-full font-semibold hover:opacity-90 transition-all"
          >
            Kirim Pesan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: false,
    offset: 100
  });
</script>

@endsection
