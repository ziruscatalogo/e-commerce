<?php
include_once 'realmedb.php';

$pimg = $_GET['pimg'];
$name = $_GET['name'];
$price = $_GET['price'];
$nstocks = $_POST['nstocks'];

$existing_item_sql = "SELECT * FROM addtocart WHERE name='$name' AND pimg='$pimg'";
$existing_item_result = mysqli_query($conn, $existing_item_sql);

if (mysqli_num_rows($existing_item_result) > 0) {
  $existing_item_row = mysqli_fetch_assoc($existing_item_result);
  $nstocks += $existing_item_row['nstocks'];

  $update_sql = "UPDATE addtocart SET nstocks=$nstocks WHERE name='$name' AND pimg='$pimg'";

  if (mysqli_query($conn, $update_sql)) {
    header("Location: mainuser.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
} else {
  $insert_sql = "INSERT INTO addtocart (pimg, name, price, nstocks) VALUES ('$pimg', '$name', '$price', $nstocks)";

  if (mysqli_query($conn, $insert_sql)) {
    echo "<script>alert('add to cart successful!'); window.location.href = 'mainuser.php';</script>";
  } else {
    echo "Error inserting record: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>
