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

    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


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
            /* text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.4); */

        }

        [x-cloak] {
            display: none !important;
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
                <div class="flex items-center space-x-20">
                    <!-- Menu Desktop -->
                    <nav class="hidden md:flex items-center space-x-10">
                        <a href="#cara-kerja" class="hover:text-gray-300">Cara Kerja</a>
                        <a href="../public/premium.php" class="hover:text-gray-300">Premium</a>
                    </nav>

                    <!-- Tombol -->
                    <a href="../public/views/login.php"
                        class="hidden text-shadow-none md:inline-block bg-white text-black px-7 py-2 rounded-full font-medium hover:bg-gray-200 text-[15px]">
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
        <div class="relative z-10 container mx-auto px-8 pt-20 pb-32 ">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white text-center lg:text-left space-y-6">
                    <h1 class="text-3xl lg:text-5xl font-bold leading-relaxed">
                        Wawancara kerja itu susah bin ajaib, latihan di Spark. sekarang!
                    </h1>

                    <p class="text-lg text-blue-100">
                        Latihan wawancara bareng AI di mana aja, kapan aja, tawaran kerja di depan mata!
                    </p>

                    <p class="mb-8"></p>

                    <a href="../public/views/login.php"
                        class="bg-teal-400 hover:bg-teal-500 text-white px-8 py-3 rounded-lg font-semibold text-lg transition shadow-lg">
                        Coba Sekarang!
                    </a>
                </div>


                <!-- Right Content - Image -->
                <div class="relative hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=600&fit=crop"
                        alt="Woman with laptop"
                        class="w-full max-w-md mx-auto rounded-lg shadow-2xl transform hover:scale-105 transition duration-300">

                    <!-- Floating Card -->
                    <div
                        class="absolute bottom-8 right-0 bg-white rounded-lg shadow-xl p-4 max-w-xs transform hover:scale-105 transition duration-300">
                        <div class="flex items-start gap-3">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=50&h=50&fit=crop"
                                alt="Linda"
                                class="w-12 h-12 rounded-full">
                            <div>
                                <div class="font-semibold text-gray-800">Linda</div>
                                <div class="text-sm text-gray-600 text-shadow-none">
                                    Background pendidikan saya akuntasi, saya ingin...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- CARA KERJA -->
    <section class="max-w-6xl mx-auto px-4 sm:px-6 py-16" id="cara-kerja">

        <!-- Title + Arrow -->
        <div class="flex flex-col items-center justify-center mb-12 text-center">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-wide mb-4">
                CARA KERJA
            </h1>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 sm:w-8 sm:h-8 mt-2 animate-bounce text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
            </svg>
        </div>

        <!-- Grid Langkah -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center [text-shadow:1px_1px_2px_rgba(0,0,0,0.25)]">

            <!-- Langkah 1 -->
            <div class="order-1">
                <p class="uppercase tracking-widest text-gray-500 text-xs sm:text-sm mb-2">
                    Langkah 1
                </p>
                <h2 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4">
                    Isi posisi yang ingin dilamar
                </h2>
                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    Ketik posisi dan nama perusahaan yang ingin dilamar, AI akan bentuk latihan interview yang sesuai
                </p>
            </div>

            <div class="order-2">
                <div class="bg-gray-50 rounded-xl p-4 sm:p-8 flex justify-center">
                    <div class="bg-gray-100 rounded-xl overflow-hidden w-full max-w-[575px] shadow-xl">
                        <img src="../src/assets/img/langkah1.png" alt="contoh"
                            class="w-full h-auto object-contain">
                    </div>
                </div>
            </div>


            <!-- Langkah 2 -->
            <div class="order-4 md:order-3">
                <div class="bg-gray-50 rounded-xl p-4 sm:p-8 flex justify-center">
                    <div class="bg-gray-100 rounded-xl overflow-hidden w-full max-w-[575px] shadow-xl">
                        <img src="../src/assets/img/langkah2.png" alt="contoh" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <div class="order-3 md:order-4">
                <p class="uppercase tracking-widest text-gray-500 text-xs sm:text-sm mb-2">
                    Langkah 2
                </p>
                <h2 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4">
                    Wawancara langsung pakai suara
                </h2>
                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    Wawancara bareng AI kami, seperti ngobrol dengan HR beneran!
                </p>
            </div>

            <!-- Langkah 3 -->
            <div class="order-5">
                <p class="uppercase tracking-widest text-gray-500 text-xs sm:text-sm mb-2">
                    Langkah 3
                </p>
                <h2 class="text-xl sm:text-2xl font-semibold mb-3 sm:mb-4">
                    Dapat masukan langsung setelah wawancara
                </h2>
                <p class="text-gray-600 text-sm sm:text-base leading-relaxed">
                    Dapatkan saran dan tips untuk wawancara yang lebih baik langsung setelah wawancara selesai!
                </p>
            </div>

            <div class="order-6">
                <div class="bg-gray-50 rounded-xl p-4 sm:p-8 flex justify-center">
                    <div class="bg-gray-100 rounded-xl overflow-hidden w-full max-w-[575px] shadow-xl">
                        <img src="../src/assets/img/langkah3.png" alt="contoh" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="relative bg-[#F7F7FA]">

        <!-- FAQ Section -->
        <section class="py-20 px-4">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-10 text-gray-900">
                    Pertanyaan yang Sering Diajukan
                </h2>

                <!-- FAQ Items -->
                <div class="space-y-4">

                    <!-- FAQ Item -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg text-gray-700 font-medium">
                                Apakah latihannya bisa pakai semua bahasa?
                            </span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Ya, latihan kami mendukung berbagai bahasa untuk membantu Anda berlatih sesuai kebutuhan.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg text-gray-700 font-medium">
                                Apakah bisa menggunakan HP untuk latihan?
                            </span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Tentu saja! Platform kami responsif dan dapat diakses lewat HP, tablet, maupun komputer.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg text-gray-700 font-medium">
                                Apakah gratis untuk latihan?
                            </span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Kami menyediakan beberapa latihan gratis. Untuk fitur lengkap tersedia paket berlangganan terjangkau.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-12 px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-indigo-800 rounded-xl p-8 md:p-12 text-center shadow-lg">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-6">
                        Besok ada wawancara kerja?
                    </h3>
                    <a href="../public/views/login.php" class="bg-teal-400 hover:bg-teal-500 text-indigo-900 font-semibold px-8 py-3 rounded-lg transition-all duration-200 shadow-md hover:shadow-xl hover:-translate-y-0.5">
                        Yuk Latihan Sekarang!
                    </a>
                </div>
            </div>
        </section>

        <!-- Powered By -->
        <section class="py-12 px-4 bg-white">
            <div class="max-w-5xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-center mb-12 text-gray-900">
                    Powered By
                </h3>
                <div class="flex flex-wrap items-center justify-center gap-12 md:gap-20">

                    <!-- 11ElevenLabs Grants -->
                    <div class="flex items-center opacity-80 hover:opacity-100 transition-opacity duration-200">
                        <img src="https://storage.googleapis.com/eleven-public-cdn/images/elevenlabs-grants-logo.png" alt="Eleven Labs logo" width="200">
                    </div>

                    <!-- OpenAI -->
                    <div class="flex items-center space-x-2 opacity-80 hover:opacity-100 transition-opacity duration-200">
                        <img src="data:image/svg+xml,%3csvg%20viewBox='0%200%201180%20320'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='m367.44%20153.84c0%2052.32%2033.6%2088.8%2080.16%2088.8s80.16-36.48%2080.16-88.8-33.6-88.8-80.16-88.8-80.16%2036.48-80.16%2088.8zm129.6%200c0%2037.44-20.4%2061.68-49.44%2061.68s-49.44-24.24-49.44-61.68%2020.4-61.68%2049.44-61.68%2049.44%2024.24%2049.44%2061.68z'/%3e%3cpath%20d='m614.27%20242.64c35.28%200%2055.44-29.76%2055.44-65.52s-20.16-65.52-55.44-65.52c-16.32%200-28.32%206.48-36.24%2015.84v-13.44h-28.8v169.2h28.8v-56.4c7.92%209.36%2019.92%2015.84%2036.24%2015.84zm-36.96-69.12c0-23.76%2013.44-36.72%2031.2-36.72%2020.88%200%2032.16%2016.32%2032.16%2040.32s-11.28%2040.32-32.16%2040.32c-17.76%200-31.2-13.2-31.2-36.48z'/%3e%3cpath%20d='m747.65%20242.64c25.2%200%2045.12-13.2%2054-35.28l-24.72-9.36c-3.84%2012.96-15.12%2020.16-29.28%2020.16-18.48%200-31.44-13.2-33.6-34.8h88.32v-9.6c0-34.56-19.44-62.16-55.92-62.16s-60%2028.56-60%2065.52c0%2038.88%2025.2%2065.52%2061.2%2065.52zm-1.44-106.8c18.24%200%2026.88%2012%2027.12%2025.92h-57.84c4.32-17.04%2015.84-25.92%2030.72-25.92z'/%3e%3cpath%20d='m823.98%20240h28.8v-73.92c0-18%2013.2-27.6%2026.16-27.6%2015.84%200%2022.08%2011.28%2022.08%2026.88v74.64h28.8v-83.04c0-27.12-15.84-45.36-42.24-45.36-16.32%200-27.6%207.44-34.8%2015.84v-13.44h-28.8z'/%3e%3cpath%20d='m1014.17%2067.68-65.28%20172.32h30.48l14.64-39.36h74.4l14.88%2039.36h30.96l-65.28-172.32zm16.8%2034.08%2027.36%2072h-54.24z'/%3e%3cpath%20d='m1163.69%2068.18h-30.72v172.32h30.72z'/%3e%3cpath%20d='m297.06%20130.97c7.26-21.79%204.76-45.66-6.85-65.48-17.46-30.4-52.56-46.04-86.84-38.68-15.25-17.18-37.16-26.95-60.13-26.81-35.04-.08-66.13%2022.48-76.91%2055.82-22.51%204.61-41.94%2018.7-53.31%2038.67-17.59%2030.32-13.58%2068.54%209.92%2094.54-7.26%2021.79-4.76%2045.66%206.85%2065.48%2017.46%2030.4%2052.56%2046.04%2086.84%2038.68%2015.24%2017.18%2037.16%2026.95%2060.13%2026.8%2035.06.09%2066.16-22.49%2076.94-55.86%2022.51-4.61%2041.94-18.7%2053.31-38.67%2017.57-30.32%2013.55-68.51-9.94-94.51zm-120.28%20168.11c-14.03.02-27.62-4.89-38.39-13.88.49-.26%201.34-.73%201.89-1.07l63.72-36.8c3.26-1.85%205.26-5.32%205.24-9.07v-89.83l26.93%2015.55c.29.14.48.42.52.74v74.39c-.04%2033.08-26.83%2059.9-59.91%2059.97zm-128.84-55.03c-7.03-12.14-9.56-26.37-7.15-40.18.47.28%201.3.79%201.89%201.13l63.72%2036.8c3.23%201.89%207.23%201.89%2010.47%200l77.79-44.92v31.1c.02.32-.13.63-.38.83l-64.41%2037.19c-28.69%2016.52-65.33%206.7-81.92-21.95zm-16.77-139.09c7-12.16%2018.05-21.46%2031.21-26.29%200%20.55-.03%201.52-.03%202.2v73.61c-.02%203.74%201.98%207.21%205.23%209.06l77.79%2044.91-26.93%2015.55c-.27.18-.61.21-.91.08l-64.42-37.22c-28.63-16.58-38.45-53.21-21.95-81.89zm221.26%2051.49-77.79-44.92%2026.93-15.54c.27-.18.61-.21.91-.08l64.42%2037.19c28.68%2016.57%2038.51%2053.26%2021.94%2081.94-7.01%2012.14-18.05%2021.44-31.2%2026.28v-75.81c.03-3.74-1.96-7.2-5.2-9.06zm26.8-40.34c-.47-.29-1.3-.79-1.89-1.13l-63.72-36.8c-3.23-1.89-7.23-1.89-10.47%200l-77.79%2044.92v-31.1c-.02-.32.13-.63.38-.83l64.41-37.16c28.69-16.55%2065.37-6.7%2081.91%2022%206.99%2012.12%209.52%2026.31%207.15%2040.1zm-168.51%2055.43-26.94-15.55c-.29-.14-.48-.42-.52-.74v-74.39c.02-33.12%2026.89-59.96%2060.01-59.94%2014.01%200%2027.57%204.92%2038.34%2013.88-.49.26-1.33.73-1.89%201.07l-63.72%2036.8c-3.26%201.85-5.26%205.31-5.24%209.06l-.04%2089.79zm14.63-31.54%2034.65-20.01%2034.65%2020v40.01l-34.65%2020-34.65-20z'/%3e%3c/svg%3e" alt="Open AI logo" width="200">
                    </div>

                    <!-- Google -->
                    <div class="opacity-8  0 hover:opacity-100 transition-opacity duration-200">
                        <img src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='UTF-8'%20standalone='no'?%3e%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20272%2092'%20width='272'%20height='92'%3e%3cpath%20fill='%23EA4335'%20d='M115.75%2047.18c0%2012.77-9.99%2022.18-22.25%2022.18s-22.25-9.41-22.25-22.18C71.25%2034.32%2081.24%2025%2093.5%2025s22.25%209.32%2022.25%2022.18zm-9.74%200c0-7.98-5.79-13.44-12.51-13.44S80.99%2039.2%2080.99%2047.18c0%207.9%205.79%2013.44%2012.51%2013.44s12.51-5.55%2012.51-13.44z'/%3e%3cpath%20fill='%23FBBC05'%20d='M163.75%2047.18c0%2012.77-9.99%2022.18-22.25%2022.18s-22.25-9.41-22.25-22.18c0-12.85%209.99-22.18%2022.25-22.18s22.25%209.32%2022.25%2022.18zm-9.74%200c0-7.98-5.79-13.44-12.51-13.44s-12.51%205.46-12.51%2013.44c0%207.9%205.79%2013.44%2012.51%2013.44s12.51-5.55%2012.51-13.44z'/%3e%3cpath%20fill='%234285F4'%20d='M209.75%2026.34v39.82c0%2016.38-9.66%2023.07-21.08%2023.07-10.75%200-17.22-7.19-19.66-13.07l8.48-3.53c1.51%203.61%205.21%207.87%2011.17%207.87%207.31%200%2011.84-4.51%2011.84-13v-3.19h-.34c-2.18%202.69-6.38%205.04-11.68%205.04-11.09%200-21.25-9.66-21.25-22.09%200-12.52%2010.16-22.26%2021.25-22.26%205.29%200%209.49%202.35%2011.68%204.96h.34v-3.61h9.25zm-8.56%2020.92c0-7.81-5.21-13.52-11.84-13.52-6.72%200-12.35%205.71-12.35%2013.52%200%207.73%205.63%2013.36%2012.35%2013.36%206.63%200%2011.84-5.63%2011.84-13.36z'/%3e%3cpath%20fill='%2334A853'%20d='M225%203v65h-9.5V3h9.5z'/%3e%3cpath%20fill='%23EA4335'%20d='M262.02%2054.48l7.56%205.04c-2.44%203.61-8.32%209.83-18.48%209.83-12.6%200-22.01-9.74-22.01-22.18%200-13.19%209.49-22.18%2020.92-22.18%2011.51%200%2017.14%209.16%2018.98%2014.11l1.01%202.52-29.65%2012.28c2.27%204.45%205.8%206.72%2010.75%206.72%204.96%200%208.4-2.44%2010.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95%200-11.84%204.37-11.59%2012.93z'/%3e%3cpath%20fill='%234285F4'%20d='M35.29%2041.41V32H67c.31%201.64.47%203.58.47%205.68%200%207.06-1.93%2015.79-8.15%2022.01-6.05%206.3-13.78%209.66-24.02%209.66C16.32%2069.35.36%2053.89.36%2034.91.36%2015.93%2016.32.47%2035.3.47c10.5%200%2017.98%204.12%2023.6%209.49l-6.64%206.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86%200-24.7%2011.17-24.7%2025.03%200%2013.86%2010.84%2025.03%2024.7%2025.03%208.99%200%2014.11-3.61%2017.39-6.89%202.66-2.66%204.41-6.46%205.1-11.65l-22.49.01z'/%3e%3c/svg%3e" alt="">
                    </div>

                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 py-12 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
                    <!-- Brand -->
                    <div>
                        <h4 class="text-4xl font-bold text-gray-900 mb-4">Spark<span class="text-teal-500">.</span></h4>
                    </div>

                    <!-- Headquarters -->
                    <div>
                        <h5 class="font-semibold text-gray-900 mb-4">Headquarters</h5>
                        <div class="space-y-3 text-sm text-gray-600">
                            <p>Jalanin aja</p>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span>+62 8888-xxxx-xxxx</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span>spark@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <!-- Company -->
                    <div>
                        <h5 class="font-semibold text-gray-900 mb-4">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-teal-500 transition-colors">Syarat dan Ketentuan</a></li>
                            <li><a href="#" class="hover:text-teal-500 transition-colors">Data Privasi</a></li>
                            <li><a href="#" class="hover:text-teal-500 transition-colors">FAQ</a></li>
                        </ul>
                    </div>

                    <!-- Follow Us -->
                    <div>
                        <h5 class="font-semibold text-gray-900 mb-4">Follow Us</h5>
                        <div class="flex space-x-3">
                            <a href="#" class="w-9 h-9 bg-gray-100 rounded-full flex items-center justify-center hover:bg-teal-100 transition-colors">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#" class="w-9 h-9 bg-gray-100 rounded-full flex items-center justify-center hover:bg-teal-100 transition-colors">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#" class="w-9 h-9 bg-gray-100 rounded-full flex items-center justify-center hover:bg-teal-100 transition-colors">
                                <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="mt-12 pt-8 border-t border-gray-200 text-center text-sm text-gray-600">
                    <p>© 2024 Spark. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </section>

</body>

</html>