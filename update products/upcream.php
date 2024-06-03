<?php

@include '../config.php';

$id = $_GET['edit'];

if (isset($_POST['update_product'])) {

   $select = $_POST['select'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/' . $product_image;

   $tablename = 'ice_cream';

   if (empty($product_name) || empty($product_price) || empty($product_image)) {
      $message[] = 'please fill out all!';
   } else {

      $update_data = "UPDATE $tablename SET name='$product_name', price='$product_price', image='$product_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if ($upload) {
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         header('location: ../display_icecream.php');
      } else {
         $$message[] = 'please fill out all!';
      }

   }
}
;

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>UPDATE</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../assets/css/crude_style.css" />
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
      <div class="admin-product-form-container centered">

         <?php

         $select = mysqli_query($conn, "SELECT * FROM ice_cream WHERE id = '$id'");
         while ($row = mysqli_fetch_assoc($select)) {

            ?>

            <form action="" method="post" enctype="multipart/form-data">
               <h3 class="title">update the product</h3>
               <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>"
                  placeholder="enter the product name">
               <input type="number" min="0" class="box" name="product_price" value="<?php echo $row['price']; ?>"
                  placeholder="enter the product price">
               <input type="file" class="box" name="product_image" accept="image/png, image/jpeg, image/jpg">
               <input type="submit" value="update product" name="update_product" class="btn">
               <a href="../display_icecream.php" class="btn">go back!</a>
            </form>
         <?php 

         }; 

         ?>
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
          <div href="dashboard.php" class="nav_link submenu_item">
              <span class="navlink_icon">
                <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
            </div>
          </li>
        </ul>
        <ul class="menu_items">
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
               <i class='bx bxs-info-circle' ></i>
              </span>
              <span class="navlink">about us</span>
            </a>
          </li>
          <li class="item">
            <a href="#" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bxs-message-rounded-dots'></i>
              </span>
              <span class="navlink">Contact</span>
            </a>
          </li>
        </ul>
        <ul class="menu_items">
          <li class="item">
            <a href="#" class="nav_link">
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
    <script src="../assets/js/admin_script.js"></script>


</body>
</html>