<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
echo " helloworld";
$server = "localhost";
$user = "root";
$pass = "";
$DB = "userdatabase";

$conn = new mysqli($server, $user, $pass, $DB);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

$sql = "INSERT INTO formdatabase (username, email, cpassword ) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    echo "successful";
} else {
    echo "error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>