<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Pricing</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }

        .bg-half-gradient {
            background: linear-gradient(to bottom, #34658D 0%, #34658D 50%, #ffffff 50%, #ffffff 100%);
        }

        /* Responsive font sizes */
        h1 {
            font-size: clamp(1.875rem, 5vw, 3rem);
        }

        @media (max-width: 640px) {
            .cs-img {
                width: 120px;
                height: 140px;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            background-size: 1000px 100%;
            animation: shimmer 2s infinite;
        }
    </style>
</head>

<body class="bg-gray-50">
    <section class="bg-half-gradient relative overflow-hidden" id="premium">
        <div class="absolute -left-20 -top-20 w-64 h-64 bg-[#68BBFF] rounded-full opacity-50"></div>

        <!-- Navbar -->
        <header x-data="{ open: false }" class="text-white relative z-50">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <!-- Logo -->
                <a href="../public/index.php" class="text-3xl font-bold z-10">
                    Spark<span class="text-[#68BBFF]">.</span>
                </a>

                <div class="flex items-center justify-center space-x-7">
                    <!-- Menu Desktop -->
                    <nav class="hidden md:flex items-center space-x-10">
                        <a href="../public/index.php" class="hover:text-gray-300 transition">Ways of Working</a>
                        <a href="#premium" class="hover:text-gray-300 transition">Premium</a>
                    </nav>

                    <!-- Tombol Desktop -->
                    <a href="../public/views/login.php"
                        class="hidden md:inline-block bg-white text-black px-6 py-2 rounded-full font-medium hover:bg-gray-200 text-[15px]">
                        Get Started
                    </a>
                </div>

                <!-- Tombol Hamburger (Mobile) -->
                <button @click="open = !open"
                    class="md:hidden focus:outline-none z-20 p-2 rounded-md bg-white/10 hover:bg-white/20 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'hidden': open }" class="h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'hidden': !open }" class="h-7 w-7" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu Mobile -->
            <nav x-show="open" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 -translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4"
                class="md:hidden absolute top-0 left-0 w-full bg-[#34658D] text-white flex flex-col items-center space-y-6 py-24 shadow-lg z-10">
                <a href="index.php" @click="open = false" class="hover:text-gray-300 text-lg">Ways of Working</a>
                <a href="#premium" @click="open = false" class="hover:text-gray-300 text-lg">Premium</a>
                <a href="views/login.php" @click="open = false"
                    class="bg-white text-black px-8 py-2 rounded-full font-medium hover:bg-gray-200 text-lg transition">
                    Get Started
                </a>
            </nav>
        </header>


        <!-- Hero Text -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 text-center relative z-10 text-white">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-semibold">
                Choose the package that's right for you
            </h1>
        </div>

        <!-- Pricing Cards -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 relative z-10">

            <!-- Card 1 - Free -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col hover:shadow-md transition-shadow duration-300">
                <div class="p-4 sm:p-6 flex-1">
                    <h2 class="text-lg sm:text-xl font-semibold mb-2 text-gray-800">Free</h2>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">Rp 0</p>
                    <hr class="my-4 border-gray-200">
                    <h3 class="text-sm font-semibold mb-3 text-gray-700">Feature:</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✔</span>
                            <span class="text-gray-600">Interview preparation with AI</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✔</span>
                            <span class="text-gray-600">15 minute interview quota</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2 mt-0.5">✖</span>
                            <span class="text-gray-400">Coaching session</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2 mt-0.5">✖</span>
                            <span class="text-gray-400">Analysis of interview results</span>
                        </li>
                    </ul>
                </div>
                <div class="p-4 sm:p-6">
                    <button class="w-full border border-gray-300 rounded-full py-2.5 hover:bg-gray-50 transition text-sm sm:text-base font-medium text-gray-700">
                        Start Interview Practice
                    </button>
                </div>
            </div>

            <!-- Card 2 - Basic -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col hover:shadow-md transition-shadow duration-300">
                <div class="p-4 sm:p-6 flex-1">
                    <h2 class="text-lg sm:text-xl font-semibold mb-2 text-gray-800">Basic</h2>
                    <p class="text-sm text-gray-400 line-through">Rp 30.000</p>
                    <p class="text-xl sm:text-2xl font-bold text-gray-900">Rp 15.000</p>
                    <hr class="my-4 border-gray-200">
                    <h3 class="text-sm font-semibold mb-3 text-gray-700">Feature</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✔</span>
                            <span class="text-gray-600">Analysis of interview results</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✔</span>
                            <span class="text-gray-600">Interview preparation with AI</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2 mt-0.5">✔</span>
                            <span class="text-gray-600">15 minute interview quota, can be used for 1 interview</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2 mt-0.5">✖</span>
                            <span class="text-gray-400">Coaching session</span>
                        </li>
                    </ul>
                </div>
                <div class="p-4 sm:p-6">
                    <button class="w-full border border-gray-300 rounded-full py-2.5 hover:bg-gray-50 transition text-sm sm:text-base font-medium text-gray-700">
                        Start Interview Practice
                    </button>
                </div>
            </div>

            <!-- Card 3 - Essential (RECOMMENDED) -->
            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl shadow-lg border-2 border-blue-300 relative flex flex-col transform hover:scale-105 transition-all duration-300 float-animation">
                <!-- Shimmer effect overlay -->
                <div class="absolute inset-0 shimmer rounded-xl pointer-events-none"></div>

                <!-- Recommended Badge -->
                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-xs font-bold px-4 py-1.5 rounded-full shadow-lg flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    Recommended
                </div>

                <div class="p-4 sm:p-6 flex-1 relative z-10">
                    <h2 class="text-lg sm:text-xl font-bold mb-2 text-blue-900">Essential</h2>
                    <p class="text-sm text-gray-500 line-through">Rp 60.000</p>
                    <p class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">
                        Rp 45.000
                    </p>
                    <div class="inline-block mt-1 bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-1 rounded-full">
                        Save 25%
                    </div>
                    <hr class="my-4 border-blue-200">
                    <h3 class="text-sm font-semibold mb-3 text-blue-900">Feature</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 mt-0.5 font-bold">✔</span>
                            <span class="text-gray-700 font-medium">Analysis of interview results</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 mt-0.5 font-bold">✔</span>
                            <span class="text-gray-700 font-medium">Interview preparation with AI</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2 mt-0.5 font-bold">✔</span>
                            <span class="text-gray-700 font-medium">Interview quota 60 minutes, can be used for 1–4 interviews</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2 mt-0.5">✖</span>
                            <span class="text-gray-500">Coaching session</span>
                        </li>
                    </ul>
                </div>
                <div class="p-4 sm:p-6 relative z-10">
                    <button class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white rounded-full py-2.5 hover:from-blue-700 hover:to-cyan-700 transition-all shadow-md hover:shadow-lg text-sm sm:text-base font-semibold">
                        Start Interview Practice
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Career Starters Pack -->
    <section class="max-w-4xl mx-auto px-4 sm:px-6 pb-12 sm:pb-20 pt-7">
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 flex flex-col md:flex-row hover:shadow-md transition-shadow duration-300">
            <div class="p-4 sm:p-6 flex-1">
                <div class="flex items-center gap-2 mb-2">
                    <h2 class="text-lg sm:text-xl font-semibold text-gray-800">Career Starters Pack</h2>
                    <span class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">Best Value</span>
                </div>
                <p class="text-sm text-gray-400 line-through">Rp 240.000</p>
                <p class="text-xl sm:text-2xl font-bold text-green-600">Rp 200.000</p>
                <div class="inline-block mt-1 bg-green-100 text-green-700 text-xs font-semibold px-2 py-1 rounded-full">
                    Save 17%
                </div>
                <hr class="my-4 border-gray-200">
                <h3 class="text-sm font-semibold mb-3 text-gray-700">Feature</h3>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-0.5">✔</span>
                        <span class="text-gray-600">Interview quota 120 minutes, can be used for 1–8 interviews</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-0.5">✔</span>
                        <span class="text-gray-600">Coaching session Fresh Graduate 1 session (60 minutes)</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-0.5">✔</span>
                        <span class="text-gray-600">Analysis of interview results</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-green-500 mr-2 mt-0.5">✔</span>
                        <span class="text-gray-600">Interview preparation with AI</span>
                    </li>
                </ul>
            </div>
            <div class="p-4 sm:p-6 md:w-60 flex items-center">
                <button class="w-full border-2 border-green-500 text-green-600 rounded-full py-2.5 hover:bg-green-50 transition text-sm sm:text-base font-semibold">
                    Start Interview Practice
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="relative">
        <div class="bg-[#34658D] py-12 sm:py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 items-center gap-6 sm:gap-10">
                <div class="text-white space-y-4 sm:space-y-5">
                    <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold">
                        Sign up & try Spark for free now!
                    </h2>
                    <p class="text-lg sm:text-xl font-medium">
                        15.000++ <br>
                        Have felt the benefits of Spark.
                    </p>
                    <a href="../public/views/login.php"
                        class="inline-block bg-[#68BBFF] text-white px-5 sm:px-6 py-2 rounded-lg font-medium hover:bg-[#57a5e6] transition text-sm sm:text-base">
                        Try it Free
                    </a>
                </div>
                <div class="flex justify-center md:justify-end hidden md:block">
                    <img src="../src/assets/img/foto2.png" alt="Gambar Orang Laptop" class="rounded-lg max-w-full h-auto">
                </div>
            </div>
        </div>

        <!-- Kotak Ungu -->
        <div class="relative z-10 -mt-12">
            <div class="max-w-4xl mx-auto bg-[#3D3B91] rounded-xl shadow-lg p-4 sm:p-6 md:p-10 flex flex-col md:flex-row items-center gap-4 sm:gap-6 relative">
                <div class="absolute -top-12 sm:-top-16 left-4 sm:left-6 w-32 sm:w-44 h-40 sm:h-56 overflow-hidden rounded-lg cs-img hidden md:block">
                    <img src="../src/assets/img/cs.png" alt="Customer Service" class="object-cover w-full h-full">
                </div>
                <div class="w-32 sm:w-44"></div>
                <div class="flex-1 text-white space-y-4">
                    <h3 class="text-lg sm:text-xl font-semibold">Still in doubt?</h3>
                    <p class="text-sm sm:text-base">
                        Come on, ask directly via WhatsApp or see examples of our analysis results for more details!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#" class="bg-white text-black px-4 sm:px-5 py-2 rounded-lg text-sm font-medium hover:bg-gray-200 transition">
                            View Interview Analysis
                        </a>
                        <a href="#" class="bg-[#00A884] text-white px-4 sm:px-5 py-2 rounded-lg text-sm font-medium hover:bg-[#00916f] transition">
                            Contact us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-12 px-4 mt-12 sm:mt-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Spark<span class="text-teal-500">.</span></h4>
                </div>
                <div>
                    <h5 class="font-semibold text-gray-900 mb-4">Headquarters</h5>
                    <div class="space-y-3 text-sm text-gray-600">
                        <p>Just do it</p>
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
                <div>
                    <h5 class="font-semibold text-gray-900 mb-4">Company</h5>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-teal-500 transition-colors">Terms and Conditions</a></li>
                        <li><a href="#" class="hover:text-teal-500 transition-colors">Privacy Data</a></li>
                        <li><a href="#" class="hover:text-teal-500 transition-colors">FAQ</a></li>
                    </ul>
                </div>
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
            <div class="mt-12 pt-8 border-t border-gray-200 text-center text-sm text-gray-600">
                <p>© 2024 Spark. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>

</html>