<?php
include '../../../config/konfig.php';

$username = "Guest";
$email = "Tidak ada email";
$avatar = "default.jpeg";

// Use a base URL relative to the web root
$base_url = '/Spark/frontend/src/assets/img/uploads/avatars/';

if (isset($_SESSION['user_id'])) {
    $userId = intval($_SESSION['user_id']);
    $query = "SELECT username, email, avatar_url FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $username = $row['username'] ?: "Guest";
        $email = $row['email'] ?: "Tidak ada email";
        $avatar = $row['avatar_url'] ?: "default.jpeg";
    }
}

$current_page = basename($_SERVER['PHP_SELF']);
?>

<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Spark - Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }

        /* Overlay untuk mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
        }

        .sidebar-overlay.active {
            display: block;
        }

        /* Animasi sidebar */
        .sidebar {
            transition: transform 0.3s ease-in-out;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="h-screen bg-[#E4E9F7] transition-all">
    
    <!-- Hamburger Button (Mobile Only) -->
    <button id="hamburger" class="fixed top-4 right-4 z-50 md:hidden bg-white p-2 rounded-lg shadow-lg hover:bg-gray-100 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>

    <!-- Overlay (Mobile Only) -->
    <div id="overlay" class="sidebar-overlay"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar w-[240px] h-screen bg-white border-r border-gray-200 flex flex-col fixed z-50 md:z-10">
        <!-- Close Button (Mobile Only) -->
        <button id="closeSidebar" class="absolute top-4 right-4 md:hidden text-gray-600 hover:text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="p-6 border-b border-gray-200">
            <h1 class="flex items-center text-[50px] font-bold justify-center">Spark<span class="text-blue-500">.</span></h1>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 p-4 pt-10 overflow-y-auto">
            <a href="../../public/views/dashboard.php" class="flex items-center gap-3 px-4 py-3 rounded-lg mb-2.5 transition 
   <?php echo $current_page == 'dashboard.php' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100'; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span class="text-[15px]">Home</span>
            </a>

            <a href="../../public/views/interview.php" class="flex items-center gap-3 px-4 py-3 rounded-lg mb-2.5 transition 
   <?php echo $current_page == 'interview.php' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100'; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z" />
                </svg>
                <span class="text-[15px]">Interview</span>
            </a>

            <a href="../../public/views/scriptbuilder.php" class="flex items-center gap-3 px-4 py-3 rounded-lg mb-2.5 transition 
   <?php echo $current_page == 'scriptbuilder.php' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100'; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                </svg>
                <span class="text-[15px]">Script Builder</span>
            </a>

            <a href="../../public/views/vocabularytrainer.php" class="flex items-center gap-3 px-4 py-3 rounded-lg mb-2.5 transition 
   <?php echo $current_page == 'vocabularytrainer.php' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100'; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="text-[15px]">Vocabulary Trainer</span>
            </a>

            <a href="../../public/views/setting.php" class="flex items-center gap-3 px-4 py-3 rounded-lg mb-2.5 transition 
   <?php echo $current_page == 'setting.php' ? 'bg-gray-100 text-gray-900' : 'text-gray-700 hover:bg-gray-100'; ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
                <span class="text-[15px]">Setting</span>
            </a>
        </nav>

        <!-- User Profile -->
        <div class="flex items-center justify-between p-4 sm:p-6 border-t border-gray-200 flex-shrink-0 sticky bottom-0 bg-white">
            <div class="flex items-center space-x-2 sm:space-x-3 flex-1 min-w-0">
                <img src="<?php echo htmlspecialchars($base_url . $avatar); ?>" alt="Foto Profil" class="w-10 h-10 sm:w-11 sm:h-11 rounded-full bg-gray-200 object-cover flex-shrink-0">
                <div class="min-w-0 flex-1">
                    <p class="text-sm sm:text-[15px] font-semibold text-gray-900 truncate"><?php echo htmlspecialchars($username); ?></p>
                    <p class="text-[9px] sm:text-[10px] text-gray-600 truncate"><?php echo htmlspecialchars($email); ?></p>
                </div>
            </div>
            <a href="../../../backend/auth/logout.php" class="text-gray-700 hover:text-black flex-shrink-0 ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                </svg>
            </a>
        </div>
    </aside>

    <script>
        const hamburger = document.getElementById('hamburger');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const closeSidebar = document.getElementById('closeSidebar');

        // Open sidebar
        hamburger.addEventListener('click', () => {
            sidebar.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        // Close sidebar
        function closeSidebarFunc() {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = ''; // Re-enable scrolling
        }

        closeSidebar.addEventListener('click', closeSidebarFunc);
        overlay.addEventListener('click', closeSidebarFunc);

        // Close sidebar when clicking a link (optional)
        const sidebarLinks = sidebar.querySelectorAll('a');
        sidebarLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 768) {
                    closeSidebarFunc();
                }
            });
        });
    </script>
</body>

</html>