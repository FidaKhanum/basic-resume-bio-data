<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Display the success message along with the submitted data
    echo "<div>
    <h2>Registration Successful</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Date of Birth:</strong> $address</p>
  </div>";
} else {
echo "<p>Error: Invalid request method.</p>";
}
?>
