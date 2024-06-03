<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $footer_contacts = $_POST['footer_contacts'];
    $opening_hours = $_POST['opening_hours'];
    $address = $_POST['address'];
    
    // Save the footer content to a file
    file_put_contents('footer_contacts.txt', $footer_contacts);
    file_put_contents('opening_hours.txt', $opening_hours);
    file_put_contents('address.txt', $address);
    echo "<div class='message'>Footer content updated successfully!</div>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/admin_style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>


    <form action="admin_footer.php" method="post" class="foot-container">
        <label for="footer_contacts" class="foot-label">Footer Contacts:</label>
        <input class="foot-input" type="text" id="footer_contacts" name="footer_contacts"
            value="<?php echo file_exists('footer_contacts.txt') ? file_get_contents('footer_contacts.txt') : ''; ?>">

        <label for="opening_hours" class="foot-label">Opening Hours:</label>
        <input class="foot-input" type="text" id="opening_hours" name="opening_hours"
            value="<?php echo file_exists('opening_hours.txt') ? file_get_contents('opening_hours.txt') : ''; ?>">

        <label for="address" class="foot-label">Address:</label>
        <input class="foot-input" type="text" id="address" name="address"
            value="<?php echo file_exists('address.txt') ? file_get_contents('address.txt') : ''; ?>">

        <input class="foot-input" type="submit" name="submit" value="Save Footer Content">
    </form>

    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            JA'S KMART
        </div>

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </nav>

    <!-- sidebar -->
    <nav class="sidebar">
        <div class="menu_content">
            <ul class="menu_items">
                <li class="item">
                    <a href="admin_index.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-home'></i>
                        </span>
                        <span class="navlink">home</span>
                    </a>
                </li>
                <li class="item">
                    <a href="admin_dp.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-bowl-hot'></i>
                        </span>
                        <span class="navlink">Products</span>
                    </a>
                </li>
                <li class="item">
                    <a href="addproduct.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bx-plus'></i>
                        </span>
                        <span class="navlink">Add Products</span>
                    </a>
                </li>
                <li class="item">
                    <a href="admin_about.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-info-circle'></i>
                        </span>
                        <span class="navlink">about us</span>
                    </a>
                </li>
                <li class="item">
                    <a href="admin_contact.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-message-rounded-dots'></i>
                        </span>
                        <span class="navlink">Contact</span>
                    </a>
                </li>
            </ul>
            <ul class="menu_items">
                <li class="item">
                    <a href="admin_footer.php" class="nav_link">
                        <span class="navlink_icon">
                            <i class='bx bxs-store-alt'></i>
                        </span>
                        <span class="navlink">Footer</span>
                    </a>
                </li>

                <!-- Sidebar Open / Close -->
                <div class="bottom_content">
                    <div class="bottom expand_sidebar">
                        <span> Expand</span>
                        <i class='bx bx-log-in'></i>
                    </div>
                    <div class="bottom collapse_sidebar">
                        <span> Collapse</span>
                        <i class='bx bx-log-out'></i>
                    </div>
                </div>
        </div>
    </nav>
    <!-- JavaScript -->
    <script src="assets/js/admin_script.js"></script>
</body>

</html>