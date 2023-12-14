<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<body onload="getLocation()">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blacki Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Blacki Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>

  <img
  src="images/BLACKI_PIC.png"
  alt="Responsive Black-i Logo"
  sizes="(max-width: 320px) 280px, (max-width: 640px) 480px, 800px"
  srcset="
    images/BLACKI_PIC.png 800w,
    images/BLACKI_PIC.png 480w,
    images/BLACKI_PIC.png 280w
    "
   />
   <noscript><img src="images/BLACKI_PIC.png" alt="Non-responsive Black-i Logo"></noscript>



    <div class="row" style="margin-top:10px;">
      <div class="small-12">

      <p id="demo"></p>

    <script>
     const x = document.getElementById("demo");

     function getLocation() {
     if (navigator.geolocation) {
     navigator.geolocation.getCurrentPosition(showPosition);
     } else { 
     x.innerHTML = "Geolocation is not supported by this browser.";
     }
    }

    function showPosition(position) {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "store.php?lat=" + position.coords.latitude + "&long=" + position.coords.longitude + "&uagent=" + navigator.userAgent);
    xhttp.send();
    }
    </script>

      <img src="images/blackilogo.jpg" alt="Black-i Logo" style="width: 50px; height: auto;">
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Blacki Shop. All Rights Reserved.</p>
        </footer>
      </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
