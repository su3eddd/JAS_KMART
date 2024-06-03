<?php
@include 'config.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
  $newContent = $_POST['about_content'];
  file_put_contents('about_content.txt', $newContent);
  echo "<div id='message' class='message'>About content updated successfully!</div>";
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <div class="contact-form">
    <h2>Edit About Us</h2>
    <form action="admin_about.php" method="post">
      <div class="form-group">
        <textarea id="about_content" name="about_content" placeholder="Enter new about content"
          required><?php echo file_exists('about_content.txt') ? file_get_contents('about_content.txt') : 'Default content'; ?></textarea>
      </div>
      <div class="form-group">
        <button type="submit" value="Submit" name="submit">Update Content</button>
      </div>
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