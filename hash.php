<?php
$password = 'admin123';
$hashedPassword = '$2y$10$BCWZDmLfUUv8yKBknH5/Te7D7AmgSEcDI0jIBwORu6iIugRix7LnW'; // Example hashed password

if (password_verify($password, $hashedPassword)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}
?>
