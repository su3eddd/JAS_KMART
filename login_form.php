<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_db WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      $_SESSION['admin_name'] = $row['name'];
      header('location: admin_index.php');
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login form</title>

  <link rel="stylesheet" href="assets/css/admin_style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

<div class="form-container">

  <form action="" method="post">
    <h3>login now</h3>
    <?php
      if(isset($error)){
        foreach($error as $error){
          echo '<span class="error-msg">'.$error.'</span>';
        };
      };
    ?>
    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
    <input type="submit" name="submit" value="login now" class="form-btn">
    <div class="home-btn-container">
      <a href="index.php" class="home-btn">Back to Website</a> 
    </div>
  </form>

</div>  

</body>
</html>