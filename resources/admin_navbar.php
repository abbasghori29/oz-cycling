<?php

// Process Logout

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

?>
<!-- Navigation Bar -->
<nav class="bg-gray-900 shadow-lg py-4 px-6 mb-6">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-white">OZ Management Portal</h1>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-gray-300">Hello, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
                <a href="?logout=1" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-md">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>
            </div>
        </div>
    </nav>