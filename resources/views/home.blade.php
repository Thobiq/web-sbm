@extends('layouts.app')

@section('content')
<div
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

    .clip-left-rounded {
      clip-path: inset(0 round 30px 0 30px 0);
    }

    .clip-right-rounded {
      clip-path: inset(0 round 0 30px 0 30px);
    }

    .clip-diagonal {
      clip-path: polygon(0% 10%, 100% 0%, 100% 90%, 0% 100%);
    }

    @keyframes fadeSlideUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeScale {
      from {
        opacity: 0;
        transform: scale(0.8);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fade-up {
      animation: fadeSlideUp 1s ease-out forwards;
    }

    .animate-fade-scale {
      animation: fadeScale 1s ease-out forwards;
    }

    @media (max-width: 1024px) {
      .foto-box {
        display: none !important;
      }

      #beranda {
        background-position: left 150px;
        background-size: 800px 700px;
      }
    }

    @media (min-width: 1025px) and (max-width: 1535px) {
      .foto-box {
        display: none !important;
      }

      .foto-1,
      .foto-4 {
        display: flex !important;
      }

      #beranda {
        background-size: 900px 680px;
        background-position: left calc(100% + 30px);
      }
    }

    @media (max-width: 850px) {
      #teks-home {
        margin-top: 60px;
      }
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
          <span class="text-gray-600 font-medium">foto</span>
        </div>

        <!-- Foto 2 -->
        <div class="absolute top-30 right-54 w-[144px] h-[169px] bg-gray-300 flex items-center justify-center clip-right-rounded foto-box foto-2 animate-fade-scale" style="animation-delay: 0.2s;">
          <span class="text-gray-600 font-medium">foto</span>
        </div>

        <!-- Foto 3 -->
        <div class="absolute bottom-3 left-45 w-[144px] h-[169px] bg-gray-300 flex items-center justify-center clip-right-rounded foto-box foto-3 animate-fade-scale" style="animation-delay: 0.4s;">
          <span class="text-gray-600 font-medium">foto</span>
        </div>

        <!-- Foto 4 -->
        <div class="absolute bottom-0 top-80 right-28 w-[248px] h-[290px] bg-gray-300 flex items-center justify-center clip-left-rounded foto-box foto-4 animate-fade-scale" style="animation-delay: 0.6s;">
          <span class="text-gray-600 font-medium">foto</span>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection
