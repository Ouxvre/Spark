<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>

  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  <script
    src="https://kit.fontawesome.com/190f733d37.js"
    crossorigin="anonymous"></script>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-[#E4E9F7] transition-all">
  <!-- Sidebar -->
  <nav
    class="sidebar fixed top-0 left-0 h-full w-[250px] bg-white p-4 shadow">
    <!-- Header Logo -->
    <header class="mb-6 w-full flex items-center justify-center">
      <div class="flex justify-between items-center">
        <h1 class="text-4xl font-bold text-black">
          <a href="home.php">
            Spark<span class="text-blue-500">.</span>
          </a>
        </h1>
      </div>
    </header>

    <!-- Menu -->
    <div class="menu-bar flex flex-col h-[90%] justify-between border-t border-gray-300">
      <ul class="menu-links space-y-2 pt-3">
        <li class="nav-links">
          <a href="dashboard.php"
            class="flex items-center px-3 py-2 rounded-md transition
      <?php echo ($current_page == 'dashboard.php') ? 'bg-blue-500 text-white' : 'hover:bg-[#dadadf] text-gray-700'; ?>">
            <i class="fa-regular fa-house icons mr-3 text-lg"></i>
            <span class="text nav-text">Home</span>
          </a>
        </li>

        <li class="nav-links">
          <a href="https://character.ai/chat/WjJQ263B_9rZul5wZxBFUoJYXzPki94_qCNhDVh-_-o"
          target="_blank"
            class="flex items-center px-3 py-2 rounded-md transition
      <?php echo ($current_page == 'interview.php') ? 'bg-blue-500 text-white' : 'hover:bg-[#dadadf] text-gray-700'; ?>">
            <i class="fa-solid fa-robot icons mr-3 text-lg"></i>
            <span class="text nav-text">Interview</span>
          </a>
        </li>
        <li class="nav-links">
          <a
            href="scriptbuilder.php"
            class="flex items-center px-3 py-2 rounded-md hover:bg-[#dadadf] transition
      <?php echo ($current_page == 'scriptbuilder.php') ? 'bg-blue-500 text-white' : 'hover:bg-[#dadadf] text-gray-700'; ?>">
            <i class="fa-regular fa-file icons mr-3 text-lg"></i>
            <span class="text nav-text">Script Builder</span>
          </a>
        </li>
        <li class="nav-links">
          <a
            href="vocabularytrainer.php"
            class="flex items-center px-3 py-2 rounded-md hover:bg-[#dadadf] transition 
      <?php echo ($current_page == 'vocabularytrainer.php') ? 'bg-blue-500 text-white' : 'hover:bg-[#dadadf] text-gray-700'; ?>">
            <i
              class="fa-solid fa-book-open icons mr-3 text-lg"></i>
            <span class="text nav-text">Vocabulary Trainer</span>
          </a>
        </li>
        <li class="nav-links">
          <a
            href="setting.php"
            class="flex items-center px-3 py-2 rounded-md hover:bg-[#dadadf] transition
      <?php echo ($current_page == 'setting.php') ? 'bg-blue-500 text-white' : 'hover:bg-[#dadadf] text-gray-700'; ?>">
            <i class="fa-solid fa-sliders icons mr-3 text-lg"></i>
            <span class="text nav-text">Setting</span>
          </a>
        </li>
      </ul>

      <!-- Bottom: Profile & Logout -->
      <div class="bottom-content pt-4 border-t border-gray-300">
        <div class="image-text flex items-center h-[65px] gap-3 px-2.5 py-3 mb-4  border border-gray-300 hover:border-gray-600 rounded-2xl hover:bg-gray-400">
          <a href="setting.php" class="flex items-center gap-5 h-full w-full">
            <span
              class="image w-[40px] h-[40px] flex items-center justify-center">
              <img
                src="../assets/uploads/avatars/default.jpeg"
                alt="logo"
                class="rounded-lg w-10 h-10" />
            </span>
            <div class="text header-text flex flex-col leading-tight gap-[3px] ">
              <span class="name font-semibold text-[17px] text-black">
                <?php echo $_SESSION['username'] ?? 'Guest'; ?>
              </span>
              <span class="profession text-sm text-gray-500">
                <?php echo $_SESSION['role'] ?? 'unknown'; ?>
              </span>
            </div>
          </a>
        </div>

        <a
          href="../../../backend/auth/logout.php"
          class="flex items-center px-3 py-2 rounded-md hover:bg-[#dadadf] transition">
          <i class="bx bx-log-out icons mr-3 text-xl text-black"></i>
          <span class="text nav-text text-gray-700">Log Out</span>
        </a>
      </div>
    </div>
  </nav>
</body>

</html>