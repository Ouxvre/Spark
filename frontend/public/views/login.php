<!-- alert -->

<?php if (isset($_GET['registered']) && $_GET['registered'] == 'success'): ?>
  <div id="toast">✅ Registrasi berhasil! Silakan login.</div>
  <script>
    let toast = document.getElementById("toast");
    toast.classList.add("show");

    setTimeout(() => {
      toast.classList.remove("show");
    }, 3000);
  </script>
<?php endif; ?>

<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - Spark</title>
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

    /* Toast container */
    #toast {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #2ecc71;
      color: #fff;
      text-align: center;
      border-radius: 8px;
      padding: 16px;
      position: fixed;
      z-index: 1000;
      right: 20px;
      top: 20px;
      font-size: 14px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.5s ease-in-out;
      opacity: 0;
    }

    /* Saat aktif */
    #toast.show {
      visibility: visible;
      opacity: 1;
      transform: translateX(0);
    }
  </style>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen h-screen overflow-hidden">
  <!-- Big Card -->
  <div
    class="bg-white w-full max-w-6xl rounded-3xl shadow-2xl p-12 flex flex-col h-[90vh] justify-center">
    <!-- Header -->
    <div class="flex justify-between items-center">
      <h1 class="text-4xl font-bold text-black">
        Spark<span class="text-blue-500">.</span>
      </h1>
      <a
        href="../views/register.php"
        class="bg-blue-400 text-white px-8 py-3 text-lg font-medium rounded-full hover:bg-blue-500 transition">
        Register
      </a>
    </div>

    <!-- Title -->
    <div class="text-center">
      <h2
        class="text-6xl leading-[0.9]"
        style="font-family: 'Clearface', serif">
        <span class="text-blue-500">Login</span> To Your <br />
        <span class="relative top-1">Account</span>
      </h2>
      <p class="text-gray-500 mt-6 text-base font-normal">
        “Start practicing your English interview skills with AI.”
      </p>
    </div>

    <!-- Content -->
    <div
      class="flex justify-center gap-10 mt-3 flex-col md:flex-row items-center flex-1">
      <!-- Left: Login Form -->
      <form action="../../../backend/auth/login.php" method="POST" class="flex flex-col gap-6 w-80">
        <input
          type="text"
          name="identifier"
          placeholder="Phone/Email"
          required
          class="border border-gray-300 rounded-full px-6 py-3 text-[16px] font-medium focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <input
          type="password"
          name="password"
          placeholder="Password"
          required
          class="border border-gray-300 rounded-full px-6 py-3 text-[16px] font-medium focus:outline-none focus:ring-2 focus:ring-blue-400" />

        <button
          type="submit"
          class="bg-black text-white rounded-full px-6 py-3 text-[16px] font-semibold hover:bg-gray-800 transition flex items-center justify-center gap-2">
          Login To Your Account
          <span class="text-xl"><i class="fa-solid fa-arrow-right"></i></span>
        </button>
      </form>

      <!-- Divider -->
      <div class="h-full border-l border-gray-300"></div>


      <!-- Right: Social Login -->
      <div class="flex flex-col gap-6 w-80">
        <button
          class="border border-gray-300 rounded-full px-6 py-3 text-[15px] font-medium flex items-center gap-3 hover:bg-gray-50 transition">
          <span class="text-2xl"><i class="fa-brands fa-google"></i></span>
          Sign In With Google Account
        </button>
        <button
          class="border border-gray-300 rounded-full px-6 py-3 text-[15px] font-medium flex items-center gap-3 hover:bg-gray-50 transition">
          <span class="text-2xl"><i class="fa-brands fa-facebook-f"></i></span>
          Sign In Facebook Account
        </button>
        <button
          class="border border-gray-300 rounded-full px-6 py-3 text-[15px] font-medium flex items-center gap-3 hover:bg-gray-50 transition">
          <span class="text-2xl"><i class="fa-brands fa-apple"></i></span>
          Sign In Apple ID
        </button>
      </div>
    </div>

    <!-- Forgot Password -->
    <a
      href="forgot.php"
      class="text-base text-gray-500 font-medium mt-6 text-center hover:underline">Forgot Password?</a>

    <!-- Footer -->
    <div
      class="w-full flex justify-between items-center mt-auto text-sm text-gray-400 font-medium pt-3">
      <div class="flex gap-6">
        <a href="#" class="hover:underline">Privacy Policy</a>
        <a href="#" class="hover:underline">Terms & Conditions</a>
      </div>
      <p>Copyright ©Spark Group 2025</p>
    </div>

    <!-- Hiasan DOTS -->
    <!-- <div class="absolute bottom-12 right-6 w-48 h-48 pointer-events-none select-none opacity-15">
      <svg class="w-full h-full" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
        <defs>
          <pattern id="dots" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
            <circle cx="1" cy="1" r="1" fill="#3f6fff" />
          </pattern>
        </defs>
        <rect width="192" height="192" rx="24" fill="url(#dots)" />
      </svg>
    </div> -->
  </div>
</body>

</html>