<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kmart_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// straight to database
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$message = mysqli_real_escape_string($conn, $message);

$sql = "INSERT INTO contact_page (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
   echo " Your message has been sent successfully.";
    $messageClass = "success";
} else {
    echo  "Error: " . $sql . "<br>" . $conn->error;
    $messageClass = "error";
}
$conn->close();



// Sending email straight to email
$to = "jassk.mart@gmail.com";
$subject = "Contact Form Submission";

$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message";

if (mail($to, $subject, $body)) {
    echo "감사합니다 (Thank you!)";
} else {
    echo "Error sending message. Please try again later.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .success {
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
        }

        .error {
            background-color: #f2dede;
            color: #a94442;
            border: 1px solid #ebccd1;
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            background-color: #9b6d2c;
            border: 2px solid #9b6d2c;
            border-radius: 5px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        a.button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="message <?php echo $messageClass; ?>">
    </div>
    <a href="about.php" class="button">Back to Contact Form</a>
</body>
</html>
