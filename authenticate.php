<?php
session_start();
$conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM userss WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['loggedin'] = true;
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>
