@extends('layouts.app')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet"/>
<style>
    @media (min-width: 1025px) and (max-width: 1280px) {
    .garis-vertikal {
        right: 483px    ;
    }
    }

    @media (min-width: 1280px) and (max-width: 1535px) {
    .garis-vertikal {
        right: 610px ;
    }
    }

    @media (min-width: 1535px) and (max-width: 6000px) {
    .garis-vertikal {
        right: 738px ;
    }
    }

   

   @media  (max-width: 1023px) {
    #tentang .flex-col {
      align-items: center !important;
      text-align: center !important;
    }

    #tentang .relative {
      top: 0 !important;
      right: 0 !important;
    }

    #tentang .ml-9 {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    #tentang .lg\\:pl-6 {
      padding-left: 0 !important;
    }

    #tentang .right-185 {
      right: 50% !important;
      transform: translateX(50%);
    }
  }
</style>
<!-- Tentang Kami Section -->
<div id="tentang" class=" py-24 text-white" style="background-color: #008369">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 animate__animated animate__fadeInDown" style="font-size: 48px">Tentang Kami</h2>

        <div class="flex flex-col lg:flex-row items-start gap-12">

            <!-- Logo dan Deskripsi -->
            <div class="lg:w-1/2">
                <!-- Logo -->
                <div class="flex justify-center">
                    <div class="mb-8 relative animate__animated animate__zoomIn" style="width: 250px; height: 250px">
                        <img src="{{ asset('images/tes_logo.png') }}" 
                            alt="Logo CV. Surya Barokah Mandiri" 
                            class="w-full h-full object-contain rounded-full">
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="flex justify-center">
                    <div class="leading-relaxed text-center px-4 animate__animated animate__fadeInUp" style="max-width: 600px; font-size: 24px">
                        <p>
                        CV. Surya Barokah Mandiri adalah perusahaan yang bergerak di bidang direct selling (penjualan langsung dari produsen ke konsumen) sejak tahun 2018. Kami didukung oleh tim yang berpendidikan tinggi serta memiliki etos kerja yang kuat dalam memasarkan berbagai produk dari PPOB yang mempertdistribusikan kepada berbagai vendor terpercaya kami sendiri, yang menjadikan kami lebih bertanggung jawab dengan kemajuan terhadap kualitas dan kepuasan pelanggan.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visi Misi -->
            <div class="lg:w-1/2 relative min-h-[600px] top-10">
                <!-- Garis vertikal -->
                <div class=" garis-vertikal hidden lg:block absolute top-3 h-full w-0.5 bg-white"></div>

                <!-- Visi -->
                <div class="mb-8 relative lg:pl-6 animate__animated animate__fadeInLeft animate__delay-1s right-12">
                    <h3 class="text-xl font-bold mb-4 flex items-center relative z-10">
                        <span class="w-6 h-6 bg-white rounded-full mr-3 flex items-center justify-center">
                            <span class="w-3 h-3 bg-teal-600 rounded-full"></span>
                        </span>
                        Visi
                    </h3>
                    <div class="bg-white text-teal-600 p-4 rounded-lg ml-9 font-semibold" style="max-width: 500px; font-size: 24px">
                        Bersama Berusaha Capai Mulia Dunia Mulia Akhirat
                    </div>
                </div>

                <!-- Misi -->
                <div class="relative lg:pl-6 animate__animated animate__fadeInLeft animate__delay-2s right-12">
                    <h3 class="text-xl font-bold mb-4 flex items-center relative z-10">
                        <span class="w-6 h-6 bg-white rounded-full mr-3 flex items-center justify-center">
                            <span class="w-3 h-3 bg-teal-600 rounded-full"></span>
                        </span>
                        Misi
                    </h3>
                    <div class="bg-white text-teal-600 p-4 rounded-lg ml-9 font-medium space-y-1" style="max-width: 500px; font-size: 24px">
                        <p>• Bekerja Keras, Cerdas, Dan Inovatif</p>
                        <p>• Menjaga Dan Membangun Rasa Kekeluargaan Diantara Keluarga Besar SBM</p>
                        <p>• Selalu Menjaga Dan Meningkatkan Satu Sama Lain</p>
                        <p>• Memento Masukan-Masukan Yang Positif Dan Membangun</p>
                        <p>• Selalu Mengutamakan Dan Memberi Masukan Untuk Menjadi Lebih Baik</p>
                        <p>• Disiplin Uat, Dan Pengantap Bersyukur Atas Apa Yang Sudah Kita Raih</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
