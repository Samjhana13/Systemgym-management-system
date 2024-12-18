<?php include 'header.php'; ?>



<section class="products">
    <h2>Products</h2>
    <div class="products-container">
        <?php
        $conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='product-item'>";
                echo "<img src='uploads/{$row['image']}' alt='{$row['name']}'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>Price: \${$row['price']}</p>";
                echo "<p>{$row['description']}</p>";
                echo "<form action='cart.php' method='post'>";
                echo "<input type='hidden' name='product_id' value='{$row['id']}'>";
                echo "<input type='number' name='quantity' min='1' value='1'>";
                echo "<button type='submit' name='add_to_cart'>Add to Cart</button>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "No products available.";
        }
        $conn->close();
        ?>
    </div>
</section>

<?php include 'footer.php'; ?>
