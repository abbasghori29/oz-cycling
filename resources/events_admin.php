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

<html>
  <head>
    <title>OZ CYCLE TOURS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/cycle/static/images/logo-nobg.png" type="image/icon type">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/cycle/static/css/main.css">
  </head>


  <body class="bg-gray-800">
  <?php 
    include $parentDirectory."resources/admin_navbar.php";
    ?>
    <?php 
    include $parentDirectory."resources/events.php";
    ?>
   </body>
</html>
