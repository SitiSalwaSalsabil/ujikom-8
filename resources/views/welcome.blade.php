<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Menghubungkan CSS dan JS melalui Vite -->
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">SekolahKu</a>
            <div class="space-x-4 flex items-center">
                <a href="#informasi" class="hover:text-gray-200">Informasi</a>
                <a href="#agenda" class="hover:text-gray-200">Agenda</a>
                <a href="#galeri" class="hover:text-gray-200">Galeri</a>
                <a href="#kategori" class="hover:text-gray-200">Kategori</a>

                <!-- Login Icon -->
                <a href="{{ auth()->check() ? url('/dashboard') : route('login') }}" class="ml-4">
                    <svg class="w-6 h-6 text-white hover:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H3m0 0l4-4m-4 4l4 4m5-9a9 9 0 11-9 9 9 9 0 019-9z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white py-10 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold text-blue-600">Selamat Datang di Website Sekolah</h1>
            <p class="mt-4 text-gray-600">Informasi terbaru, agenda kegiatan, dan galeri foto sekolah kami.</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-10 px-4">
       <!-- Informasi Section -->
<!-- Informasi Section -->
<section id="informasi" class="my-10">
    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Informasi</h2>
    <p class="text-gray-600">Berisi informasi terbaru tentang sekolah.</p>
    <div class="grid gap-4 md:grid-cols-3 mt-6">
        @foreach ($informasi as $salwa)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-2xl font-semibold">{{ $salwa->judul_info }}</h3> 
                <br>
                <!-- Cek dan pastikan gambar ada -->
                @if ($salwa->isi_info)
                                <img src="{{ Storage::url($salwa->isi_info) }}" alt="{{ $salwa->judul_info }}" style="width: 250px; height: auto;">
                            @else
                                <p>Tidak ada gambar</p>
                            @endif
                <p class="mt-2 text-gray-500 text-sm">{{ $salwa->tgl_post_info }}</p>
                <p class="mt-2 text-gray-500 text-sm">Kategori: {{ $salwa->kategori->judul ?? 'Tidak Ada Kategori' }}</p>
            </div>
        @endforeach
    </div>
</section>





        <!-- Agenda Section -->
        <section id="agenda" class="my-10">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Agenda</h2>
            <p class="text-gray-600">Jadwal kegiatan sekolah terbaru.</p>
            <div class="grid gap-4 md:grid-cols-2 mt-6">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold">Agenda 1</h3>
                    <p class="mt-2 text-gray-600">Detail agenda...</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold">Agenda 2</h3>
                    <p class="mt-2 text-gray-600">Detail agenda...</p>
                </div>
            </div>
        </section>

        <!-- Galeri Section -->
        <section id="galeri" class="my-10">
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Galeri</h2>
            <p class="text-gray-600">Foto-foto kegiatan sekolah kami.</p>
            <div class="grid gap-4 md:grid-cols-3 mt-6">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Foto 1" class="rounded-lg">
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Foto 2" class="rounded-lg">
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Foto 3" class="rounded-lg">
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 SekolahKu. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
