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

<body>
    <div class="flex min-h-screen">
        <?php include '../../src/components/sidebar.php' ?>

        <!-- Main Content -->
        <main class="flex-1 p-8 ml-[240px] mt-10">
            <!-- Header -->
            <div class="mb-8 flex items-center justify-center flex-col">
                <p class="text-2xl text-gray-600 mb-2">Welcome To Spark</p>
                <h2 class="text-4xl font-bold text-gray-900">Try your first interview</h2>
            </div>

            <!-- Interview Form Card -->
            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <!-- Card Header -->
                    <div class="px-6 py-4 border-b border-gray-200 flex items-center gap-2">
                        <i class="fas fa-edit text-gray-600"></i>
                        <h3 class="font-semibold text-gray-900">Interview Practice</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 space-y-6">
                        <!-- Bidang Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">field*</label>
                            <div class="relative">
                                <select
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>Select or Type Field . . .</option>
                                    <option>Junior Web Developer</option>
                                    <option>IT Support Technician</option>
                                    <option>Junior Graphic Designer</option>
                                    <option>Mobile App Developer</option>
                                    <option>Data Entry</option>
                                    <option>Network Administrator Assistant</option>
                                </select>
                                <i
                                    class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                            <p class="text-xs text-gray-500 mt-2 flex items-center gap-1">
                                <i class="fas fa-info-circle"></i>
                                <span>Select the relevant field for more specific details in the options</span>
                            </p>
                        </div>

                        <!-- Posisi Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Position*</label>
                            <div class="relative">
                                <select
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>Pilih Atau Ketik Posisi . . .</option>
                                    <option>Junior</option>
                                    <option>Mid-Level</option>
                                    <option>Senior</option>
                                    <option>Lead</option>
                                </select>
                                <i
                                    class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end pt-2">
                            <a href="https://character.ai/chat/WjJQ263B_9rZul5wZxBFUoJYXzPki94_qCNhDVh-_-o"
                                target="_blank"
                                class="px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors shadow-sm inline-block text-center">
                                begin the interview
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>