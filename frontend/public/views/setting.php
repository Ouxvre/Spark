<?php 

  $current_page = basename($_SERVER['PHP_SELF']); 
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Setting - Spark</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            /* background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); */
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .menu-btn {
            transition: all 0.3s ease;
            position: relative;
        }

        .menu-btn::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 3px;
            height: 0;
            background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
            border-radius: 0 3px 3px 0;
            transition: height 0.3s ease;
        }

        .menu-btn.active::before {
            height: 70%;
        }

        .menu-btn:hover {
            transform: translateX(4px);
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.15);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .profile-avatar {
            position: relative;
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            transform: scale(1.05);
        }

        .profile-avatar::after {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .profile-avatar:hover::after {
            opacity: 1;
        }
    </style>
</head>

<body class="flex min-h-screen h-screen bg-[#E4E9F7] transition-all">

    <!-- Sidebar sudah di-include -->
    <?php include '../../src/components/sidebar.php'?>

    <!-- Main content -->
    <main class="flex-1 p-5 ml-[220px] w-full h-dvh ">
        <div class="glass-effect rounded-2xl shadow-2xl w-full mx-auto md:p-2 h-full overflow-hidden">

            <div class="flex items-center justify-between mb-4 py-1.5 border-b border-gray-200">
                <div>
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">Settings</h2>
                    <!-- <p class="text-gray-500 text-sm mt-1">Manage your account preferences</p> -->
                </div>

                <!-- Search bar -->
                <div class="relative w-72 hidden md:block">
                    <input type="search" placeholder="Search settings..." 
                        class="w-full pl-12 pr-4 py-3 text-sm border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-8">

                <!-- Left menu -->
                <nav class="flex flex-col md:border-r border-gray-200 md:pr-8 min-w-[200px] h-screen space-y-1">
                    <button class="menu-btn active text-left px-5 py-3.5 rounded-xl bg-gradient-to-r from-purple-50 to-blue-50 text-purple-700 font-medium flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-white shadow-sm flex items-center justify-center group-hover:shadow-md transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <span>Profile</span>
                    </button>
                    <button class="menu-btn text-left px-5 py-3.5 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span>Account</span>
                    </button>
                    <button class="menu-btn text-left px-5 py-3.5 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <span>Chat</span>
                    </button>
                    <button class="menu-btn text-left px-5 py-3.5 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span>Voice & Video</span>
                    </button>
                    <button class="menu-btn text-left px-5 py-3.5 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                            </svg>
                        </div>
                        <span>Appearance</span>
                    </button>
                    <button class="menu-btn text-left px-5 py-3.5 rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-3 group">
                        <div class="w-7 h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                        <span>Notification</span>
                    </button>
                </nav>

                <!-- Right content -->
                <section class="flex-1">
                    <form action="#" method="POST" class="space-y-2">
                        <!-- Profile Picture -->
                        <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl p-3">
                            <label class="block text-sm font-semibold text-gray-800 mb-4 z-100">Profile Picture</label>
                            <div class="flex flex-col sm:flex-row items-center gap-6">
                                <div class="profile-avatar w-24 h-24 rounded-full bg-gradient-to-br from-purple-400 to-blue-500 flex items-center justify-center text-white shadow-lg relative z-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <button type="button" class="px-6 py-3 bg-white text-purple-600 rounded-xl font-medium hover:shadow-lg transition border border-purple-200 hover:bg-purple-50">
                                        Upload New
                                    </button>
                                    <button type="button" class="px-6 py-3 bg-white text-red-600 rounded-xl font-medium hover:shadow-lg transition border border-red-200 hover:bg-red-50">
                                        Remove
                                    </button>
                                </div>
                            </div>
                            <!-- <p class="text-xs text-gray-500 mt-4">Recommended: Square image, at least 400x400px</p> -->
                        </div>

                        <!-- Profile Name -->
                        <div>
                            <label for="profileName" class="block text-sm font-semibold text-gray-800 mb-2">Profile Name</label>
                            <div class="relative">
                                <input id="profileName" name="profileName" type="text" placeholder="Supeno" 
                                    class="input-field w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" />
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute right-4 top-1/2 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Username -->
                        <div>
                            <label for="username" class="block text-sm font-semibold text-gray-800 mb-2">Username</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-medium">@</span>
                                <input id="username" name="username" type="text" placeholder="Supeno12" 
                                    class="input-field w-full pl-10 pr-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" />
                            </div>
                            <!-- <p class="text-xs text-gray-500 mt-2">Your unique identifier across the platform</p> -->
                        </div>

                        <!-- About Me -->
                        <div>
                            <label for="aboutMe" class="block text-sm font-semibold text-gray-800 mb-2">About Me</label>
                            <textarea id="aboutMe" name="aboutMe" rows="3" placeholder="Tell us about yourself..." 
                                class="input-field w-full px-4 py-2 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none"></textarea>
                            <!-- <div class="flex justify-between items-center mt-2"> -->
                                <!-- <p class="text-xs text-gray-500">Share your interests, goals, or anything you'd like others to know</p> -->
                                <!-- <span class="text-xs text-gray-400">0/500</span> -->
                            <!-- </div> -->
                        </div>

                        <!-- Save Button -->
                        <div class="flex justify-end gap-3">
                            <button type="button" 
                                class="px-6 py-3 bg-gray-100 text-gray-700 rounded-xl font-medium hover:bg-gray-200 transition">
                                Cancel
                            </button>
                            <button type="submit" 
                                class="btn-primary px-8 py-3 text-white rounded-xl font-medium shadow-lg">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </main>

</body>

</html>