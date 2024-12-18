<?php include 'header.php'; ?>


<section class="hero">
    <div class="hero-content">
        <img src="uploads/logo.png" alt="Gym Shine Logo" class="logo">
        <h1>Welcome to Gym Shine</h1>
        <p>Let Your Strength <b>SHINE</b> Through.</p>
    </div>
</section>

<section class="featured-services">
    <h2>Our Services</h2>
    <div class="services-container">
        <?php
        $conn = new mysqli('localhost', 'local', 'shridhi123', 'gym_shine');
        $sql = "SELECT * FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='service-item'>";
                echo "<img src='uploads/{$row['image']}' alt='{$row['name']}'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>{$row['description']}</p>";
                echo "</div>";
            }
        } else {
            echo "No services available.";
        }
        $conn->close();
        ?>
    </div>
</section>

<?php include 'footer.php'; ?>
