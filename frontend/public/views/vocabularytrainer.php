<?php
include(__DIR__ . '/../../../backend/include/check_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Vocabulary Trainer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }
    </style>
</head>

<body class="bg-white text-gray-700 min-h-dvh flex">

    <!-- Sidebar -->
    <?php include '../../src/components/sidebar.php'; ?>

    <!-- Main content -->
    <main class="flex-1 flex items-center justify-center px-4 sm:px-6 md:px-8 py-8 ml-0 md:ml-[240px]">

        <div class="flex flex-col items-center text-center max-w-md w-full">

            <!-- Title -->
            <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2 sm:mb-3">We'll Be Back Soon</h1>
            <p class="text-sm sm:text-base text-gray-500 mb-6 sm:mb-8 px-4">
                Spark is down for scheduled maintenance and we expect to be back online in a few minutes.
            </p>

            <!-- Illustration -->
            <div class="relative w-64 sm:w-72 h-56 sm:h-64 flex items-center justify-center mb-8 sm:mb-10">
                <!-- Monitor -->
                <div class="absolute w-56 sm:w-64 h-36 sm:h-40 bg-gray-100 rounded-xl border border-gray-200 shadow-inner flex flex-col justify-center">
                    <div class="w-2/3 h-2 sm:h-3 bg-gray-300 rounded mb-2 ml-6 sm:ml-8"></div>
                    <div class="w-1/2 h-2 sm:h-3 bg-gray-300 rounded ml-6 sm:ml-8"></div>
                </div>

                <!-- Gear -->
                <svg class="absolute right-8 sm:right-12 top-6 sm:top-8 w-12 h-12 sm:w-16 sm:h-16 text-indigo-400 animate-spin-slow" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19.14 12.936a7.07 7.07 0 000-1.872l2.037-1.582a.5.5 0 00.12-.637l-1.929-3.338a.5.5 0 00-.607-.216l-2.397.96a7.048 7.048 0 00-1.62-.94l-.363-2.54A.5.5 0 0014.9 2h-3.8a.5.5 0 00-.494.411l-.364 2.54a7.047 7.047 0 00-1.62.94l-2.396-.96a.5.5 0 00-.608.216L3.69 8.845a.5.5 0 00.12.637l2.037 1.582a7.07 7.07 0 000 1.872l-2.037 1.582a.5.5 0 00-.12.637l1.929 3.338a.5.5 0 00.608.216l2.396-.96a7.048 7.048 0 001.62.94l.364 2.54A.5.5 0 0011.1 22h3.8a.5.5 0 00.494-.411l.363-2.54a7.047 7.047 0 001.62-.94l2.397.96a.5.5 0 00.607-.216l1.929-3.338a.5.5 0 00-.12-.637l-2.037-1.582zM13 15a3 3 0 110-6 3 3 0 010 6z" />
                </svg>

                <!-- Simple Character -->
                <div class="absolute bottom-0 left-8 sm:left-10 flex flex-col items-center">
                    <div class="w-7 h-7 sm:w-8 sm:h-8 bg-yellow-400 rounded-full"></div>
                    <div class="w-2.5 h-8 sm:w-3 sm:h-10 bg-blue-500"></div>
                    <div class="w-8 h-1.5 sm:w-10 sm:h-2 bg-blue-500 rounded-t"></div>
                </div>
            </div>

            <!-- Footer -->
            <p class="text-xs sm:text-sm text-gray-500 max-w-sm px-4">
                In the meantime, check out our blog to find inspiration on how to create high performing campaigns.
                <a href="../index.php" class="text-indigo-600 hover:underline ml-1">Go to blog →</a>
            </p>

        </div>
    </main>

</body>

</html>