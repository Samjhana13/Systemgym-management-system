<?php include 'header.php'; ?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>


<section class="services">
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
                echo "<a href='join.php?service_id={$row['id']}' class='join-button'>Click here to join </a>";
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

