<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
      .image-container{
        height: 150px;
        width: 150px;
        margin: 0 auto;
        text-align: center;
        border: #2a292a;
        position: relative;
      }
      .image-container img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-height: 100%;
        max-width: 100%;
      }
      figcaption{
        margin: 20px 0 30px 0;
        text-align: center;
        color: #2a292a;
      }
      input[type="file"]{
        display: none;
      }
      .l1{
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
        Add Product
      </div>
      <form method= "POST"  action="addproduct.php">
        <figure class="image-container">
          <img id="chosen-image">
        </figure>
        <figcaption id="file-name"></figcaption>
        <input type="file" id="upload-button" accept="image/*" name = "pimg">
        <label class="l1" for="upload-button">
          <i class="fas fa-upload"></i> &nbsp; Choose A Photo
        </label>
        <br>
        <div class="field">
          <input type="text"  name="name" required >
          <label>Product Name</label>
        </div>
        <br>
        <div class="field">
          <input type="number" name="price" required min="0">
          <label>Price</label>
        </div>
        <br>
        <div class="field">
          <input type="number" name="stocks" required min="0">
          <label>Stock Number</label>
        </div>
        <button>Save Items</button>
      </form>
    </div>
    <script src="script.js"></script>
  </body>
</html>
