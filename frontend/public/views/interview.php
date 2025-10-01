<!DOCTYPE html>
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
         <?php include '../../src/components/sidebar.php'?>

        <!-- Main Content -->
        <main class="flex-1 p-8 mt-10">
            <!-- Header -->
            <div class="mb-8 flex items-center justify-center flex-col">
                <p class="text-sm text-gray-600 mb-2">Selamat Datang Di Spark</p>
                <h2 class="text-2xl font-bold text-gray-900">Cobain wawancara pertamamu</h2>
            </div>

            <!-- Interview Form Card -->
            <div class="max-w-2xl mx-auto">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <!-- Card Header -->
                    <div class="px-6 py-4 border-b border-gray-200 flex items-center gap-2">
                        <i class="fas fa-edit text-gray-600"></i>
                        <h3 class="font-semibold text-gray-900">Latihan Wawancara</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 space-y-6">
                        <!-- Bidang Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Bidang*</label>
                            <div class="relative">
                                <select
                                    class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>Pilih Atau Ketik Bidang . . .</option>
                                    <option>Software Engineer</option>
                                    <option>Product Manager</option>
                                    <option>Data Analyst</option>
                                    <option>UI/UX Designer</option>
                                </select>
                                <i
                                    class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                            <p class="text-xs text-gray-500 mt-2 flex items-center gap-1">
                                <i class="fas fa-info-circle"></i>
                                <span>Pilih bidang penting untuk spesifik lebih detail di opsi</span>
                            </p>
                        </div>

                        <!-- Posisi Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Posisi*</label>
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
                            <button
                                class="px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors shadow-sm">
                                Mulai pose Wawancara
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>