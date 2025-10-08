<?php if (isset($_GET['error']) && $_GET['error'] == 'exists'): ?>
  <div id="toast" class="error">❌ Email atau Nomor HP sudah terdaftar!</div>
<?php elseif (isset($_GET['error']) && $_GET['error'] == 'db'): ?>
  <div id="toast" class="error">⚠️ Terjadi kesalahan server, coba lagi.</div>
<?php endif; ?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Spark</title>
  <link rel="icon" href="../../src/assets/img/icon.png">

  <!-- Google Font Poppins -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <!-- Font Awesome CDN -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    @font-face {
      font-family: "Clearface";
      src: url("../fonts/Clearface-Serial-Regular.ttf") format("truetype");
      font-weight: normal;
      font-style: normal;
    }

    body {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
    }

    /* Responsive font sizes */
    h1 {
      font-size: clamp(1.5rem, 4vw, 2.25rem);
    }

    h2 {
      font-size: clamp(1.75rem, 5vw, 3.75rem);
    }

    /* Toast container */
    #toast {
      visibility: hidden;
      min-width: 200px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 8px;
      padding: 12px 16px;
      position: fixed;
      z-index: 1000;
      right: 16px;
      top: 16px;
      font-size: clamp(0.75rem, 2vw, 0.875rem);
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.5s ease-in-out;
      opacity: 0;
    }

    #toast.show {
      visibility: visible;
      opacity: 1;
      transform: translateX(0);
    }

    #toast.error {
      background-color: #e74c3c;
    }

    /* Mobile & Tablet Responsive */
    @media (max-width: 768px) {
      .main-card {
        height: 100vh !important;
        max-width: 100% !important;
        border-radius: 0 !important;
        padding: 1.5rem !important;
      }

      .content-wrapper {
        overflow-y: auto;
        max-height: calc(100vh - 200px);
        padding-bottom: 1rem;
      }

      h2 {
        font-size: clamp(1.5rem, 4.5vw, 2.5rem);
        line-height: 1.1;
      }
    }

    @media (max-width: 640px) {
      .main-card {
        padding: 1rem !important;
      }

      .form-container,
      .social-container {
        width: 100%;
        max-width: 100%;
      }

      .divider {
        display: none;
      }

      .title-section {
        margin-bottom: 1.5rem;
      }

      .footer-section {
        font-size: 0.7rem;
      }
    }
  </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <!-- Card Container -->
  <div
    class="main-card bg-white w-full max-w-6xl rounded-3xl shadow-2xl p-5 sm:p- flex flex-col lg:h-[90vh] justify-between overflow-hidden">

    <!-- Header -->
    <div class="flex justify-between items-center sm:mb-6 md:px-6">
      <h1 class="text-2xl sm:text-3xl font-bold text-black">
        Spark<span class="text-blue-500">.</span>
      </h1>
      <a
        href="../views/login.php"
        class="bg-blue-400 text-white px-4 sm:px-6 py-2 text-sm sm:text-base font-medium rounded-full hover:bg-blue-500 transition">
        Login
      </a>
    </div>

    <!-- Scrollable Content Wrapper -->
    <div class="content-wrapper flex-1 flex flex-col justify-center">
      <!-- Title -->
      <div class="text-center title-section mb-6 sm:mb-8">
        <h2
          class="text-4xl sm:text-5xl lg:text-6xl leading-tight"
          style="font-family: 'Clearface', serif">
          <span class="text-blue-500 sm:font-bold">Register</span> To Your <br />
          <span>Account</span>
        </h2>
        <p class="text-gray-500 mt-4 sm:mt-5 text-sm sm:text-base font-normal px-4">
          "Start practicing your English interview skills with AI."
        </p>
      </div>

      <!-- Content -->
      <div
        class="flex justify-center gap-6 sm:gap-8 lg:gap-10 flex-col md:flex-row items-center">

        <!-- Left: Register Form -->
        <form action="../../../backend/auth/register.php" method="POST" class="form-container flex flex-col gap-3 sm:gap-4 w-full max-w-xs sm:max-w-sm">
          <input
            type="text"
            name="username"
            placeholder="Username"
            required
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium focus:outline-none focus:ring-2 focus:ring-blue-400" />
          <input
            type="text"
            name="identifier"
            placeholder="Phone/Email"
            required
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium focus:outline-none focus:ring-2 focus:ring-blue-400" />
          <input
            type="password"
            name="password"
            placeholder="Password"
            required
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium focus:outline-none focus:ring-2 focus:ring-blue-400" />

          <button
            type="submit"
            class="bg-black text-white rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-semibold hover:bg-gray-800 transition flex items-center justify-center gap-2">
            Create Account
            <span class="text-lg sm:text-xl"><i class="fa-solid fa-arrow-right"></i></span>
          </button>
        </form>

        <!-- Divider -->
        <div class="divider h-52 border-l border-gray-300 hidden md:block"></div>

        <!-- Right: Social Login -->
        <div class="social-container flex flex-col gap-3 sm:gap-4 w-full max-w-xs sm:max-w-sm">
          <button
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium flex items-center gap-3 hover:bg-gray-50 transition">
            <span class="text-lg sm:text-xl"><i class="fa-brands fa-google"></i></span>
            <span class="flex-1 text-left">Sign In With Google</span>
          </button>
          <button
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium flex items-center gap-3 hover:bg-gray-50 transition">
            <span class="text-lg sm:text-xl"><i class="fa-brands fa-facebook-f"></i></span>
            <span class="flex-1 text-left">Sign In With Facebook</span>
          </button>
          <button
            class="border border-gray-300 rounded-full px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base font-medium flex items-center gap-3 hover:bg-gray-50 transition">
            <span class="text-lg sm:text-xl"><i class="fa-brands fa-apple"></i></span>
            <span class="flex-1 text-left">Sign In With Apple ID</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div
      class="footer-section w-full flex flex-col sm:flex-row justify-between items-center mt-4 sm:mt-6 text-xs sm:text-sm text-gray-400 font-medium pt-3 border-t border-gray-100 block md:hidden">
      <div class="flex gap-3 sm:gap-6 mb-3 sm:mb-0">
        <a href="#" class="hover:underline hover:text-gray-600">Privacy Policy</a>
        <a href="#" class="hover:underline hover:text-gray-600">Terms & Conditions</a>
      </div>
      <p>Copyright ©Spark Group 2025</p>
    </div>
  </div>

</body>

</html>