<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark - Interview Practice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 flex flex-col">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-200">
                <h1 class="text-3xl font-bold">Spark<span class="text-blue-500">.</span></h1>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 p-4">
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-1 transition">
                    <i class="fas fa-home text-lg"></i>
                    <span>Home</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gray-100 text-gray-900 rounded-lg mb-1 transition">
                    <i class="fas fa-user-tie text-lg"></i>
                    <span>Interview</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-1 transition">
                    <i class="fas fa-code text-lg"></i>
                    <span>Script Builder</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-1 transition">
                    <i class="fas fa-book text-lg"></i>
                    <span>Vocabulary Trainer</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:bg-gray-100 rounded-lg mb-1 transition">
                    <i class="fas fa-cog text-lg"></i>
                    <span>Setting</span>
                </a>
            </nav>
            
            <!-- User Profile -->
            <div class="p-4 border-t border-gray-200">
                <div class="flex items-center gap-3 px-4 py-3 hover:bg-gray-50 rounded-lg cursor-pointer transition">
                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-gray-600"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-sm text-gray-900">Dummy</p>
                        <p class="text-xs text-gray-500">dummy@gmail.com</p>
                    </div>
                    <i class="fas fa-external-link-alt text-gray-400 text-sm"></i>
                </div>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Header -->
            <div class="mb-8">
                <p class="text-sm text-gray-600 mb-2">Selamat Datang Di Spark</p>
                <h2 class="text-2xl font-bold text-gray-900">Cobain wawancara pertamamu</h2>
            </div>
            
            <!-- Interview Form Card -->
            <div class="max-w-2xl">
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
                                <select class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>Pilih Atau Ketik Bidang . . .</option>
                                    <option>Software Engineer</option>
                                    <option>Product Manager</option>
                                    <option>Data Analyst</option>
                                    <option>UI/UX Designer</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
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
                                <select class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent text-gray-500">
                                    <option>Pilih Atau Ketik Posisi . . .</option>
                                    <option>Junior</option>
                                    <option>Mid-Level</option>
                                    <option>Senior</option>
                                    <option>Lead</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class="flex justify-end pt-2">
                            <button class="px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors shadow-sm">
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