<?php

$parentDirectory="c:/xampp/htdocs/cycle/";

session_start();
require_once '../connection.php';

// Check if user is not logged in
if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<head>
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
<body class="bg-gray-800 text-white">
    <!-- admin Navigation Bar -->
    <?php include $parentDirectory."resources/admin_navbar.php";?>

    <div class="container mx-auto p-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">All Events</h1>
            <button id="createEventBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                <i class="fas fa-plus mr-2"></i>Create Event
            </button>
        </div>
        <ul id="eventList" class="space-y-4">
            <!-- Example Event Item -->
            <li class="bg-gray-700 p-4 rounded-lg flex justify-between items-center shadow-md">
                <div>
                    <h2 class="text-xl font-bold">Event Name</h2>
                    <p>Date: 2023-10-01</p>
                    <p>Time: 2pm-3pm</p>
                </div>
                <div class="space-x-2">
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded shadow-md editEventBtn">
                        <i class="fas fa-edit mr-2"></i>Edit
                    </button>
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-md deleteEventBtn">
                        <i class="fas fa-trash mr-2"></i>Delete
                    </button>
                </div>
            </li>
            <!-- Repeat for each event -->
        </ul>
    </div>

    <!-- Modal -->
    <div id="eventModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white text-gray-800 rounded-lg p-8 w-96 shadow-lg">
            <h2 id="modalTitle" class="text-2xl font-bold mb-4">Create Event</h2>
            <form id="eventForm">
                <div class="mb-4">
                    <label for="eventName" class="block text-sm font-bold mb-2">Event Name</label>
                    <input type="text" id="eventName" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="eventDate" class="block text-sm font-bold mb-2">Event Date</label>
                    <input type="date" id="eventDate" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="eventTime" class="block text-sm font-bold mb-2">Event Time</label>
                    <input type="text" id="eventTime" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., 2pm-3pm" required>
                </div>
                <div class="mb-4">
                    <label for="eventImage" class="block text-sm font-bold mb-2">Event Image</label>
                    <input type="file" id="eventImage" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="cancelBtn" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded shadow-md">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white text-gray-800 rounded-lg p-8 w-96 shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Confirm Deletion</h2>
            <p class="mb-6">Are you sure you want to delete this event?</p>
            <div class="flex justify-end space-x-2">
                <button type="button" id="cancelDeleteBtn" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded shadow-md">
                    Cancel
                </button>
                <button type="button" id="confirmDeleteBtn" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-md">
                    Delete
                </button>
            </div>
        </div>
    </div>

    <script>
        // Confirmation before logout
        document.querySelector('a[href="?logout=1"]').addEventListener('click', function(e) {
            if(!confirm('Are you sure you want to logout?')) {
                e.preventDefault();
            }
        });

        document.getElementById('createEventBtn').addEventListener('click', function() {
            document.getElementById('modalTitle').innerText = 'Create Event';
            document.getElementById('eventForm').reset();
            document.getElementById('eventModal').classList.remove('hidden');
        });

        document.querySelectorAll('.editEventBtn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('modalTitle').innerText = 'Edit Event';
                // Populate form with event data here
                document.getElementById('eventModal').classList.remove('hidden');
            });
        });

        document.getElementById('cancelBtn').addEventListener('click', function() {
            document.getElementById('eventModal').classList.add('hidden');
        });

        document.getElementById('eventForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Handle form submission here
            document.getElementById('eventModal').classList.add('hidden');
        });

        document.querySelectorAll('.deleteEventBtn').forEach(button => {
            button.addEventListener('click', function() {
                document.getElementById('deleteModal').classList.remove('hidden');
            });
        });

        document.getElementById('cancelDeleteBtn').addEventListener('click', function() {
            document.getElementById('deleteModal').classList.add('hidden');
        });

        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            // Handle deletion here
            document.getElementById('deleteModal').classList.add('hidden');
        });
    </script>
</body>
</html>