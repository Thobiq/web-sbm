<footer class="bg-[#008369] py-5 text-white relative overflow-hidden">
    <img src="{{ asset('images/abstrak_ornament_white.png') }}" alt="ornamen" class="absolute bottom-0 left-0 h-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between flex-col md:flex-row">
            <div class="flex flex-col items-center md:items-start">
                <p class="text-2xl font-bold">CV. Surya Barokah Mandiri</p>
                <p class="">Bertumbuh Untuk Sejahtera Bersama</p>
            </div>

            <div>
                <div class="hidden space-x-4 md:flex">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('tentang') }}">Tentang</a>
                    <a href="{{ route('layanan') }}">Layanan</a>
                    <a href="{{ route('kegiatan') }}">Kegiatan</a>
                    <a href="{{ route('kontak') }}">Kontak</a>
                </div>

                <div class="flex flex-row space-y-2 space-x-2 mt-3 justify-center md:flex-col">
                    <div class="flex md:items-center">
                        <a href="mailto:suryabarokahmandiri@gmail.com">
                            <img src="{{ asset('images/icon_email_white.png') }}" alt="logo_ig" class="h-7 w-auto">    
                        </a>
                        <a href="mailto:suryabarokahmandiri@gmail.com" class="ml-2 hidden md:flex">suryabarokahmandiri@gmail.com</a>
                    </div>
                    <div class="flex md:items-center">
                        <a href="https://www.facebook.com/opek.laros">
                            <img src="{{ asset('images/icon_fb_white.png') }}" alt="logo_fb" class="h-7 w-auto">
                        </a>
                        <a href="https://www.facebook.com/opek.laros" class="ml-2 hidden md:flex ">Surya Barokah Mandiri</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="bg-white border-0 h-px my-5">
    
    <p class="mx-auto flex justify-center text-center">© 2025 CV. Surya Barokah Mandiri. All Right Reserved</p>
</footer>