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
                window.open('addproduct.php','_self');
              </script>";
      } else {
         $message[] = 'could not add the product';
      }
};

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM product WHERE id = $id");
   header('location: addproduct.php');
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
   <div class="container">
      <div class="admin-product-form-container">
         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>add a new product</h3>
            <select name="select" class="box">
               <option value="Noodles">Noodles</option>
               <option value="BestSeller">Best Seller</option>
               <option value="NewArrival">New Arrival</option>
               <option value="Snacks">Snacks</option>
               <option value="Drinks">Drinks</option>
               <option value="Ice Creams">Ice Creams</option>
               <option value="Meats/Dumplings">Meats/Dumplings</option>
               <option value="Homemade Dishes">Homemade Dishes</option>
               <option value="Seasoned (Sauce/Powder)">Seasoned (Sauce/Powder)</option>
            </select>
            <input type="text" placeholder="enter product name" name="product_name" class="box">
            <input type="number" placeholder="enter product price" name="product_price" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
            <input type="submit" class="btn" name="add_product" value="add product">
         </form>
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
            <a href="admin_about.php" class="nav_link">
              <span class="navlink_icon">
               <i class='bx bxs-info-circle' ></i>
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
            <i class='bx bx-log-in' ></i>
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