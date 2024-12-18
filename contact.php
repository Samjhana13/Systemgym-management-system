<?php include 'header.php'; ?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>


<section class="contact">
    <div class="contact-header">
        <img src="uploads/logo.png" alt="Gym Shine Logo" class="contact-logo">
        <h2>Contact Us</h2>
    </div>
    <form action="contact_process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Send Message</button>
    </form>
    
    <p>We would love to hear from you! Feel free to reach out to us with any questions or to schedule a tour of our facilities. You can contact us at:</p>
    <p>Phone: +977 9848327470</p>
    <p>Location: Chabhil, Kathmandu</p>
    <p>Join us at Gym Shine and take the first step towards a healthier, happier you. Together, we can achieve greatness and transform your fitness aspirations into reality.</p>
</section>

<?php include 'footer.php'; ?>

