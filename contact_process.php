<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize and validate inputs here

    // You could send the message via email or store it in a database
    mail("admin@example.com", "Contact Form Submission", "Name: $name\nEmail: $email\nMessage: $message");

    header("Location: contact.php?status=success");
}
?>
