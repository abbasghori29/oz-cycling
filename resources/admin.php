<?php

$parentDirectory="c:/xampp/htdocs/cycle/";

session_start();


// Check if the user is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$username = isset($_SESSION['admin_username']) ? $_SESSION['admin_username'] : 'Guest';
?>


<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-800">
        <!-- admin Navigation Bar -->
        <?php include $parentDirectory."resources/admin_navbar.php";?>

    <div class="text-center text-white py-20">
        <h1 class="text-7xl font-bold">OZ Cycling Admin Portal</h1>
        <h2 class="text-5xl mt-4">Manage Your Events Here!</h2>
    </div>
    <div class="flex justify-center space-x-8 px-4">
        <button onclick="window.location.href='events_admin.php'" class="bg-white rounded-lg shadow-lg p-8 text-center w-80 focus:outline-none">
            <i class="fas fa-calendar-alt text-4xl text-gray-700 mb-4"></i>
            <h3 class="text-xl font-bold mb-4">All Events</h3>
        </button>
        <button onclick="window.location.href='manageEvents.php'" class="bg-white rounded-lg shadow-lg p-8 text-center w-80 focus:outline-none">
            <i class="fas fa-tasks text-4xl text-gray-700 mb-4"></i>
            <h3 class="text-xl font-bold mb-4">Manage Events</h3>
        </button>
    </div>
</body>
</html>
