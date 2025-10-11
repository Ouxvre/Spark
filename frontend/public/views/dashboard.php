<?php
include(__DIR__ . '/../../../backend/include/check_login.php');
include '../../../config/konfig.php';


// $_SESSION['username'] = $user['username'];

?>

<?php include '../../src/components/sidebar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Spark</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="bg-[#E4E9F7] font-[Poppins] flex">

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 md:p-8 lg:p-10 ml-0 md:ml-[240px]">
        <!-- Welcome -->
        <div>
            <h1 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-800">
                Welcome back,
                <span class="font-semibold text-gray-800">
                    <?php echo htmlspecialchars($_SESSION['username']); ?>
                </span>
                👋
            </h1>
            <p class="text-sm sm:text-base text-gray-600 mt-1">Ready to sharpen your interview skills today?</p>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 mt-6 sm:mt-8 lg:mt-10">
            <a href="interview.php" class="p-4 sm:p-5 bg-white rounded-xl text-center hover:bg-gray-100 transition group">
                <i data-feather="mic" class="w-6 h-6 sm:w-7 sm:h-7 mx-auto text-blue-600 mb-2 sm:mb-3 group-hover:scale-110 transition"></i>
                <p class="text-sm sm:text-base font-semibold text-gray-800">Start Interview</p>
            </a>

            <a href="scriptbuilder.php" class="p-4 sm:p-5 bg-white rounded-xl text-center hover:bg-gray-100 transition group">
                <i data-feather="code" class="w-6 h-6 sm:w-7 sm:h-7 mx-auto text-teal-600 mb-2 sm:mb-3 group-hover:scale-110 transition"></i>
                <p class="text-sm sm:text-base font-semibold text-gray-800">Script Builder</p>
            </a>

            <a href="vocabularytrainer.php" class="p-4 sm:p-5 bg-white rounded-xl text-center hover:bg-gray-100 transition group">
                <i data-feather="book-open" class="w-6 h-6 sm:w-7 sm:h-7 mx-auto text-purple-600 mb-2 sm:mb-3 group-hover:scale-110 transition"></i>
                <p class="text-sm sm:text-base font-semibold text-gray-800">Vocabulary</p>
            </a>

            <a href="setting.php" class="p-4 sm:p-5 bg-white rounded-xl text-center hover:bg-gray-100 transition group">
                <i data-feather="settings" class="w-6 h-6 sm:w-7 sm:h-7 mx-auto text-gray-600 mb-2 sm:mb-3 group-hover:scale-110 transition"></i>
                <p class="text-sm sm:text-base font-semibold text-gray-800">Settings</p>
            </a>
        </div>

        <!-- Progress Section -->
        <div class="mt-6 sm:mt-8 lg:mt-10 bg-white shadow-sm rounded-xl p-4 sm:p-5 md:p-6">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-800 mb-3 sm:mb-4">Your Weekly Progress</h2>
            <div class="bg-gray-200 rounded-full h-3 sm:h-4 mb-2 sm:mb-3 overflow-hidden">
                <div class="bg-teal-500 h-3 sm:h-4 rounded-full w-[1%]"></div>
            </div>
            <p class="text-xs sm:text-sm text-gray-500">You've completed <span class="font-semibold text-teal-600">0%</span> of your weekly goal 🎯</p>
        </div>

        <!-- Motivation -->
        <div class="mt-6 sm:mt-8 p-4 sm:p-5 md:p-6 bg-gradient-to-r from-blue-500 to-teal-400 text-white rounded-xl shadow-md">
            <h2 class="text-base sm:text-lg font-semibold mb-2">✨ Today's Motivation</h2>
            <p class="text-xs sm:text-sm italic">"Confidence comes from preparation — let Spark help you shine."</p>
        </div>
    </main>

    <script>
        feather.replace();
    </script>
</body>

</html>