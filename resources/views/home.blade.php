@extends('layouts.app')

@section('content')

<section
  id="beranda"
  class="py-24 relative overflow-hidden"
>
<style>
#beranda {
    background-image: url('/images/abstrak2.png');
    background-repeat: no-repeat;
    background-size: 1000px 560px;
    background-position: left calc(100% + 50px);
}
</style>

  <div class="container px-4 relative z-10 mx-auto p-6 bottom-10">
    <div class="flex flex-col lg:flex-row items-center relative">

      <!-- Kiri: Teks -->
      <div id="teks-home" class="lg:w-1/2 mb-10 lg:mb-0 ml-8 z-10 animate-fade-up">
        <h1 class="text-5xl font-bold text-teal-600 mb-4">CV. Surya Barokah Mandiri</h1>
        <div class="border-l-4 border-teal-600 pl-4 mb-6">
          <p class="text-gray-700 text-lg">Bertumbuh Untuk Sejahtera Bersama</p>
        </div>
        <button class="bg-teal-600 text-white px-8 py-3 rounded-full hover:bg-teal-700 hover:scale-105 transition-all duration-300 ease-in-out">
          Selengkapnya
        </button>
      </div>

      <!-- Kanan: Foto dengan animasi -->
      <div class="lg:w-1/2 relative min-h-[500px] mt-10 lg:mt-0 left-10">

        <!-- Foto 1 -->
        <div class="absolute top-0 left-20 w-[248px] h-[290px] bg-gray-300 flex items-center justify-center clip-left-rounded foto-box foto-1 animate-fade-scale">
          <img src="{{ asset('images/foto1.png') }}" alt="Foto 3" class="w-full h-full object-cover" />
        </div>

        <!-- Foto 2 -->
        <div class="absolute top-30 right-54 w-[144px] h-[169px] bg-gray-300 flex items-center justify-center clip-right-rounded foto-box foto-2 animate-fade-scale" style="animation-delay: 0.2s;">
          <img src="{{ asset('images/foto2.png') }}" alt="Foto 3" class="w-full h-full object-cover" />
        </div>

        <!-- Foto 3 -->
        <div class="absolute bottom-3 left-45 w-[144px] h-[169px] bg-gray-300 flex items-center justify-center clip-right-rounded foto-box foto-3 animate-fade-scale" style="animation-delay: 0.4s;">
          <img src="{{ asset('images/foto3.png') }}" alt="Foto 3" class="w-full h-full object-cover" />
        </div>

        <!-- Foto 4 -->
        <div class="absolute bottom-0 top-80 right-28 w-[248px] h-[290px] bg-gray-300 flex items-center justify-center clip-left-rounded foto-box foto-4 animate-fade-scale" style="animation-delay: 0.6s;">
          <img src="{{ asset('images/foto4.png') }}" alt="Foto 3" class="w-full h-full object-cover" />
        </div>

      </div>
    </div>
  </div>
</section>

