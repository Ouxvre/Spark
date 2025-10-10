<?php
include(__DIR__ . '/../../../backend/include/check_login.php');
include(__DIR__ . '../../../../config/konfig.php');

$userId = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username, bio, avatar_url FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Spark - Settings</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
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

        /* Mobile menu toggle */
        @media (max-width: 768px) {
            .mobile-menu {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
            }

            .mobile-menu.active {
                max-height: 500px;
            }

            section.right-content {
                overflow-y: hidden !important;
                max-height: none !important;
            }
        }
    </style>
</head>

<body class="flex min-h-screen bg-[#E4E9F7] transition-all">

    <!-- Sidebar sudah di-include -->
    <?php include '../../src/components/sidebar.php' ?>

    <!-- Main content -->
    <main class="flex-1 flex items-center justify-center px-3 sm:px-4 md:px-6 py-4 sm:py-6 ml-0 md:ml-[240px] bg-[#E4E9F7]
    overflow-y-auto md:overflow-hidden md:h-screen">
        <div class="glass-effect rounded-xl sm:rounded-2xl shadow-2xl w-full max-w-6xl p-4 sm:p-6 md:p-8 
        md:h-[90vh] md:max-h-[90vh] overflow-y-auto md:overflow-hidden">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-4 sm:mb-6 pb-3 sm:pb-4 border-b border-gray-200 gap-3">
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text text-transparent">Settings</h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-1 hidden sm:block">Manage your account preferences</p>
                </div>

                <!-- Search bar -->
                <div class="relative w-full sm:w-64 md:w-72">
                    <input type="search" placeholder="Search settings..."
                        class="w-full pl-10 sm:pl-12 pr-4 py-2 sm:py-3 text-xs sm:text-sm border border-gray-200 rounded-lg sm:rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

            <div class="flex flex-col md:flex-row gap-4 sm:gap-6 md:gap-8 h-full">

                <!-- Left menu -->
                <nav class="flex flex-col md:border-r border-gray-200 md:pr-6 lg:pr-8 md:min-w-[200px] space-y-1 md:overflow-y-auto md:max-h-[calc(90vh-180px)]">
                    <!-- Mobile menu toggle -->
                    <button id="menuToggle" class="md:hidden flex items-center justify-between px-4 py-3 bg-gradient-to-r from-purple-50 to-blue-50 rounded-lg text-purple-700 font-medium mb-2">
                        <span>Menu</span>
                        <svg id="menuIcon" class="w-5 h-5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Menu items -->
                    <div id="mobileMenu" class="mobile-menu md:max-h-none space-y-1">
                        <button class="menu-btn active w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl bg-gradient-to-r from-purple-50 to-blue-50 text-purple-700 font-medium flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-white shadow-sm flex items-center justify-center group-hover:shadow-md transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Profile</span>
                        </button>
                        <button class="menu-btn w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Account</span>
                        </button>
                        <button class="menu-btn w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Chat</span>
                        </button>
                        <button class="menu-btn w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Voice & Video</span>
                        </button>
                        <button class="menu-btn w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Appearance</span>
                        </button>
                        <button class="menu-btn w-full text-left px-3 sm:px-4 md:px-5 py-2.5 sm:py-3 md:py-3.5 rounded-lg sm:rounded-xl text-gray-600 hover:text-gray-900 hover:bg-gray-50 flex items-center gap-2 sm:gap-3 group">
                            <div class="w-6 h-6 sm:w-7 sm:h-7 rounded-lg bg-gray-50 flex items-center justify-center group-hover:bg-white group-hover:shadow-sm transition flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </div>
                            <span class="text-sm sm:text-base">Notification</span>
                        </button>
                    </div>
                </nav>

                <!-- Right content -->
                <section class="flex-1 min-w-0 md:overflow-hidden md:h-[calc(100vh-200px)] flex flex-col justify-between">
                    <form action="../../../backend/models/update_profil.php" enctype="multipart/form-data" method="POST"
                        class="flex flex-col justify-between h-full space-y-3 sm:space-y-4">

                        <!-- Profile Picture -->
                        <div class="bg-gradient-to-br from-purple-50 to-blue-50 rounded-xl sm:rounded-2xl p-3 sm:p-4 md:p-5">
                            <label class="block text-xs sm:text-sm font-semibold text-gray-800 mb-2">Profile Picture</label>
                            <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-5">
                                <div class="profile-avatar w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-gradient-to-br from-purple-400 to-blue-500 flex items-center justify-center text-white shadow-lg relative z-0 overflow-hidden flex-shrink-0">
                                    <?php
                                    $avatarPath = __DIR__ . '../src/assets/uploads/avatars/';
                                    if (!empty($user['avatar_url']) && file_exists($avatarPath . $user['avatar_url'])):
                                    ?>
                                        <img id="avatarPreview" src="<?php echo '../src/assets/uploads/avatars/' . htmlspecialchars($user['avatar_url']); ?>" alt="Avatar" class="w-full h-full object-cover rounded-full">
                                    <?php else: ?>
                                        <svg id="defaultAvatar" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 sm:w-14 sm:h-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    <?php endif; ?>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-2">
                                    <button type="button"
                                        class="px-4 sm:px-6 py-2 sm:py-2.5 text-sm bg-white text-purple-600 rounded-lg border border-purple-200 hover:bg-purple-50 transition">
                                        Upload New
                                    </button>
                                    <button type="button"
                                        class="px-4 sm:px-6 py-2 sm:py-2.5 text-sm bg-white text-red-600 rounded-lg border border-red-200 hover:bg-red-50 transition">
                                        Remove
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Username -->
                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-gray-800 mb-1.5">Username</label>
                            <input type="text" class="input-field w-full py-2 sm:py-2.5 px-3 border rounded-lg text-sm" />
                        </div>

                        <!-- About Me -->
                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-gray-800 mb-1.5">About Me</label>
                            <textarea rows="2" maxlength="150"
                                class="input-field w-full px-3 py-2 text-sm border rounded-lg resize-none"></textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="flex justify-end gap-3 pt-2">
                            <button type="button"
                                class="px-5 py-2 text-sm bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                                Cancel
                            </button>
                            <button type="submit"
                                class="px-6 py-2 text-sm text-white rounded-lg bg-gradient-to-r from-purple-500 to-blue-500 hover:opacity-90 transition">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </main>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            menuIcon.classList.toggle('rotate-180');
        });

        // Avatar upload
        const uploadBtn = document.getElementById('uploadBtn');
        const removeBtn = document.getElementById('removeBtn');
        const fileInput = document.getElementById('avatarInput');
        const avatarPreview = document.getElementById('avatarPreview');
        const defaultAvatar = document.getElementById('defaultAvatar');

        uploadBtn.addEventListener('click', () => fileInput.click());

        fileInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    if (defaultAvatar) defaultAvatar.style.display = 'none';
                    if (avatarPreview) {
                        avatarPreview.src = e.target.result;
                        avatarPreview.style.display = 'block';
                    } else {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = "w-full h-full object-cover rounded-full";
                        img.id = "avatarPreview";
                        document.querySelector('.profile-avatar').appendChild(img);
                    }
                };
                reader.readAsDataURL(file);
            }
        });

        removeBtn.addEventListener('click', () => {
            if (avatarPreview) avatarPreview.remove();
            if (defaultAvatar) defaultAvatar.style.display = 'block';
            fileInput.value = '';
            document.getElementById('removeAvatar').value = '1';
        });

        // Character counter
        const textarea = document.getElementById('aboutMe');
        const counter = document.getElementById('charCount');
        const max = 150;

        textarea.addEventListener('input', () => {
            const length = textarea.value.length;
            counter.textContent = `${length}/${max}`;

            if (length >= max) {
                counter.classList.remove('text-gray-400');
                counter.classList.add('text-red-500');
            } else {
                counter.classList.remove('text-red-500');
                counter.classList.add('text-gray-400');
            }
        });
    </script>
</body>

</html>