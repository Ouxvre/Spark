<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password - Spark</title>

    <!-- Google Font Poppins -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

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
    </style>
  </head>

  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Card Container -->
    <div
      class="bg-white w-full max-w-7xl rounded-3xl shadow-lg p-12 flex flex-col items-center relative"
    >
      <!-- Header -->
      <div
        class="absolute top-6 left-8 flex justify-between items-center w-[calc(100%-4rem)]"
      >
        <h1 class="text-4xl font-bold text-black">
          Spark<span class="text-blue-500">.</span>
        </h1>
        <a
          href="login.php"
          class="bg-blue-400 text-white px-8 py-3 text-lg font-medium rounded-full hover:bg-blue-500 transition"
        >
          Login
        </a>
      </div>

      <!-- Content -->
      <div class="flex flex-1">
        <!-- Left Illustration -->
        <div class="w-1/2 flex items-center justify-center">
          <img
            src="../../src/assets/img/forgot_password.png"
            alt="Forgot Password Illustration"
            class="max-w-[420px]"
          />
        </div>

        <!-- Right Form -->
        <div class="w-1/2 px-24 flex flex-col justify-center">
          <h2 class="text-[52px] font-bold leading-tight mb-3">
            Forgot <br />
            Password<span class="text-blue-400">?</span>
          </h2>
          <p class="text-gray-600 text-lg mb-10 w-[360px]">
            Enter the email address associated <br />
            with your account.
          </p>

          <!-- Input Email -->
          <div class="mb-8">
            <label class="block text-gray-700 text-base font-medium mb-3">
              Enter Email Address
            </label>
            <input
              type="email"
              placeholder="example@email.com"
              class="w-full border-b border-gray-400 focus:outline-none focus:border-blue-400 text-base py-2"
            />
          </div>

          <!-- Next Button -->
          <button
            class="bg-blue-400 hover:bg-blue-500 text-white font-medium px-10 py-4 rounded-full w-40 text-lg"
          >
            Next
          </button>
        </div>
      </div>

      <!-- Footer -->
      <div
        class="w-full flex justify-between items-center px-3 py-1 text-sm text-gray-400 font-medium relative bottom-0"
      >
        <div class="flex gap-6">
          <a href="#" class="hover:underline">Privacy Policy</a>
          <a href="#" class="hover:underline">Terms & Conditions</a>
        </div>
        <p>Copyright ©Spark Group 2025</p>
      </div>
    </div>
  </body>
</html>
