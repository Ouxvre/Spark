<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark</title>

    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font  -->
    <script src="https://unpkg.com/feather-icons"></script>


    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    html {
        scroll-behavior: smooth;
    }   

    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins';
        scrollbar-width: none;
    }
    </style>
</head>

<body>

    <!-- navbar -->
    <header class="bg-[#265D85] text-white">
        <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

            <!-- Logo -->
            <div class="text-2xl font-bold">Spark<span class="text-[#68BBFF]">.</span></div>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#cara-kerja" class="hover:text-gray-300">Cara Kerja</a>
                <a href="#premium" class="hover:text-gray-300">Premium</a>
            </nav>

            <!-- Tombol -->
            <a href="#get-started"
                class="hidden md:inline-block ml-6 bg-white text-black px-4 py-2 rounded-full font-medium hover:bg-gray-200">
                Get Started
            </a>

            <!-- Hamburger (Mobile) -->
            <button class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- section awal -->

    <section class="bg-[#34658D] text-white">
        <div class="max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 items-center gap-10">

            <!-- Kiri: Teks -->
            <div>
                <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">
                    Wawancara kerja itu susah bin ajaib, latihan di <br class="hidden md:block" />
                    <span class="text-white">Spark. sekarang!</span>
                </h1>
                <p class="text-gray-200 mb-6">
                    Latihan wawancara bareng AI di mana aja, kapan aja, tawaran kerja di depan mata!
                </p>
                <a href="#"
                    class="inline-block bg-green-500 text-white px-5 py-2 rounded-lg font-medium hover:bg-green-600 transition">
                    Coba Sekarang!
                </a>
            </div>

            <!-- Kanan: Gambar -->
            <div class="flex justify-center relative">
                <img src="../src/assets/img/Enyok.jpg" alt="Orang dengan laptop"
                    class="max-w-sm md:max-w-md lg:max-w-lg w-full h-auto object-contain">
            </div>

            <div class="flex items-center justify-center">
                <h1>Cara Kerja</h1>
            </div>
        </div>
    </section>


    <!-- cara kerja -->


    <section id="cara-kerja" class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10 items-center">
        <!-- Langkah 1 -->
        <div>
            <p class="uppercase tracking-widest text-gray-500 mb-2">Langkah 1</p>
            <h2 class="text-2xl font-semibold mb-4">Isi posisi yang ingin dilamar</h2>
            <p class="text-gray-600">
                Ketik posisi dan nama perusahaan yang ingin dilamar, AI akan bentuk latihan interview yang sesuai
            </p>
        </div>

        <div class="bg-gray-50 rounded-xl p-8 flex justify-center">
            <div class="bg-gray-100 rounded-xl overflow-hidden w-[575px] h-[329px]">
                <img src="../src/assets/img/Enyok.jpg" alt="contoh" class="w-full h-full object-cover">
            </div>
        </div>

        <!-- Langkah 2 -->
        <div class="bg-gray-50 rounded-xl p-8 flex justify-center">
            <div class="bg-gray-100 rounded-xl overflow-hidden w-[575px] h-[329px]">
                <img src="../src/assets/img/Enyok.jpg" alt="contoh" class="w-full h-full object-cover">
            </div>
        </div>

        <div>
            <p class="uppercase tracking-widest text-gray-500 mb-2">Langkah 2</p>
            <h2 class="text-2xl font-semibold mb-4">Wawancara langsung pakai suara</h2>
            <p class="text-gray-600">
                Wawancara bareng AI kami, seperti ngobrol dengan HR
                beneran!
            </p>
        </div>

        <!-- Langkah 3-->
        <div>
            <p class="uppercase tracking-widest text-gray-500 mb-2">Langkah 3</p>
            <h2 class="text-2xl font-semibold mb-4">Dapat masukan langsung setelah wawancara</h2>
            <p class="text-gray-600">
                Dapatkan saran dan tips untuk wawancara yang lebih baik
                langsung setelah wawancara selesai!
            </p>
        </div>

        <div class="bg-gray-50 rounded-xl p-8 flex justify-center">
            <div class="bg-gray-100 rounded-xl overflow-hidden w-[575px] h-[329px]">
                <img src="../src/assets/img/Enyok.jpg" alt="contoh" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

</body>

</html>