<?php

include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ja's K-Mart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-season.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- navigation bar -->
    <nav>
        <div class="navbar">
            <div class="logo"><a href="index.php">JA'S K-MART</a></div>
            <div class="nav-links">
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a>Categories</a>
                        <i class='bx bxs-chevron-down arrwo htmlcss-arrow'></i>
                        <ul class="htmlcss-sub-menu sub-menu">
                            <li><a href="noodles.php">Noodles</a></li>
                            <li><a href="snacks.php">Snacks</a></li>
                            <li><a href="drinks.php">Drinks</a></li>
                            <li><a href="Ice-cream.php">Ice Creams</a></li>
                            <li><a href="meat.php">Meats/Dumplings</a></li>
                            <li><a href="seaweed.php">Homemade Dishes</a></li>
                            <li><a href="seasoned.php">Seasoned (Sauce/Powder)</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">About us</a></li>
                </ul>
            </div>
            <form action="searchrest.php" method="post">
                <div class="search-box">
                    <i class='bx bx-search-alt'></i>
                    <div class="input-box">
                        <input type="text" name="search_query" placeholder="Search...">
                    </div>
                    <button type="submit" name="search"></button>
                </div>
            </form>
        </div>
    </nav>
    <!-- navigation bar end -->


    <!-- PRODUCTS -->
    <div class="head">
        <img src="assets/images/page banner/seasoning.jpg">
    </div>
    <section class="container">
        <div class="products-container">

            <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `seasoned`");

      if (mysqli_num_rows($select_product) > 0) {
        while ($fetch_product = mysqli_fetch_assoc($select_product)) {
      ?>
            <form action="" method="post">
                <div class="product">
                    <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                    <h3><?php echo $fetch_product['name']; ?></h3>
                    <div class="price">₱<?php echo $fetch_product['price']; ?></div>
                </div>
            </form>
            <?php
        }
      }
      ?>

        </div>
    </section>



    <!-- footer -->
    <footer>
        <div class="foot-quick">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="noodles.php">Noodles</a></li>
                <li><a href="snacks.php">Snacks</a></li>
                <li><a href="drinks.php">Drinks</a></li>
                <li><a href="Ice-cream.php">Ice Creams</a></li>
                <li><a href="meat.php">Meats/Dumplings</a></li>
                <li><a href="seaweed.php">Homemade Dishes</a></li>
                <li><a href="seasoned.php">Seasoned</a></li>
            </ul>
        </div>
        <div class="foot">
            <h3>Contact Us</h3>
            <p><?php echo file_exists('footer_contacts.txt') ? file_get_contents('footer_contacts.txt') : ''; ?></p>

            <h3 class="soc">Socials</h3>
            <ul class="social-links">
                <li><a href="https://www.facebook.com/profile.php?id=61555746488662"><i class="bx bxl-facebook-square"></i></a></li>
            </ul>
        </div>
        <div class="foot">
            <h3>Address</h3>
            <p><?php echo file_exists('address.txt') ? file_get_contents('address.txt') : ''; ?></p>
        </div>
        <div class="foot">
            <h3>Opening Hours</h3>
            <p><?php echo file_exists('opening_hours.txt') ? file_get_contents('opening_hours.txt') : ''; ?></p>
        </div>
    </footer>
    <!-- footer end -->


    <script src="assets/js/script-season.js"></script>
</body>

</html>