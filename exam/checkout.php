<?php
include_once 'realmedb.php';

$sql = "SELECT p.name, t.nstocks FROM addproduct p JOIN addtocart t ON p.name = t.name";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $nstocks = $row['nstocks'];
    
    $update_query = "UPDATE addproduct SET stocks = stocks - $nstocks WHERE name= '$name'";
    mysqli_query($conn, $update_query);
}

$delete_query = "DELETE FROM addtocart";
mysqli_query($conn, $delete_query);

echo "<script>alert('item Checkouts'); window.location.href = 'addtocart.php';</script>";
?>
