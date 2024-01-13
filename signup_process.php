<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Add your signup logic here, e.g., insert into a database

    // For demonstration purposes, let's redirect to login page
    header("Location: login.php");
    exit();
}
?>
