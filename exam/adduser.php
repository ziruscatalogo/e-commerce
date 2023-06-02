<?php
include_once 'realmedb.php';

$email = $_POST['Email'];
$password  = $_POST['Password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO login (email, password) VALUES ('$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {

        echo "<script>alert('Add User successful!'); window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

mysqli_close($conn);
?>
