@extends('layouts.app')

@section('content')
<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>

<div class="container mx-auto px-4 py-8">
    <!-- Section: Layanan Kami -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h2 class="text-3xl font-bold text-teal-600 mb-8">Layanan Kami</h2>
    </div>

    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-16 justify-items-center">
            @foreach (['icon1.png', 'icon2.png', 'icon3.png'] as $index => $icon)
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
    <div class=" rounded-2xl p-6 sm:p-8 max-w-7xl mx-auto" data-aos="fade-up" style="background-color: #008369">
        <h2 class="text-3xl font-bold text-white text-center mb-8">Produk Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
            @for ($i = 0; $i < 4; $i++)
            <div class="bg-white rounded-lg p-4 w-full max-w-[270px]"
                 data-aos="flip-left" data-aos-delay="{{ $i * 150 }}">
                <div class="bg-gray-100 rounded-lg mb-4 h-32 flex items-center justify-center">
                    <img src="https://via.placeholder.com/120x80/4a5568/ffffff?text=Hannan+Tea" alt="Hannan Tea" class="rounded">
                </div>
                <h3 class="font-semibold text-gray-800 mb-1 text-center">Hannan Tea</h3>
                <p class="text-xs text-gray-600 mb-2 text-center">Lorem ipsum dolor sit amet consectetur...</p>
            </div>
            @endfor
        </div>

        <div class="text-center mt-10" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="bg-white text-teal-700 px-6 py-2 rounded-full font-semibold shadow-md hover:bg-gray-100 transition">
                Selengkapnya →
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
