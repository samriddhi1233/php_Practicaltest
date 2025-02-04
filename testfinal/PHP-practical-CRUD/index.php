<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Smooth fade-in animation */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 1s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Ensure footer stays at the bottom */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <header class="bg-gray-900 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <a href="index.html" class="text-2xl font-bold tracking-wide text-yellow-400">
                PHP User System
            </a>
            
            <!-- Navigation Links -->
            <nav>
                <ul class="flex space-x-6 text-lg font-medium">
                    <li><a href="index.php" class="hover:text-yellow-400 transition">Home</a></li>
                    <li><a href="profile.php" class="hover:text-yellow-400 transition">Profile</a></li>
                    <li><a href="login.php" class="hover:text-yellow-400 transition">Login</a></li>
                    <li><a href="register.php" class="hover:text-yellow-400 transition">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-6 py-16 flex flex-col-reverse md:flex-row items-center justify-between fade-in">
        <!-- Left Content -->
        <div class="text-center md:text-left md:w-1/2">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4">
                Welcome to Your User Dashboard! 🚀
            </h1>
            <p class="text-lg text-gray-700 mb-6">
                Manage your profile, connect with others, and experience a secure, easy-to-use platform.
            </p>
            <div class="flex justify-center md:justify-start space-x-4">
                <a href="login.php" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-lg transition">
                    Get Started
                </a>
                <a href="register.php" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition">
                    Sign Up
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="md:w-1/2 flex justify-center">
            <img src="https://i.pinimg.com/736x/ee/79/dd/ee79dd4b083c03680ff0b9672b53c695.jpg" alt="Welcome Image" class="rounded-lg shadow-lg">
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-center text-gray-400 py-4 mt-10">
        &copy; 2025 PHP User System. All rights reserved.
    </footer>

</body>
</html>
