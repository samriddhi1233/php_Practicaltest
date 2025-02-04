<?php
include 'partials/header.php';
?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-100 to-blue-200">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">
            Create an Account 🚀
        </h2>

        <?php if (!empty($errors)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <!-- First Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold" for="first_name">
                    First Name
                </label>
                <input class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
            </div>

            <!-- Last Name -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold" for="last_name">
                    Last Name
                </label>
                <input class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold" for="email">
                    Email Address
                </label>
                <input class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="email" name="email" id="email" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold" for="password">
                    Password
                </label>
                <input class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400"
                    type="password" name="password" id="password" placeholder="Create a password" required>
            </div>

            <!-- Submit Button -->
            <button class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg shadow-md hover:bg-blue-700 transition">
                Register
            </button>

            <!-- Already have an account? -->
            <p class="text-center text-gray-600 mt-4">
                Already have an account? 
                <a href="login.php" class="text-blue-600 hover:text-blue-800 font-semibold">Log in</a>
            </p>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
