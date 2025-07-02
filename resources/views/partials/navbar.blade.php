<nav class="bg-white shadow-md" x-data="{open: false}">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center" >
                <img src="{{ asset('images/logo_sbm.png') }}" alt="logo SBM" class="h-9 w-auto">
                <a href="/" class="text-xl font-bold text-[#008369] ml-2">SBM</a>
            </div>

            <div class="md:hidden">
                <button @click="open = !open" class="text-gray-800 hover:text-blue-500 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-block': !open }" class="inline-block" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-block': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex md:items-center md:space-x-4">
                <a href="{{ route('home') }}" class="{{ request()->is('/') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Beranda</a>
                <a href="{{ route('tentang') }}" class="{{ request()->is('tentang') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Tentang</a>
                <a href="{{ route('layanan') }}" class="{{ request()->is('layanan') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Layanan</a>
                <a href="{{ route('kegiatan') }}" class="{{ request()->is('kegiatan') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Kegiatan</a>
                <a href="{{ route('kontak') }}" class="{{ request()->is('kontak') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Kontak</a>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden mt-4">
            <a href="{{ route('home') }}" class="block py-2 px-4 text-sm {{ request()->is('/') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Beranda</a>
            <a href="{{ route('tentang') }}" class="block py-2 px-4 text-sm {{ request()->is('tentang') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Tentang</a>
            <a href="{{ route('layanan') }}" class="block py-2 px-4 text-sm {{ request()->is('layanan') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Layanan</a>
            <a href="{{ route('kegiatan') }}" class="block py-2 px-4 text-sm {{ request()->is('kegiatan') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Kegiatan</a>
            <a href="{{ route('kontak') }}" class="block py-2 px-4 text-sm {{ request()->is('kontak') ? 'text-[#008369] font-bold' : 'text-gray-600' }} hover:text-[#008369]">Kontak</a>
        </div>
    </div>
</nav>