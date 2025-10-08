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

      /* Responsive font sizes */
      h1 {
        font-size: clamp(1.5rem, 4vw, 2.25rem);
      }

      h2 {
        font-size: clamp(1.75rem, 5vw, 3.25rem);
      }

      @media (max-width: 768px) {
        .card-container {
          padding: 1.5rem;
          height: auto;
          min-height: 100vh;
        }

        .content-container {
          flex-direction: column;
          gap: 1.5rem;
        }

        .illustration-container,
        .form-container {
          width: 100%;
          max-width: 24rem;
        }

        .form-container {
          padding: 0 1rem;
        }

        .email-input {
          width: 100%;
          max-width: 20rem;
        }
      }
    </style>
  </head>

  <body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Card Container -->
    <div
      class="card-container bg-white w-full max-w-7xl rounded-3xl shadow-lg p-6 sm:p-12 flex flex-col items-center relative"
    >
      <!-- Header -->
      <div
        class="flex justify-between items-center w-full mb-6 sm:mb-8"
      >
        <h1 class="text-2xl sm:text-3xl font-bold text-black">
          Spark<span class="text-blue-500">.</span>
        </h1>
        <a
          href="login.php"
          class="bg-blue-400 text-white px-4 sm:px-6 py-2 text-sm sm:text-base font-medium rounded-full hover:bg-blue-500 transition"
        >
          Login
        </a>
      </div>

      <!-- Content -->
      <div class="content-container flex flex-col md:flex-row flex-1 w-full gap-6 sm:gap-10">
        <!-- Left Illustration -->
        <div class="illustration-container flex items-center justify-center w-full md:w-1/2">
          <img
            src="../../src/assets/img/forgot_password.png"
            alt="Forgot Password Illustration"
            class="w-full max-w-xs sm:max-w-sm"
          />
        </div>

        <!-- Right Form -->
        <div class="form-container w-full md:w-1/2 flex flex-col justify-center px-4 sm:px-12">
          <h2 class="font-bold leading-tight mb-3" style="font-family: 'Clearface', serif">
            Forgot <br />
            Password<span class="text-blue-400">?</span>
          </h2>
          <p class="text-gray-600 text-sm sm:text-base mb-6 sm:mb-8 w-full max-w-xs sm:max-w-md">
            Enter the email address associated <br />
            with your account.
          </p>

          <!-- Input Email -->
          <div class="mb-6 sm:mb-8">
            <label class="block text-gray-700 text-sm sm:text-base font-medium mb-2 sm:mb-3">
              Enter Email Address
            </label>
            <input
              type="email"
              placeholder="example@email.com"
              class="email-input w-full border-b border-gray-400 focus:outline-none focus:border-blue-400 text-sm sm:text-base py-2"
            />
          </div>

          <!-- Next Button -->
          <button
            class="bg-blue-400 hover:bg-blue-500 text-white font-medium px-6 sm:px-8 py-3 sm:py-4 rounded-full w-full max-w-40 text-sm sm:text-base"
          >
            Next
          </button>
        </div>
      </div>

      <!-- Footer -->
      <div
        class="w-full flex flex-col sm:flex-row justify-between items-center px-3 py-1 text-xs sm:text-sm text-gray-400 font-medium mt-6 sm:mt-8"
      >
        <div class="flex gap-4 sm:gap-6 mb-4 sm:mb-0">
          <a href="#" class="hover:underline">Privacy Policy</a>
          <a href="#" class="hover:underline">Terms & Conditions</a>
        </div>
        <p>Copyright ©Spark Group 2025</p>
      </div>
    </div>
  </body>
</html>