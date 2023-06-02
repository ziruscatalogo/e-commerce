<?php
include_once 'realmedb.php';

$name = $_POST['name'];

$sql = "DELETE FROM addproduct WHERE name = '$name'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    echo "Data deletion failed: " . mysqli_error($conn);
} else {
    echo "<script>alert('Item Succesfully Deleted'); window.location.href = 'main.php';</script>";
}

mysqli_close($conn);
?>