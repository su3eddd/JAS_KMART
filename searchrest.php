<?php
@include 'config.php';

// Search functionality
if (isset($_POST['search'])) {
    $search_query = $_POST['search_query'];
    $search_query = mysqli_real_escape_string($conn, $search_query);

    $search_results = array();

    //  search on all product tables
    $tables = array('product', 'bestseller', 'newarrival', 'snacks', 'drinks', 'ice_cream', 'meat', 'dishes', 'seasoned');

    foreach ($tables as $table) {
        $query = "SELECT * FROM $table WHERE name LIKE '%$search_query%'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $row['table'] = $table;
            $search_results[] = $row;
        }
    }
}

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
    <link rel="stylesheet" href="assets/css/style-search.css">
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


    <!-- Display search results -->
    <div class="container">
        <h3 class="title">Search Results</h3>
        <div class="products-container">
            <?php
        if (isset($search_results)) {
            if (count($search_results) > 0) {
                foreach ($search_results as $product) {
        ?>
            <div class="product">
                <img src="uploaded_img/<?php echo $product['image']; ?>" alt="">
                <h3><?php echo $product['name']; ?></h3>
                <div class="price">₱<?php echo $product['price']; ?></div>
                <div class="category">Category: <?php echo $product['table']; ?></div>
            </div>
            <?php
                }
            } else {
                echo "<p>No results found.</p>";
            }
        }
        ?>
        </div>
    </div>



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

    <script src="assets/js/index-script.js"></script>
</body>

</html>