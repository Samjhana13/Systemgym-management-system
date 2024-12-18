<?php


session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = $quantity;
    }
    header("Location: cart.php");
}

if (isset($_POST['update_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if ($quantity > 0) {
        $_SESSION['cart'][$product_id] = $quantity;
    } else {
        unset($_SESSION['cart'][$product_id]);
    }
    header("Location: cart.php");
}

if (isset($_POST['delete_item'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
    header("Location: cart.php");
}

include 'header.php';

echo "<div class='cart-section'>"; // Start cart container

if (!empty($_SESSION['cart'])) {
    $conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');
    $total = 0;
    echo "<h2>Your Cart</h2>";
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();
        echo "<div class='cart-item'>";
        echo "<h3>{$product['name']}</h3>";
        echo "<p>Price: NPR {$product['price']}</p>";
        echo "<form method='POST' action=''>";
        echo "<input type='hidden' name='product_id' value='$id'>";
        echo "<label>Quantity: </label>";
        echo "<input type='number' name='quantity' value='$quantity' min='1'>";
        echo "<button type='submit' name='update_cart'>Update</button>";
        echo "<button type='submit' name='delete_item'>Delete</button>";
        echo "</form>";
        echo "</div>";
        $total += $product['price'] * $quantity;
    }
    echo "<h3>Total: NPR $total</h3>";
    $conn->close();
} else {
    echo "<p>Your cart is empty.</p>";
}

echo "</div>"; // End cart container


include 'footer.php';
?>


