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
    <div class="relative bg-[#34658D] h-[75xvh] overflow-hidden">
        <div class="absolute -left-20 -top-20 w-64 h-64 bg-[#68BBFF] rounded-full opacity-50"></div>

        <!-- navbar -->
        <header class="text-white">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

                <!-- Logo -->
                <div class="text-4xl font-bold z-10">
                    Spark<span class="text-[#68BBFF]">.</span>
                </div>

                <!-- Menu + Tombol -->
                <div class="flex items-center space-x-10">
                    <!-- Menu Desktop -->
                    <nav class="hidden md:flex items-center space-x-10">
                        <a href="#cara-kerja" class="hover:text-gray-300">Cara Kerja</a>
                        <a href="#premium" class="hover:text-gray-300">Premium</a>
                    </nav>

                    <!-- Tombol -->
                    <a href="../public/views/login.php"
                        class="hidden md:inline-block bg-white text-black px-6 py-2 rounded-full font-medium hover:bg-gray-200 text-[15px]">
                        Get Started
                    </a>
                </div>


                <!-- Hamburger (Mobile) -->
                <button class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </header>

        <!-- Hero Content -->
        <div class="relative z-10 container mx-auto px-8 pt-20 pb-32">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Wawancara kerja itu susah bin ajaib, latihan di Spark. sekarang!
                    </h1>
                    <p class="text-xl mb-8 text-blue-100">
                        Latihan wawancara bareng AI di mana aja, kapan aja, tawaran kerja di depan mata!
                    </p>
                    <button class="bg-teal-400 hover:bg-teal-500 text-white px-8 py-4 rounded-lg font-semibold text-lg transition shadow-lg">
                        Coba Sekarang!
                    </button>
                </div>

                <!-- Right Content - Image -->
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop"
                        alt="Woman with laptop"
                        class="w-full max-w-md mx-auto rounded-lg shadow-2xl transform hover:scale-105 transition duration-300">

                    <!-- Floating Card -->
                    <div class="absolute bottom-8 right-0 bg-white rounded-lg shadow-xl p-4 max-w-xs transform hover:scale-105 transition duration-300">
                        <div class="flex items-start gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=50&h=50&fit=crop"
                                alt="Linda"
                                class="w-12 h-12 rounded-full">
                            <div>
                                <div class="font-semibold text-gray-800">Linda</div>
                                <div class="text-sm text-gray-600">
                                    <!-- Background pendidikan saya akuntasi, saya ingin... -->
                                    Aku suka nonton <br> sound horeg...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- cara kerja -->
<section class="max-w-6xl mx-auto px-6 py-16" id="cara-kerja">

  <!-- Title + Arrow -->
  <div class="flex flex-col items-center justify-center mb-12">
    <h1 class="text-3xl font-bold tracking-wider mb-5">CARA KERJA</h1>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
         class="w-8 h-8 mt-2 animate-bounce text-gray-700">
      <path stroke-linecap="round" stroke-linejoin="round" 
            d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
    </svg>
  </div>

  <!-- Grid Langkah -->
  <div class="grid md:grid-cols-2 gap-10 items-center">

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
        Wawancara bareng AI kami, seperti ngobrol dengan HR beneran!
      </p>
    </div>

    <!-- Langkah 3 -->
    <div>
      <p class="uppercase tracking-widest text-gray-500 mb-2">Langkah 3</p>
      <h2 class="text-2xl font-semibold mb-4">Dapat masukan langsung setelah wawancara</h2>
      <p class="text-gray-600">
        Dapatkan saran dan tips untuk wawancara yang lebih baik langsung setelah wawancara selesai!
      </p>
    </div>

    <div class="bg-gray-50 rounded-xl p-8 flex justify-center">
      <div class="bg-gray-100 rounded-xl overflow-hidden w-[575px] h-[329px]">
        <img src="../src/assets/img/Enyok.jpg" alt="contoh" class="w-full h-full object-cover">
      </div>
    </div>

  </div>
</section>


</body>

</html>