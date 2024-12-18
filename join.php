<?php include 'header.php'; ?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<section class="join">
    <h2>Let's become a member!</h2>
    <form action="process_join.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        
        <label for="membership">Membership Type:</label>
        <select id="membership" name="membership" required>
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
            <option value="vip">VIP</option>
        </select>

        <label for="package">Select Package:</label>
        <select id="package" name="package" required>
            <option value="None" data-price="0">None</option>
            <option value="Basic Package" data-price="3600">Basic Package - NPR 3,600</option>
            <option value="Yoga & Nutrition Package" data-price="9000">Yoga & Nutrition Package - NPR 9,000</option>
            <option value="Personal Training & Yoga Package" data-price="14400">Personal Training & Yoga Package - NPR 14,400</option>
            <option value="Full Access Package" data-price="24000">Full Access Package - NPR 24,000</option>
        </select>
        
        <input type="hidden" id="package_price" name="package_price" value="0">
        
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        
        <button type="submit">Submit</button>
    </form>
</section>

<script>
    document.getElementById('package').addEventListener('change', function() {
        var price = this.options[this.selectedIndex].getAttribute('data-price');
        document.getElementById('package_price').value = price;
    });
</script>

<?php include 'footer.php'; ?>
