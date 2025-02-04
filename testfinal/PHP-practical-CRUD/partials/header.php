<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile System</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-gray-900 text-white py-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <a href="index.php" class="text-2xl font-bold tracking-wide text-yellow-400" style="font-family: 'Bebas Neue', sans-serif;">
                PHP Assignment
            </a>
            
            <!-- Navigation Menu -->
            <nav>
                <ul class="flex space-x-6 text-lg font-medium">
                    <li><a href="index.php" class="hover:text-yellow-400 transition">Home</a></li>
                    <li><a href="profile.php" class="hover:text-yellow-400 transition">Profile</a></li>
                    <?php if(isset($_SESSION['user_id'])): ?>
                        <li><a href="logout.php" class="hover:text-yellow-400 transition">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php" class="hover:text-yellow-400 transition">Login</a></li>
                        <li><a href="register.php" class="hover:text-yellow-400 transition">Register</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>


</body>
</html>
