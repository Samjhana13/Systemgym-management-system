<?php
$conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership = $_POST['membership'];
$package = $_POST['package'];
$package_price = $_POST['package_price'];
$message = $_POST['message'];

$sql = "INSERT INTO membership_forms (name, email, phone, membership_type, packages, message)
        VALUES ('$name', '$email', '$phone', '$membership', '$package', '$message')";


if ($conn->query($sql) === TRUE) {
    // Redirect to thank you page after successful submission
    header("Location: thank_you.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
