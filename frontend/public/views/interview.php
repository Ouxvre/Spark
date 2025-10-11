<?php
include(__DIR__ . '/../../../backend/include/check_login.php');
?>


<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Interview Practice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#E4E9F7]">
    <div class="flex md:min-h-screen">
        <?php include '../../src/components/sidebar.php' ?>

        <!-- Main Content -->
        <main class="flex-1 p-4 sm:p-6 lg:p-8 lg:ml-[240px] mt-12 sm:mt-14 lg:mt-10 flex items-center justify-center flex-col md:block  h-vh overflow-hidden">
            <!-- Header -->
            <div class="mb-6 sm:mb-8 flex items-center justify-center flex-col text-center px-4">
                <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 mb-2">Welcome To Spark</p>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">Try your first interview</h2>
            </div>

            <!-- Interview Form Card -->
            <div class="max-w-2xl mx-auto px-4 sm:px-0">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <!-- Card Header -->
                    <div class="px-4 sm:px-6 py-3 sm:py-4 border-b border-gray-200 flex items-center gap-2">
                        <i class="fas fa-edit text-gray-600 text-sm sm:text-base"></i>
                        <h3 class="font-semibold text-gray-900 text-sm sm:text-base">Interview Practice</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="p-4 sm:p-6 space-y-5 sm:space-y-6">
                        <!-- Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Field*</label>
                            <div class="relative">
                                <select
                                    class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-700 text-sm sm:text-base">
                                    <option>Select or Type Field . . .</option>
                                    <option>Junior Web Developer</option>
                                    <option>IT Support Technician</option>
                                    <option>Junior Graphic Designer</option>
                                    <option>Mobile App Developer</option>
                                    <option>Data Entry</option>
                                    <option>Network Administrator Assistant</option>
                                </select>
                                <i
                                    class="fas fa-chevron-down absolute right-3 sm:right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none text-xs sm:text-sm"></i>
                            </div>
                            <p class="text-xs text-gray-500 mt-2 flex items-start sm:items-center gap-1">
                                <i class="fas fa-info-circle mt-0.5 sm:mt-0 flex-shrink-0"></i>
                                <span>Select the relevant field for more specific details in the options</span>
                            </p>
                        </div>

                        <!-- AI Selection -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">AI*</label>
                            <div class="relative">
                                <select id="aiSelect"
<<<<<<< HEAD
                                    class="w-full px-3 sm:px-4 py-2.5 sm:py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-700 text-sm sm:text-base">
                                    <option value="">Select AI . . .</option>
=======
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>select AI . . .</option>
>>>>>>> 8e4bdeeb1bea3c46a05fab5bcf86c115b2ac876a
                                    <option value="man">AI Man</option>
                                    <option value="girl">AI Girl</option>
                                </select>
                                <i
                                    class="fas fa-chevron-down absolute right-3 sm:right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none text-xs sm:text-sm"></i>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end pt-2">
                            <a id="startButton" href="#"
                                target="_blank"
                                class="w-full sm:w-auto px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors shadow-sm inline-block text-center text-sm sm:text-base disabled:opacity-50 disabled:cursor-not-allowed">
                                Begin the Interview
                            </a>
                        </div>

                        <script>
                            const select = document.getElementById("aiSelect");
                            const button = document.getElementById("startButton");

                            select.addEventListener("change", () => {
                                if (select.value === "man") {
                                    button.href = "https://character.ai/chat/gdW376hhYU0wnDpCm0LQvSyQerb-pJ9mJhosfgcqyeQ";
                                } else if (select.value === "girl") {
                                    button.href = "https://character.ai/chat/WjJQ263B_9rZul5wZxBFUoJYXzPki94_qCNhDVh-_-o";
                                } else {
                                    button.href = "#";
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>