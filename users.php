<?php
$conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);

$sql = "INSERT INTO userss (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
