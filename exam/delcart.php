<?php
include_once 'realmedb.php';

$name = $_POST['name'];

$sql = "DELETE FROM addtocart WHERE name = '$name'";
$query = mysqli_query($conn, $sql);

if (!$query) {
    echo "Data deletion failed: " . mysqli_error($conn);
} else {

        echo "<script>alert('Item Succesfully Deleted'); window.location.href = 'addtocart.php';</script>";

}
mysqli_close($conn);
?>