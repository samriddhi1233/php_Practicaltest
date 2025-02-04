<?php
include 'partials/header.php';
?>

<div class="container mx-auto px-4 py-8 min-h-screen flex justify-center items-center bg-gray-100">
    <div class="max-w-3xl w-full bg-white rounded-lg shadow-md p-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Your Profile</h2>

        <!-- Success Message -->
        <?php if (!empty($success)): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?php echo htmlspecialchars($success, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <!-- Error Messages -->
        <?php if (!empty($errors)): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php foreach ($errors as $error): ?>
                    <p><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php
        // Ensure variables are not NULL before passing to htmlspecialchars
        $user['first_name'] = $user['first_name'] ?? '';
        $user['last_name'] = $user['last_name'] ?? '';
        $user['email'] = $user['email'] ?? '';
        $user['phone'] = $user['phone'] ?? '';
        $user['profile_photo'] = $user['profile_photo'] ?? '';

        $hasProfileData = !empty($user['phone']) || !empty($user['profile_photo']);
        ?>

        <!-- Profile Information -->
        <?php if ($hasProfileData): ?>
            <div id="profile-info" class="mb-8">
                <div class="flex items-center space-x-6">
                    <!-- Profile Photo -->
                    <?php if (!empty($user['profile_photo'])): ?>
                        <img src="<?php echo htmlspecialchars($user['profile_photo'], ENT_QUOTES, 'UTF-8'); ?>" 
                             alt="Profile Photo" 
                             class="w-24 h-24 rounded-full object-cover shadow-md">
                    <?php else: ?>
                        <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center text-gray-500">
                            <span>No Photo</span>
                        </div>
                    <?php endif; ?>

                    <!-- User Details -->
                    <div>
                        <h3 class="text-xl font-semibold"><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p class="text-gray-600">
                            <strong>Email:</strong> <?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>
                        </p>
                        <?php if (!empty($user['phone'])): ?>
                            <p class="text-gray-600">
                                <strong>Phone:</strong> <?php echo htmlspecialchars($user['phone'], ENT_QUOTES, 'UTF-8'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <button onclick="toggleForm()" 
                        class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded focus:outline-none focus:shadow-outline">
                    Update Profile
                </button>
            </div>
        <?php endif; ?>

        <!-- Profile Form -->
        <form method="POST" action="profile.php" enctype="multipart/form-data" 
              id="profile-form" class="<?php echo $hasProfileData ? 'hidden' : ''; ?>">
            <div class="mb-4">
                <label for="profile_photo" class="block text-gray-700 font-medium mb-2">Profile Photo</label>
                <input type="file" name="profile_photo" id="profile_photo" accept="image/*" 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" name="first_name" id="first_name" 
                       value="<?php echo htmlspecialchars($user['first_name'], ENT_QUOTES, 'UTF-8'); ?>" 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label>
                <input type="text" name="last_name" id="last_name" 
                       value="<?php echo htmlspecialchars($user['last_name'], ENT_QUOTES, 'UTF-8'); ?>" 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" 
                       value="<?php echo htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8'); ?>" 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-6">
                <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                <input type="tel" name="phone" id="phone" 
                       value="<?php echo htmlspecialchars($user['phone'], ENT_QUOTES, 'UTF-8'); ?>" 
                       class="w-full px-3 py-2 border rounded focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex justify-between">
                <?php if ($hasProfileData): ?>
                    <button type="button" onclick="toggleForm()" 
                            class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Cancel
                    </button>
                <?php endif; ?>

                <button type="submit" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    <?php echo $hasProfileData ? 'Save Changes' : 'Create Profile'; ?>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function toggleForm() {
    const form = document.getElementById('profile-form');
    const info = document.getElementById('profile-info');

    if (form.classList.contains('hidden')) {
        form.classList.remove('hidden');
        info.classList.add('hidden');
    } else {
        form.classList.add('hidden');
        info.classList.remove('hidden');
    }
}
</script>

<?php include 'partials/footer.php'; ?>