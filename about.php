<?php include('header.php'); ?>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<section class="about">
    <div class="about-header">
        <img src="uploads/logo.png" alt="Gym Shine Logo" class="about-logo">
        <h1>About Us</h1>
    </div>
    <p>Welcome to Gym Shine!</p>
    <p>At Gym Shine, located in the vibrant neighborhood of Chabhil, Kathmandu, we are dedicated to helping you achieve your fitness goals through a comprehensive range of services and products tailored to all levels of fitness enthusiasts. Whether you're just starting out on your fitness journey or you're a seasoned athlete, we have everything you need to enhance your health and wellness.</p>

    <h2>Our Mission</h2>
    <p>Our mission is to empower our community to lead healthier, more active lives. We believe that fitness is not just a goal but a way of life. Our state-of-the-art facilities and expert team are here to guide you every step of the way, ensuring that you reach your personal fitness milestones with confidence and enthusiasm.</p>

    <h2>What We Offer</h2>
    <ul>
        <li>Personal Training</li>
        <li>Group Classes</li>
        <li>Nutritional Guidance</li>
        <li>Gym Facilities</li>
    </ul>

    <h2>Our Membership Types and Packages</h2>
    <p>At Gym Shine, we offer three distinct membership types designed to cater to the unique fitness needs of our diverse clientele. Each membership type provides varying levels of access and benefits, allowing you to choose the plan that best aligns with your fitness goals and lifestyle.</p>

    <h3>Basic Membership</h3>
    <p>Our Basic Membership is perfect for individuals who are just starting their fitness journey or those who prefer a more flexible approach. With this membership, you'll have access to our state-of-the-art gym facilities during non-peak hours. This includes the use of cardio machines, weight training equipment, and access to our locker rooms. It's an excellent option for those looking to maintain a healthy lifestyle with minimal commitment.</p>

    <h3>Premium Membership</h3>
    <p>The Premium Membership offers a more comprehensive fitness experience. In addition to everything included in the Basic Membership, Premium members enjoy unlimited access to our group classes, including yoga, pilates, and strength training. This membership is ideal for those who want to take advantage of our full range of services, with more flexible hours and priority booking for classes. Premium members also receive a complimentary fitness assessment and personalized workout plan every quarter.</p>

    <h3>VIP Membership</h3>
    <p>Our VIP Membership is the ultimate package for those who are truly committed to their fitness journey. VIP members receive all the benefits of the Premium Membership, plus exclusive perks such as personal training sessions, nutritional guidance from our in-house experts, and access to our VIP lounge. This membership also includes priority access to new classes and events, as well as discounts on merchandise and additional services. It's designed for those who want to achieve the highest level of fitness and well-being with a more personalized and luxurious experience.</p>

    <h2>Packages</h2>
    <ul>
        <li><strong>Basic Package (NPR 3,600):</strong> Includes access to basic facilities with the option to upgrade as needed.</li>
        <li><strong>Yoga & Nutrition Package (NPR 9,000):</strong> Combines the calming benefits of yoga with personalized nutritional guidance to help you achieve a balanced and healthy lifestyle.</li>
        <li><strong>Personal Training & Yoga Package (NPR 14,400):</strong> A comprehensive package that includes personalized training sessions with our expert trainers and unlimited yoga classes.</li>
        <li><strong>Full Access Package (NPR 24,000):</strong> Provides unrestricted access to all our facilities, classes, and services, including personal training, nutrition, and wellness programs.</li>
    </ul>

    <h2>Meet Our Founders</h2>
    <div class="founders">
        <div class="founder">
            <h3>Pema Doma Sherpa</h3>
            <p>Email: <a href="mailto:pemavv43@gmail.com">pemavv43@gmail.com</a></p>
        </div>
        <div class="founder">
            <h3>Punika Tamang</h3>
            <p>Email: <a href="mailto:punikatamang@gmail.com">punikatamang@gmail.com</a></p>
        </div>
        <div class="founder">
            <h3>Samjhana Kharel</h3>
            <p>Email: <a href="mailto:samjhana.kharel13@gmail.com">samjhana@gmail.com</a></p>
        </div>
        <div class="founder">
            <h3>Shridhi Sharma Poudel</h3>
            <p>Email: <a href="mailto:shridhisharma111@example.com">shridhisharma@gmail.com</a></p>
        </div>    
    </div>
</section>

<?php include('footer.php'); ?>

