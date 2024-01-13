<?php
// Add your authentication logic here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add your authentication logic here, e.g., check against a database

    // For demonstration purposes, let's just check a hardcoded username and password
    $validUsername = "user";
    $validPassword = "pass";

    // Convert both input and valid usernames/passwords to lowercase for comparison
    $lowercaseUsername = strtolower($username);
    $lowercaseValidUsername = strtolower($validUsername);

    $lowercasePassword = strtolower($password);
    $lowercaseValidPassword = strtolower($validPassword);

    // Check if both username and password match
    if ($lowercaseUsername === $lowercaseValidUsername && $lowercasePassword === $lowercaseValidPassword) {
        // Redirect to home page or any other desired page
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
