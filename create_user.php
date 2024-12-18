<?php
// Assuming you have a connection to your database
$conn = new mysqli('localhost', 'username', 'password', 'database');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user exists
$sql = "SELECT * FROM userss WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User authenticated
    // Process form data
} else {
    // Authentication failed
    echo "<p>Invalid username or password. Please try again.</p>";
}

$stmt->close();
$conn->close();
?>
