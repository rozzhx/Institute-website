<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));

    // Here you can add code to save the data to a database or send an email

    // Redirect or display a success message
    echo "<h1>Thank you for registering, $name!</h1>";
    echo "<p>We will contact you at $email.</p>";
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.php");
    exit();
}
?>