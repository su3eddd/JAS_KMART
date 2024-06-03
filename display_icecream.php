<?php

@include 'config.php';

if (isset($_POST['add_product'])) {

   $select = $_POST['select'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   
   if (empty($select) || empty($product_name) || empty($product_price) || empty($product_image)) {
      $message[] = 'please fill out all';
   }

   switch ($select) {
      case 'Noodles':
         $tablename = 'product';
         break;

      case 'BestSeller':
         $tablename = 'bestseller';
         break;
         
      case 'NewArrival': 
         $tablename = 'newarrival';
         break;

      case 'Snacks':
         $tablename = 'snacks';
         break;

      case 'Drinks':
         $tablename = 'drinks';
         break;

      case 'Ice Creams':
         $tablename = 'ice_cream';
         break;

      case 'Meats/Dumplings':
         $tablename = 'meat';
         break;

      case 'Homemade Dishes':
         $tablename = 'dishes';
         break;

      case 'Seasoned (Sauce/Powder)':
         $tablename = 'seasoned';
         break;

      default:
         echo "Invalid Category";
         break;
   }

      $insert = "INSERT INTO $tablename(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         echo "<script> 
                alert('New Product Added Successfully!');
                window.open('display_icecream.php','_self');
              </script>";
      } else {
         $message[] = 'could not add the product';
      }
};

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM ice_cream WHERE id = $id");
   header('location: display_icecream.php');
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JA'S KMART PRODUCTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/crude_style.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }
   ?>

    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th><a href="admin_dp.php">Noodles</a></th>
                    <th><a href="display_bestseller.php">Best Seller</a></th>
                    <th><a href="display_newarrival.php">New Arrival</a></th>
                    <th><a href="display_snacks.php">Snacks</a></th>
                    <th><a href="display_drinks.php">Drinks</a></th>
                    <th><a href="display_icecream.php">Ice Creams</a></th>
                    <th><a href="display_meat.php">Meats/Dumplings</a></th>
                    <th><a href="display_dishes.php">Homemade Dishes</a></th>
                    <th><a href="display_seasoned.php">Seasoned(Sauce/Powder)</a></th>
                </tr>
            </thead>
        </table>
    </div>

    <?php
      $select = mysqli_query($conn, "SELECT * FROM ice_cream");

      ?>

    <!-- dipplay added product -->
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>product image</th>
                    <th>product name</th>
                    <th>product price</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
            <tr>
                <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                <td><?php echo $row['name']; ?></td>
                <td>₱<?php echo $row['price']; ?></td>
                <td>
                    <a href="update products/upcream.php?edit=<?php echo $row['id']; ?>" class="btn"> <i
                            class="fas fa-edit"></i> edit </a>
                    <a href="display_icecream.php?delete=<?php echo $row['id']; ?>" class="btn"> <i
                            class="fas fa-trash"></i> delete </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    </div>

    <!-- navbar -->
    <nav class="navbar">
        <div class="logo_item">
            <i class="bx bx-menu" id="sidebarOpen"></i>
            JA'S KMART
        </div>

        <div class="navbar_content">
            <i class="bi bi-grid"></i>
            <a href="logout.php" class="">logout</a>
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
                    <a href="#" class="nav_link">
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