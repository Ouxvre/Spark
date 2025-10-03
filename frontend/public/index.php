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
                        <a href="#premium" class="hover:text-gray-300">Premium</a>
                    </nav>

                    <!-- Tombol -->
                    <a href="../public/views/login.php"
                        class="hidden md:inline-block bg-white text-black px-7 py-2 rounded-full font-medium hover:bg-gray-200 text-[15px]">
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
                <div class="text-white text-center lg:text-left space-y-6">
                    <h1 class="text-3xl lg:text-5xl font-bold leading-relaxed">
                        Wawancara kerja itu susah bin ajaib, latihan di Spark. sekarang!
                    </h1>


                    <p class="text-lg text-blue-100">
                        Latihan wawancara bareng AI di mana aja, kapan aja, tawaran kerja di depan mata!
                    </p>

                    <button
                        class="bg-teal-400 hover:bg-teal-500 text-white px-8 py-3 rounded-lg font-semibold text-lg transition shadow-lg">
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

    <section class="relative py-20 bg-[#F7F7FA]">

        <!-- FAQ Section -->
        <section class="py-14 px-4 md:py-16 lg:py-20">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-12 text-gray-900">
                    Pertanyaan yang sering Diajukan
                </h2>

                <!-- FAQ Items -->
                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all duration-300">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200">
                            <span class="text-sm md:text-base text-gray-700 font-medium">Apakah latihannya bisa paket semua tahapan?</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-collapse class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Ya, kami menyediakan paket lengkap yang mencakup semua tahapan latihan dari dasar hingga tingkat lanjut. Paket ini dirancang secara sistematis untuk memastikan Anda mendapatkan hasil maksimal.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all duration-300">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200">
                            <span class="text-sm md:text-base text-gray-700 font-medium">Apakah bisa menggunakan HP untuk latihan?</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-collapse class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Tentu saja! Platform kami fully responsive dan dapat diakses melalui HP, tablet, maupun komputer. Anda bisa berlatih kapan saja dan di mana saja dengan nyaman.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div x-data="{ open: false }" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden transition-all duration-300">
                        <button @click="open = !open" class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200">
                            <span class="text-sm md:text-base text-gray-700 font-medium">Apakah gratis untuk latihan?</span>
                            <svg :class="{ 'rotate-180': open }" class="w-5 h-5 text-gray-500 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-cloak x-collapse class="px-6 pb-4">
                            <p class="text-sm md:text-base text-gray-600 leading-relaxed">
                                Kami menyediakan beberapa latihan gratis untuk dicoba. Untuk akses penuh ke semua fitur dan materi latihan, tersedia paket berlangganan dengan harga yang terjangkau.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-12 px-4">
            <div class="max-w-3xl mx-auto">
                <div class="bg-gradient-to-r from-indigo-700 to-indigo-800 rounded-2xl p-8 md:p-12 text-center shadow-xl">
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-6">
                        Besok ada wawancara kerja?
                    </h3>
                    <button class="bg-teal-400 hover:bg-teal-500 text-indigo-900 font-semibold px-8 py-3 rounded-lg transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                        Yuk Latihan Sekarang!
                    </button>
                </div>
            </div>
        </section>

        <!-- Powered By Section -->
        <section class="py-12 px-4 bg-white">
            <div class="max-w-5xl mx-auto">
                <h3 class="text-2xl md:text-3xl font-bold text-center mb-10 md:mb-16 text-gray-900">
                    Powered By
                </h3>
                <div class="flex flex-wrap items-center justify-center gap-8 md:gap-16 lg:gap-20">
                    <!-- 11ElevenLabs Grants -->
                    <div class="flex items-center opacity-80 hover:opacity-100 transition-opacity duration-200">
                        <span class="text-xl md:text-2xl font-bold text-gray-900">11ElevenLabs</span>
                        <span class="text-xl md:text-2xl font-normal text-gray-700">Grants</span>
                    </div>

                    <!-- OpenAI -->
                    <div class="flex items-center space-x-2 opacity-80 hover:opacity-100 transition-opacity duration-200">
                        <svg class="w-8 h-8 md:w-10 md:h-10" viewBox="0 0 24 24" fill="none">
                            <path d="M22.2819 9.8211C23.5487 11.5168 23.5487 13.8821 22.2819 15.5779C21.0151 17.2736 18.8321 17.9463 16.7417 17.2656L16.7419 17.2657C16.6844 17.2476 16.627 17.2291 16.5697 17.2104C15.6271 16.9028 14.8034 16.3141 14.2044 15.5296C13.6054 14.7451 13.2568 13.7987 13.2015 12.8174C13.1462 11.8361 13.3865 10.8606 13.8936 10.0139C14.4007 9.16721 15.1511 8.48755 16.0518 8.06157C16.9525 7.6356 17.9627 7.48396 18.9515 7.62555C19.9402 7.76714 20.8639 8.19553 21.5991 8.85406C22.3343 9.51258 22.8485 10.3722 23.0747 11.3222C23.3009 12.2722 23.2299 13.2686 22.8702 14.1796L22.2819 9.8211Z" fill="#10A37F" />
                            <path d="M12 2C10.0222 2 8.08879 2.58649 6.4443 3.6853C4.79981 4.78412 3.51809 6.3459 2.76121 8.17317C2.00433 10.0004 1.8063 12.0111 2.19215 13.9509C2.578 15.8907 3.53041 17.6725 4.92893 19.0711C6.32746 20.4696 8.10929 21.422 10.0491 21.8079C11.9889 22.1937 13.9996 21.9957 15.8268 21.2388C17.6541 20.4819 19.2159 19.2002 20.3147 17.5557C21.4135 15.9112 22 13.9778 22 12C22 10.6868 21.7413 9.38642 21.2388 8.17317C20.7362 6.95991 19.9997 5.85752 19.0711 4.92893C18.1425 4.00035 17.0401 3.26375 15.8268 2.7612C14.6136 2.25866 13.3132 2 12 2V2Z" fill="#10A37F" />
                        </svg>
                        <span class="text-xl md:text-2xl font-bold text-gray-900">OpenAI</span>
                    </div>

                    <!-- Google -->
                    <div class="opacity-80 hover:opacity-100 transition-opacity duration-200">
                        <svg class="h-8 md:h-10" viewBox="0 0 120 40" fill="none">
                            <text x="0" y="30" font-family="Arial, sans-serif" font-size="32" font-weight="700">
                                <tspan fill="#4285F4">G</tspan>
                                <tspan fill="#EA4335">o</tspan>
                                <tspan fill="#FBBC05">o</tspan>
                                <tspan fill="#4285F4">g</tspan>
                                <tspan fill="#34A853">l</tspan>
                                <tspan fill="#EA4335">e</tspan>
                            </text>
                        </svg>
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
</body>

</html>