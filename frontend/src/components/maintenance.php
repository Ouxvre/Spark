<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>We'll Be Back Soon - Sleeknote</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes spin-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
      animation: spin-slow 8s linear infinite;
    }
  </style>
</head>
<body class="bg-white text-gray-700 flex items-center justify-center min-h-screen px-4">

  <div class="flex flex-col items-center text-center max-w-md">

    <!-- Logo -->
    <div class="flex items-center space-x-2 mb-8">
      <div class="bg-indigo-600 rounded-md p-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M14 10l4.553 2.276A1 1 0 0119 13.118V20a1 1 0 01-1 1h-3v-5a1 1 0 00-1-1H6a1 1 0 00-1 1v5H2a1 1 0 01-1-1v-6.882a1 1 0 01.447-.842L6 10m8 0V5a1 1 0 00-1-1H7a1 1 0 00-1 1v5m8 0H6" />
        </svg>
      </div>
      <span class="font-semibold text-lg text-gray-900">Sleeknote</span>
    </div>

    <!-- Title -->
    <h1 class="text-4xl font-bold text-gray-900 mb-3">We’ll Be Back Soon</h1>
    <p class="text-gray-500 mb-8">
      Spark is down for scheduled maintenance and we expect to be back online in a few minutes.
    </p>

    <!-- Illustration -->
    <div class="relative w-72 h-64 flex items-center justify-center mb-10">
      <!-- Monitor -->
      <div class="absolute w-64 h-40 bg-gray-100 rounded-xl border border-gray-200 shadow-inner flex flex-col justify-center">
        <div class="w-2/3 h-3 bg-gray-300 rounded mb-2 ml-8"></div>
        <div class="w-1/2 h-3 bg-gray-300 rounded ml-8"></div>
      </div>

      <!-- Gear -->
      <svg class="absolute right-12 top-8 w-16 h-16 text-indigo-400 animate-spin-slow" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19.14 12.936a7.07 7.07 0 000-1.872l2.037-1.582a.5.5 0 00.12-.637l-1.929-3.338a.5.5 0 00-.607-.216l-2.397.96a7.048 7.048 0 00-1.62-.94l-.363-2.54A.5.5 0 0014.9 2h-3.8a.5.5 0 00-.494.411l-.364 2.54a7.047 7.047 0 00-1.62.94l-2.396-.96a.5.5 0 00-.608.216L3.69 8.845a.5.5 0 00.12.637l2.037 1.582a7.07 7.07 0 000 1.872l-2.037 1.582a.5.5 0 00-.12.637l1.929 3.338a.5.5 0 00.608.216l2.396-.96a7.048 7.048 0 001.62.94l.364 2.54A.5.5 0 0011.1 22h3.8a.5.5 0 00.494-.411l.363-2.54a7.047 7.047 0 001.62-.94l2.397.96a.5.5 0 00.607-.216l1.929-3.338a.5.5 0 00-.12-.637l-2.037-1.582zM13 15a3 3 0 110-6 3 3 0 010 6z"/>
      </svg>

      <!-- Simple Character -->
      <div class="absolute bottom-0 left-10 flex flex-col items-center">
        <div class="w-8 h-8 bg-yellow-400 rounded-full"></div>
        <div class="w-3 h-10 bg-blue-500"></div>
        <div class="w-10 h-2 bg-blue-500 rounded-t"></div>
      </div>
    </div>

    <!-- Footer -->
    <p class="text-sm text-gray-500 max-w-sm">
      In the meantime, check out our blog to find inspiration on how to create high performing campaigns.
      <a href="../../public/" class="text-indigo-600 hover:underline ml-1">Go to blog →</a>
    </p>

  </div>

</body>
</html>
