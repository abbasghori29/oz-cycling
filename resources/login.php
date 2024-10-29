<?php
session_start();
require_once '../connection.php';

// If already logged in, redirect to admin page
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin.php");
    exit();
}

// Process Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE user_name = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        
        // Send JSON response for AJAX request
        if(isset($_POST['ajax'])) {
            echo json_encode(['success' => true]);
            exit();
        }
        
        header("Location: admin.php");
        exit();
    } else {
        if(isset($_POST['ajax'])) {
            echo json_encode(['success' => false]);
            exit();
        }
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .spinner {
            display: none;
            border: 3px solid #f3f3f3;
            border-radius: 50%;
            border-top: 3px solid #3498db;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gray-800 flex items-center justify-center h-screen">
    <div class="bg-white text-gray-800 rounded-lg p-8 w-96 shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Admin Login</h2>
        <form id="loginForm" method="POST" action="">
            <div class="mb-4">
                <label for="username" class="block text-sm font-bold mb-2">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-bold mb-2">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <button type="button" id="togglePassword" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                        <i class="fas fa-eye text-gray-500"></i>
                    </button>
                </div>
            </div>
            <div class="flex justify-center items-center space-x-3">
                <button type="submit" id="loginBtn" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded shadow-md">
                    Login
                </button>
                <div id="spinner" class="spinner"></div>
            </div>
            <div id="errorMessage" class="mt-4 text-red-500 text-center hidden">
                Invalid username or password
            </div>
        </form>
    </div>

    <!-- Error Modal -->
    <div id="errorModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white text-gray-800 rounded-lg p-8 w-96 shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Login Error</h2>
            <p class="mb-6">The username or password you entered is incorrect. Please try again.</p>
            <div class="flex justify-end">
                <button type="button" id="closeErrorModalBtn" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded shadow-md">
                    Close
                </button>
            </div>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        
        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle eye icon
            const eyeIcon = this.children[0];
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });

        // Form Submission with AJAX
        const loginForm = document.getElementById('loginForm');
        const errorMessage = document.getElementById('errorMessage');
        const spinner = document.getElementById('spinner');
        const loginBtn = document.getElementById('loginBtn');

        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show spinner and disable button
            spinner.style.display = 'block';
            loginBtn.disabled = true;
            errorMessage.classList.add('hidden');

            const formData = new FormData(loginForm);
            formData.append('ajax', true);

            fetch(window.location.href, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.href = 'admin.php';
                } else {
                    errorMessage.classList.remove('hidden');
                    loginBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                errorMessage.classList.remove('hidden');
                loginBtn.disabled = false;
            })
            .finally(() => {
                spinner.style.display = 'none';
            });
        });

        // Error Modal Functionality
        const errorModal = document.getElementById('errorModal');
        const closeErrorModalBtn = document.getElementById('closeErrorModalBtn');

        closeErrorModalBtn.addEventListener('click', function() {
            errorModal.classList.add('hidden');
        });

        // Close modal when clicking outside
        window.addEventListener('click', function(e) {
            if (e.target === errorModal) {
                errorModal.classList.add('hidden');
            }
        });

        // Prevent form resubmission on page refresh
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>