@extends('layouts.app')

@section('content')
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<style>
  @media (min-width: 1025px) and (max-width: 1280px) { .garis-vertikal { right: 483px; } }
  @media (min-width: 1280px) and (max-width: 1535px) { .garis-vertikal { right: 610px; } }
  @media (min-width: 1535px) { .garis-vertikal { right: 738px; } }

  @media (max-width: 1023px) {
    #tentang .flex-col { align-items: center !important; text-align: center !important; }
    #tentang .relative { top: 0 !important; right: 0 !important; }
    #tentang .ml-9 { margin-left: auto !important; margin-right: auto !important; }
    #tentang .lg\:pl-6 { padding-left: 0 !important; }
    #tentang .right-185 { right: 50% !important; transform: translateX(50%); }
  }
</style>

<!-- Tentang Kami Section -->
<div id="tentang" class="py-16 text-white overflow-x-hidden" style="background-color: #008369">
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
</div>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: false,
    duration: 1000,
    offset: 100
  });
</script>

@endsection
