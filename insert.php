<?php

include 'config.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$city = $_POST["city"];
$pin = $_POST["pin"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalid email format';
    exit();
}

// Check if the email is already registered
$result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
if ($result->num_rows > 0) {
    echo 'Email already registered';
    exit();
}

// Hash the password before storing it in the database
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

// Insert user data into the database
if ($mysqli->query("INSERT INTO users (fname, lname, address, city, pin, email, password) VALUES('$fname', '$lname', '$address', '$city', $pin, '$email', '$hashedPwd')")) {
    echo 'Data inserted';
    echo '<br/>';
}

header("location: login.php");

?>
