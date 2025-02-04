<?php 
include 'partials/header.php';
?>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-100 to-blue-200">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-3xl font-bold text-center text-blue-800 mb-6">
            Welcome Back! 👋
        </h2>

        <?php if(isset($error)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="login.php">
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
                    type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <button class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg shadow-md hover:bg-blue-700 transition">
                Sign In
            </button>

            <!-- Forgot Password + Sign Up -->
            <div class="text-center mt-4 text-gray-600">
                <p>
                    Don't have an account? 
                    <a href="register.php" class="text-blue-600 hover:text-blue-800 font-semibold">Register here</a>
                </p>
            </div>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
