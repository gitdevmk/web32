<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Black-i</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body>

<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="index.php">Black-i</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
            <li class="active"><a href="about.php">About</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="cart.php">View Cart</a></li>
            <li><a href="orders.php">My Orders</a></li>
            <li><a href="contact.php">Contact</a></li>
            
            <?php
            if(isset($_SESSION['username'])){
                echo '<li><a href="account.php">My Account</a></li>';
                echo '<li><a href="logout.php">Log Out</a></li>';
            } else {
                echo '<li><a href="login.php">Log In</a></li>';
                echo '<li><a href="register.php">Register</a></li>';
            }
            ?>
        </ul>
    </section>
</nav>

<div class="row" style="margin-top:30px;">
    <div class="small-12">
        <img src="images/blackilogo.jpg" alt="Black-i Logo" position="center; style="width: 100%; max-width: 400px; height: auto;">

        <p>Introducing Black-I, a trailblazing brand that epitomizes technological innovation in the market. With over 6 years of industry expertise and a steadfast commitment to producing top-tier cable and converter solutions in India, Black-I stands as a beacon of excellence in the realm of electronic accessories.

At Black-I, our dedication to pushing the boundaries of what's possible is unwavering. We pride ourselves on integrating the latest technological advancements into our products, ensuring that our customers not only receive cutting-edge solutions but also experience the pinnacle of performance and functionality.

Our commitment to innovation is underscored by the meticulous selection of high-end processors and components, keeping us at the forefront of the dynamic technological landscape. Each Black-I product is more than a device; it's a testament to our relentless pursuit of excellence and our mission to exceed international standards.

Setting us apart is our steadfast dedication to customer satisfaction. Every Black-I product comes with a generous 3-year warranty, showcasing our confidence in the quality, durability, and reliability of our offerings. For specific products, we go the extra mile with an additional 1-year replacement warranty, emphasizing our commitment to customer peace of mind and ensuring confidence in every purchase.

In a competitive market where technology evolves rapidly, Black-I thrives by embracing the finest technological integrations. We believe in not just meeting but surpassing expectations, driving us to explore and implement the latest innovations that significantly enhance the value of our products.

Whether you seek smart devices, gadgets, or electronic solutions, Black-I is your trusted brand for a seamless blend of style, functionality, and technological prowess. Join us on a journey of innovation, where the future meets the present, and excellence isn't just a standard—it's a way of life. Elevate your technological experience with Black-I, where every product is a testament to our commitment to shaping the future of electronic accessories.
        </p>

         <!-- Feature 1: Simple Social Media Icons -->
         <div class="social-icons">
            <a href="https://linktr.ee/blackiofficial"><img src="images/linktree.png" alt="Linktree"></a>
            <!-- Add more social media icons as needed -->
        </div>
        <!-- Link to view or download software.txt -->
        <p style="font-size: 1.2em; font-weight: bold; text-align: center; margin-top: 20px;">
            <a href="images/software.txt" download>Software.txt</a>
        <p style="font-size: 1.2em; font-weight: bold; text-align: center; margin-top: 20px;">
         <p>Download Software.txt and copy paste link into your browser as per the product name!</p>

            <div class="trust-badges">
            <!!img src="images/ce.png" alt="Trust Badge 1">
            <img src="images/trustbadge2.jpg" alt="Trust Badge 2">
            <img src="images/trustbadge3.jpg" alt="Trust Badge 3">
            <!-- Add more trust badges as needed -->
            </div>

 <footer>
            <p style="text-align:center; font-size:0.8em;">&copy; Blacki Shop. All Rights Reserved.</p>
        </footer>

        </p>
    </div>
</div>
  

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
