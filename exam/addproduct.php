<?php
include_once 'realmedb.php';

$pimg = $_POST['pimg'];
$name = $_POST['name'];
$price  = $_POST['price'];
$stocks  = $_POST['stocks'];

$sql = "INSERT INTO addproduct (pimg, name , price, stocks)
 VALUES ('$pimg','$name','$price', $stocks)";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Add Product successful!'); window.location.href = 'main.php';</script>";
} else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

mysqli_close($conn);
?>