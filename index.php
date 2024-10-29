<?php
$parentDirectory="c:/xampp/htdocs/cycle/";
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  </head>


  <body class="bg-gray-800">
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
    <!-- Landing Section -->
    <?php 
    include $parentDirectory."resources/landing.php";
    ?>
    <!-- Custom Tours Section -->
    <?php 
    include $parentDirectory."resources/customTours.php";
    ?>
    <!-- Events Section -->
    <?php 
    include $parentDirectory."resources/events.php";
    ?>
    <!-- Booking Section -->
    <?php 
    include $parentDirectory."resources/booking.php";
    ?>
    <!-- About Us Section -->
    <?php 
    include $parentDirectory."resources/aboutUs.php";
    ?>
    <!-- gallery section -->
    <?php 
    include $parentDirectory."resources/gallery.php";
    ?>
    <!-- reviews -->
    <?php 
    include $parentDirectory."resources/reviews.php";
    ?>
    <!-- partners section -->
    <?php 
    include $parentDirectory."resources/partners.php";
    ?>
    <!-- footer   -->
      <?php 
    include $parentDirectory."resources/footer.php";
    ?>
    <!--Script  -->
    <script src="/cycle/static/js/script.js"></script>
      
      <script>
    

      </script>
  </body>
</html>