<section id="tentang" class="py-16 text-white  overflow-hidden overflow-x-hidden" style="background-color: #008369">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-12" style="font-size: 48px" data-aos="fade-down">Tentang Kami</h2>

    <div class="flex flex-col lg:flex-row items-start gap-12">
      
      <!-- Kiri: Logo & Deskripsi -->
      <div class="lg:w-1/2">
        <div class="flex justify-center">
          <div class="mb-8 relative" style="width: 250px; height: 250px" data-aos="zoom-in">
            <img src="{{ asset('images/tes_logo.png') }}" alt="Logo CV. Surya Barokah Mandiri" class="w-full h-full object-contain rounded-full">
          </div>
        </div>
        <div class="flex justify-center">
          <div class="leading-relaxed text-center px-4" style="max-width: 600px; font-size: 24px" data-aos="fade-up" data-aos-delay="100">
            <p class="text-justify">
              CV. Surya Barokah Mandiri adalah perusahaan yang bergerak di bidang direct selling (penjualan langsung dari produsen ke konsumen) sejak tahun 2018. Kami didukung oleh tim yang berpendidikan tinggi serta memiliki etos kerja yang kuat dalam memasarkan berbagai produk dari PPOB yang mempertdistribusikan kepada berbagai vendor terpercaya kami sendiri, yang menjadikan kami lebih bertanggung jawab dengan kemajuan terhadap kualitas dan kepuasan pelanggan.
            </p>
          </div>
        </div>
      </div>

      <!-- Kanan: Visi & Misi -->
      <div class="lg:w-1/2 relative min-h-[600px] lg:top-10 top-0">
        <div class="garis-vertikal hidden lg:block absolute top-3 h-full w-0.5 bg-white"></div>

        <!-- Visi -->
        <div class="mb-8 relative lg:pl-6 lg:right-12 right-0" data-aos="fade-left" data-aos-delay="200">
          <h3 class="font-bold mb-4 flex items-center relative z-10" style="font-size: 24px;">
            <span class="w-6 h-6 bg-white rounded-full mr-3 flex items-center justify-center">
              <span class="w-3 h-3 bg-teal-600 rounded-full"></span>
            </span>
            Visi
          </h3>
          <div class="bg-white text-teal-600 p-8 rounded-lg ml-9 font-semibold" style="max-width: 600px; font-size: 20px">
            Bersama Berusaha Capai Mulia Dunia Mulia Akhirat
          </div>
        </div>

        <!-- Misi -->
        <div class="relative lg:pl-6 lg:right-12 right-0" data-aos="fade-left" data-aos-delay="300">
          <h3 class="font-bold mb-4 flex items-center relative z-10" style="font-size: 24px;">
            <span class="w-6 h-6 bg-white rounded-full mr-3 flex items-center justify-center">
              <span class="w-3 h-3 bg-teal-600 rounded-full"></span>
            </span>
            Misi
          </h3>
          <div class="bg-white text-teal-600 p-8 rounded-lg ml-9 font-medium" style="max-width: 600px; font-size: 20px">
            <ul class="list-disc list-inside text-left space-y-2">
                <li>Bekerja Keras, Cerdas, Dan Inovatif</li>
                <li>Menjaga Dan Mempererat Rasa Kekeluargaan Diantara Keluarga Besar SBM</li>
                <li>Saling Menjaga Dan Memperkuat Satu Sama Lain</li>
                <li>Menerima Masukan-Masukkan Yang Positif Dan Membangun</li>
                <li>Saling Mengingatkan Dan Memberi Masukkan Untuk Menjadi Lebih Baik</li>
                <li>Disiplin, Ulet, Dan Perbanyak Bersyukur Atas Apa Yang Sudah Kita Raih</li>
            </ul>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container mx-auto px-4 py-8">
    <!-- Section: Layanan Kami -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h2 class="text-3xl font-bold text-teal-600 mb-8">Layanan Kami</h2>
    </div>

    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-16 justify-items-center">
            @foreach (['digital-services.png', 'digital-services.png', 'digital-services.png'] as $index => $icon)
            <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 w-full max-w-[300px]"
                 data-aos="zoom-in-up" data-aos-delay="{{ $index * 150 }}">
                <div class="flex justify-center mb-10">
                    <div class="w-16 h-16 bg-teal-600 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('images/' . $icon) }}" alt="Icon" class="w-8 h-8 object-contain" />
                    </div>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-2 text-center">Title Here</h3>
                <p class="text-sm text-gray-600 text-center">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Section: Produk Kami -->
      @php
         $produk = [
            [
            'nama' => 'Hannan Tea',
            'gambar' => 'hanan-tea.png',
            'deskripsi' => 'Teh herbal alami yang menyehatkan tubuh dan pikiran.'
            ],
            [
            'nama' => 'Hannan Tea',
            'gambar' => 'hanan-tea.png',
            'deskripsi' => 'Teh herbal alami yang menyehatkan tubuh dan pikiran.'
            ],
            [
            'nama' => 'Hannan Tea',
            'gambar' => 'hanan-tea.png',
            'deskripsi' => 'Teh herbal alami yang menyehatkan tubuh dan pikiran.'
            ],
            [
            'nama' => 'Hannan Tea',
            'gambar' => 'hanan-tea.png',
            'deskripsi' => 'Teh herbal alami yang menyehatkan tubuh dan pikiran.'
            ],
           
        ];
        @endphp

        <div class="bg-[#008369] rounded-2xl p-6 sm:p-8 max-w-7xl mx-auto" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-white text-center mb-8">Produk Kami</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
            @foreach ($produk as $index => $item)
            <div class="bg-white rounded-lg p-4 w-full max-w-[270px]"
                data-aos="flip-left" data-aos-delay="{{ $index * 150 }}">
                <div class="bg-gray-100 rounded-lg mb-4 h-32 flex items-center justify-center overflow-hidden">
                <img src="{{ asset('images/' . $item['gambar']) }}" alt="{{ $item['nama'] }}" class="object-contain h-full">
                </div>
                <h3 class="font-semibold text-gray-800 mb-1 text-center">{{ $item['nama'] }}</h3>
                <p class="text-xs text-gray-600 mb-2 text-center">{{ $item['deskripsi'] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-10" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="bg-white text-teal-700 px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-100 transition">
                Selengkapnya →
            </a>
        </div>
    </div>
</section>


<section class="py-22 px-4" style="background-color: #008369">
    <div class="container mx-auto">
        <!-- Section Title -->
        <h2 class="text-4xl font-bold text-white text-center mb-12" data-aos="fade-down">
            Kegiatan Kami
        </h2>

        @php
        $kegiatan = [
            [
                'gambar' => 'foto1.png',
                'judul' => 'Pelatihan Digital Marketing',
                'deskripsi' => 'Kegiatan pelatihan digital marketing untuk UMKM di Banyuwangi.'
            ],
            [
                'gambar' => 'foto2.png',
                'judul' => 'Distribusi Produk Baru',
                'deskripsi' => 'Distribusi perdana produk baru Hannan Tea di wilayah Jember.'
            ],
            [
                'gambar' => 'foto3.png',
                'judul' => 'Workshop Kesehatan Herbal',
                'deskripsi' => 'Pengenalan manfaat herbal kepada masyarakat dan pelanggan.'
            ]
        ];
        @endphp
        <!-- Activity Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto mb-8">
            @foreach ($kegiatan as $index => $item)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300"
                 data-aos="zoom-in-up" data-aos-delay="{{ $index * 150 }}">
                <!-- Image -->
                <div class="mb-4">
                    <img src="{{ asset('images/' . $item['gambar']) }}"
                         alt="{{ $item['judul'] }}"
                         class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Content -->
                <h3 class="text-lg font-bold text-gray-800 mb-3">{{ $item['judul'] }}</h3>
                <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                    {{ $item['deskripsi'] }}
                </p>

                <!-- Button -->
                <button class="text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-teal-700 transition-colors" style="background-color: #008369">
                    Selengkapnya
                </button>
            </div>
            @endforeach
        </div>

        <!-- View More Button -->
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="500">
            <a href="#"
               class="inline-flex items-center bg-white px-8 py-3 rounded-full font-medium hover:bg-gray-50 transition-colors shadow-lg">
                <span class="mr-2">Selengkapnya</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z"/>
                </svg>
            </a>
        </div>
    </div>
  </section>


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
