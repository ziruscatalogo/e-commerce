<?php
include_once 'realmedb.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE admin_email = '$email'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $storedHashedPassword = $row['admin_password'];

    if (password_verify($password, $storedHashedPassword)) {
        echo "<script>alert('Admin login successful!'); window.location.href = 'main.php';</script>";
        exit;
    }
}

$userQuery = "SELECT * FROM login WHERE Email = '$email'";
$userResult = mysqli_query($conn, $userQuery);

if (mysqli_num_rows($userResult) > 0) {
    $userRow = mysqli_fetch_assoc($userResult);
    $storedUserHashedPassword = $userRow['Password'];

    if (password_verify($password, $storedUserHashedPassword)) {
        echo "<script>alert('User login successful!'); window.location.href = 'mainuser.php';</script>";
        exit;
    }
}

echo "<script>alert('Invalid login credentials!'); window.location.href = 'index.php';</script>";
exit;

mysqli_close($conn);
?>
