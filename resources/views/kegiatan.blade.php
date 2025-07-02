@extends('layouts.app')

@section('content')
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>

<div class=" py-22 px-4" style="background-color: #008369">
    <div class="container mx-auto">
        <!-- Section Title -->
        <h2 class="text-4xl font-bold text-white text-center mb-12" data-aos="fade-down">
            Kegiatan Kami
        </h2>

        <!-- Activity Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto mb-8">
            @foreach ([1, 2, 3] as $i)
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300"
                 data-aos="zoom-in-up" data-aos-delay="{{ $i * 150 }}">
                <!-- Image -->
                <div class="mb-4">
                    <img src="https://via.placeholder.com/300x200/4a5568/ffffff?text=Team+Activity"
                         alt="Kegiatan Tim"
                         class="w-full h-48 object-cover rounded-lg transform hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Content -->
                <h3 class="text-lg font-bold text-gray-800 mb-3">Lorem ipsum dolor sit amet consectetur</h3>
                <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.
                </p>

                <!-- Button -->
                <button class=" text-white px-6 py-2 rounded-full text-sm font-medium hover:bg-teal-700 transition-colors" style="background-color: #008369">
                    Selengkapnya
                </button>
            </div>
            @endforeach
        </div>

        <!-- View More Button -->
        <div class="flex justify-center" data-aos="fade-up" data-aos-delay="500">
            <a href="#"
               class="inline-flex items-center bg-white  px-8 py-3 rounded-full font-medium hover:bg-gray-50 transition-colors shadow-lg">
                <span class="mr-2">Selengkapnya</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 1000,
    offset: 100
  });
</script>
@endsection
