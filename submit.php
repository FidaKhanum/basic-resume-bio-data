<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Display the success message along with the submitted data
    echo "<div class='success'>";
    echo "<h3>Registration Successful!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Phone:</strong> " . $phone . "</p>";
    echo "<p><strong>Address:</strong> " . nl2br($address) . "</p>";
    echo "</div>";
}
?>
