<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Pricing</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        /* Gradient custom: biru sampai 50%, sisanya putih */
        .bg-half-gradient {
            background: linear-gradient(to bottom, #34658D 0%, #34658D 50%, #ffffff 50%, #ffffff 100%);
        }
    </style>
</head>

<body class="bg-gray-50">

    <section class="bg-half-gradient relative overflow-hidden">
        <!-- Dekorasi Lingkaran -->
        <div class="absolute -left-20 -top-20 w-64 h-64 bg-[#68BBFF] rounded-full opacity-50"></div>

        <!-- Navbar -->
        <header class="text-white relative z-10">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <!-- Logo -->
                <div class="text-4xl font-bold">
                    Spark<span class="text-[#68BBFF]">.</span>
                </div>

                <!-- Menu + Tombol -->
                <div class="flex items-center space-x-20">
                    <nav class="hidden md:flex items-center space-x-10">
                        <a href="../public/index.php" class="hover:text-gray-300">Cara Kerja</a>
                        <a href="../public/premium.php" class="hover:text-gray-300">Premium</a>
                    </nav>
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

        <!-- Hero Text -->
        <div class="max-w-7xl mx-auto px-6 py-20 text-center relative z-10 text-white">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold">
                Pilih paket yang paling tepat untukmu
            </h1>
        </div>

        <!-- ================= PRICING CARDS ================= -->
        <div class="max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10">
            <!-- Card 1 - Free -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col">
                <div class="p-6 flex-1">
                    <h2 class="text-xl font-semibold mb-2">Free</h2>
                    <p class="text-2xl font-bold">Rp 0</p>
                    <hr class="my-4">

                    <h3 class="text-sm font-semibold mb-3">Fitur:</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Persiapan wawancara dengan AI
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Quota wawancara 15 menit
                        </li>
                        <li class="flex items-center">
                            <span class="text-red-500 mr-2">✖</span> Coaching session
                        </li>
                        <li class="flex items-center">
                            <span class="text-red-500 mr-2">✖</span> Analisis hasil wawancara
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <button
                        class="w-full border border-gray-300 rounded-full py-2 hover:bg-gray-100 transition">
                        Mulai Latihan Wawancara
                    </button>
                </div>
            </div>

            <!-- Card 2 - Basic -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col">
                <div class="p-6 flex-1">
                    <h2 class="text-xl font-semibold mb-2">Basic</h2>
                    <p class="text-sm text-gray-500 line-through">Rp 30.000</p>
                    <p class="text-2xl font-bold">Rp 15.000</p>
                    <hr class="my-4">

                    <h3 class="text-sm font-semibold mb-3">Fitur:</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Analisis hasil wawancara
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Persiapan wawancara dengan AI
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Quota wawancara 15 menit, bisa untuk 1x wawancara
                        </li>
                        <li class="flex items-center">
                            <span class="text-red-500 mr-2">✖</span> Coaching session
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <button
                        class="w-full border border-gray-300 rounded-full py-2 hover:bg-gray-100 transition">
                        Mulai Latihan Wawancara
                    </button>
                </div>
            </div>

            <!-- Card 3 - Essential -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 relative flex flex-col">
                <div class="absolute -top-3 right-4 bg-gradient-to-r from-blue-500 to-cyan-400 text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md">
                    Recommended
                </div>

                <div class="p-6 flex-1">
                    <h2 class="text-xl font-semibold mb-2">Essential</h2>
                    <p class="text-sm text-gray-500 line-through">Rp 60.000</p>
                    <p class="text-2xl font-bold">Rp 45.000</p>
                    <hr class="my-4">

                    <h3 class="text-sm font-semibold mb-3">Fitur:</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Analisis hasil wawancara
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Persiapan wawancara dengan AI
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-500 mr-2">✔</span> Quota wawancara 60 menit, bisa untuk 1–4x wawancara
                        </li>
                        <li class="flex items-center">
                            <span class="text-red-500 mr-2">✖</span> Coaching session
                        </li>
                    </ul>
                </div>
                <div class="p-6">
                    <button
                        class="w-full border border-gray-300 rounded-full py-2 hover:bg-gray-100 transition">
                        Mulai Latihan Wawancara
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CAREER STARTER PACK ================= -->
    <section class="max-w-4xl mx-auto px-6 pb-20">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col md:flex-row">
            <div class="p-6 flex-1">
                <h2 class="text-xl font-semibold mb-2">Career Starters Pack</h2>
                <p class="text-sm text-gray-500 line-through">Rp 240.000</p>
                <p class="text-2xl font-bold text-green-600">Rp 200.000</p>
                <hr class="my-4">

                <h3 class="text-sm font-semibold mb-3">Fitur:</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2">✔</span> Quota wawancara 120 menit, bisa untuk 1–8x wawancara
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2">✔</span> Coaching session Fresh Graduate 1 sesi (60 menit)
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2">✔</span> Analisis hasil wawancara
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-500 mr-2">✔</span> Persiapan wawancara dengan AI
                    </li>
                </ul>
            </div>
            <div class="p-6 md:w-60 flex items-center">
                <button
                    class="w-full border border-gray-300 rounded-full py-2 hover:bg-gray-100 transition">
                    Mulai Latihan Wawancara
                </button>
            </div>
        </div>
    </section>

    <!-- ================== CTA SECTION ================== -->
    <section class="relative">
        <!-- Background Biru -->
        <div class="bg-[#34658D] py-16">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 items-center gap-10">
                <!-- Text -->
                <div class="text-white space-y-5">
                    <h2 class="text-2xl md:text-3xl font-semibold">
                        Daftar & coba gratis Spark. sekarang!
                    </h2>
                    <p class="text-xl font-medium">
                        15.000++ <br>Telah merasakan manfaat Spark.
                    </p>
                    <a href="../public/views/login.php"
                        class="inline-block bg-[#68BBFF] text-white px-6 py-2 rounded-lg font-medium hover:bg-[#57a5e6] transition">
                        Coba Gratis
                    </a>
                </div>

                <!-- Gambar Orang Laptop -->
                <div class="flex justify-center md:justify-end">
                    <img src="../src/assets/img/foto2.png"
                        alt="Gambar Orang Laptop"
                        class="rounded-lg">
                </div>
            </div>
        </div>

        <!-- ================== Kotak Ungu ================== -->
<div class="relative z-10 -mt-12">
    <div class="max-w-4xl mx-auto bg-[#3D3B91] rounded-xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row items-center gap-6 relative">
        
        <!-- Gambar Customer Service -->
        <div class="absolute -top-16 left-6 w-44 h-56 overflow-hidden rounded-lg">
            <img src="../src/assets/img/cs.png"
                 alt="Customer Service"
                 class="object-cover w-full h-full">
        </div>

        <!-- Spasi kosong agar teks tidak ketimpa gambar -->
        <div class="w-44"></div>

        <!-- Teks & Tombol -->
        <div class="flex-1 text-white space-y-4">
            <h3 class="text-lg font-semibold">Masih ragu?</h3>
            <p class="text-sm md:text-base">
                Yuk, tanyakan langsung via WhatsApp atau lihat contoh hasil analisis kami untuk lebih jelasnya!
            </p>
            <div class="flex gap-4">
                <a href="#"
                   class="bg-white text-black px-5 py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition">
                    Lihat Analisis Wawancara
                </a>
                <a href="#"
                   class="bg-[#00A884] text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-[#00916f] transition">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>


    </section>


    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12 px-4 mt-20">
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