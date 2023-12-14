<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Blacki Shop</title>
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
          <li class="active"><a href="contact.php">Contact</a></li>
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




    <div class="row" style="margin-top:30px;">
      <div class="small-22">
      <img src="images/blackilogo.jpg" alt="Black-i Logo" style="width: 50px; height: auto;">
        <p>Wanna get in touch. Email us at <a href="mailto:mehulkothariofficial@gmail.com">mehulkothariofficial@gmail.com</a>
            or call us on +91 79757 76280 / 97400 77581
        </p>

      <!-- Link to view or download software.txt -->
      <p style="font-size: 1.2em; font-weight: bold; text-align: center; margin-top: 20px;">
         <p>Download Software.txt and copy paste link into your browser as per the product name!</p>
         <p style="font-size: 1.2em; font-weight: bold; text-align: center; margin-top: 20px;">
            <a href="images/software.txt" download>Software.txt</a>

           <!-- Feature 1: Simple Social Media Icons -->
        <div class="social-icons">
            <a href="https://linktr.ee/blackiofficial"><img src="images/linktree.png" alt="Linktree"></a>
            <!-- Add more social media icons as needed -->
        </div>

            <div class="trust-badges">
            <!!img src="images/ce.png" alt="Trust Badge 1">
            <img src="images/trustbadge2.jpg" alt="Trust Badge 2">
            <img src="images/trustbadge3.jpg" alt="Trust Badge 3">
            <!-- Add more trust badges as needed -->
            </div>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Blacki Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
