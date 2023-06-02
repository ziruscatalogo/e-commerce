<?php
include_once 'realmedb.php';

$pimg = $_POST['pimg'];
$name = $_POST['name'];
$price = $_POST['price'];
$stocks = $_POST['stocks'];

$sql = "UPDATE addproduct SET pimg = '$pimg', price = '$price', stocks = '$stocks' WHERE name = '$name'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    echo "Data update failed: " . mysqli_error($conn);
} else {
    echo "<script>alert('Item Succesfully Updated'); window.location.href = 'main.php';</script>";
}

mysqli_close($conn);
?>
