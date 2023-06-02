<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
      .image-container {
        height: 150px;
        width: 150px;
        margin: 0 auto;
        text-align: center;
        border: #2a292a;
        position: relative;
      }
      .image-container img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-height: 100%;
        max-width: 100%;
      }
      figcaption {
        margin: 20px 0 30px 0;
        text-align: center;
        color: #2a292a;
      }
      input[type="file"] {
        display: none;
      }
      .l1 {
        display: block;
        position: relative;
        background-color: #025bee;
        color: #ffffff;
        font-size: 15px;
        text-align: center;
        width: 80%;
        padding: 18px 0;
        border-radius: 25px;
        margin: auto;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="content">
      <div class="text">
        Edit Product
      </div>
      <?php
      include_once 'realmedb.php';

      
      if (isset($_GET['name'])) {
          $name = $_GET['name'];

          $sql = "SELECT * FROM addproduct WHERE name = '$name'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

      
          $pimg = $row['pimg'];
          $price = $row['price'];
          $stocks = $row['stocks'];

        
          echo '<form method="POST" action="editproduct.php">';
          echo '<figure class="image-container">';
          echo '<img src="' . $pimg . '" alt="' . $name . '">';
          echo '</figure>';
          echo '<input type="hidden" name="name" value="' . $name . '">'; 
          echo '<figcaption id="file-name"></figcaption>';
          echo '<input type="file" id="upload-button" accept="image/*" name="pimg">';
          echo '<label class="l1" for="upload-button">';
          echo '<i class="fas fa-upload"></i> &nbsp; Choose A Photo';
          echo '</label>';
          echo '<br>';
          echo '<div class="field">';
          echo '<input type="text" name="name" required value="' . $name . '">';
          echo '<label>Product Name</label>';
          echo '</div>';
          echo '<br>';
          echo '<div class="field">';
          echo '<input type="number" name="price" required value="' . $price . '"min="0">';
          echo '<label>Price</label>';
          echo '</div>';
          echo '<br>';
          echo '<div class="field">';
          echo '<input type="number" name="stocks" required value="' . $stocks . '" min="0">';
          echo '<label>Stock Number</label>';
          echo '</div>';
          echo '<button>Save Items</button>';
          echo '</form>';
      }
      ?>
    </div>
    <script src="script.js"></script>
  </body>
</html>
