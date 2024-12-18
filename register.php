<?php include 'header.php'; ?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: url('uploads/background.jpg') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .hero {
        display: flex;
        justify-content: center;
        align-items: center;
        height: calc(100vh - 80px); /* Adjust height considering header */
    }

    .hero-content {
        background-color: rgba(0, 0, 0, 0.7); /* Dark semi-transparent background */
        padding: 30px;
        border-radius: 10px;
        text-align: center;
        width: 400px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
    }

    .hero-content h1 {
        color: #fff; /* White text for headings */
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    .hero-content form {
        display: flex;
        flex-direction: column;
    }

    .hero-content label {
        color: black; /* White text for labels */
        font-size: 1.2em;
        margin-bottom: 10px;
        text-align: left;
    }

    .hero-content input[type="text"],
    .hero-content input[type="password"],
    .hero-content input[type="email"] {
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
        font-size: 1em;
    }

    .hero-content input[type="submit"] {
        padding: 10px;
        background-color: #ff7f50; /* Button color */
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 1.2em;
        cursor: pointer;
    }

    .hero-content input[type="submit"]:hover {
        background-color: #ff4500; /* Darker button color on hover */
    }

    .hero-content p {
        color: #fff; /* White text for paragraph */
        margin-top: 20px;
        font-size: 1em;
    }

    .hero-content a {
        color: #ff7f50; /* Button color for links */
        text-decoration: none;
    }

    .hero-content a:hover {
        text-decoration: underline;
    }
</style>

<section class="hero">
    <div class="hero-content">
        <h1>Create a New Account</h1>
        <form action="register_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Create Account">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</section>

<?php include 'footer.php'; ?>
