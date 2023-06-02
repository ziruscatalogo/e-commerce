<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Realme</title>
</head>
<body> 
  <nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top border-bottom border-dark">
    <div class="container-fluid">
      <img src="realmelogo.png" alt="RealmeLogo" href="#">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="#Products">Product</a>
          </li>
            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Smartphones</a></li>
              <li><a class="dropdown-item" href="#">TV</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
            </ul> -->
         
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="index.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="index.php">Logout</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  
    <br>
    <br>
     
    <hr size="2px" width="" color="#FFC916">  
    <img src="REALME.png" class="img-fluid" alt="Realme">
    <br>
    <br>
    <a id="Products"></a>
    <h1>
       Featured Products
    </h1>
    <hr size="2px" width="" color="#FFC916">  
    <div>
        <!-- <h2>
            Smartphones -->
            <button onclick="window.location.href='additems.php'" style="float: right; background-color: lightgreen; border-radius: 25px;">
      Add Product
    </button>
        <!-- </h2>   -->
        <?php
    include_once 'realmedb.php';

    $sql = "SELECT * FROM addproduct";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="items">';
        echo '<img src="' . $row['pimg'] . '" alt="' . $row['name'] . '">';
        echo '<h2>' . $row['name'] . '</h2>';
        echo '<h3>Php' . $row['price'] . '</h3>';
        echo '<div class="addtocart" style="text-align: center;">';
        echo '<h5>Total stocks: ' . $row['stocks'] . '</h6>';
        echo '<button type="button" style="border-radius: 10px; margin-top: 10px; margin-bottom: 10px; background-color: yellow; padding: 8px 16px; font-size: 14px;">';
        echo '<a style="color: inherit; text-decoration: none;" href="edititems.php?name=' . urlencode($row['name']) . '">Update</a></button>';
        echo '<form action="deleteitems.php" method="POST">';
        echo '<input type="hidden" name="name" value="' . $row['name'] . '">';
        echo '<button type="submit" style="border-radius: 10px; margin-bottom: 10px; background-color: red; padding: 8px 16px; font-size: 14px; color : white;" >';
        echo 'Delete</button>';
        echo '</form>';

        echo '</div>';
        echo '</div>';
    }
    ?>
</div>

</div>
    <!-- <div>
        <h2>
            Smart Tv
        </h2>
    <div class='items'>
            <img src="smarttvx.png" alt="realme5 Logo">
            <h2>Realme Smart Tv X</h2>
            <h3>Php25,990</h3>

    </div>
    <div class='items'>
            <img src="neo32tv.png" alt="realme5 Logo">
            <h2>Realme Neo 32 Tv</h2>
            <h3>Php9,990</h3>

    </div>
    <div>
        <h2>
            Accessories
        </h2>
    <div class='items'>
            <img src="20000mAh.png" alt="realme5 Logo">
            <h2>Realme 20000mAh <br>powerbank</h2>
            <h3>Php1,190</h3>

    </div>
    <div class='items'>
            <img src="coolingbackclip.png" alt="realme5 Logo">
            <h2>Realme Cooling <br>back clip</h2>
            <h3>Php1,295</h3>

    </div>
    <div class='items'>
        <img src="selfietripad.png" alt="realme5 Logo">
        <h2>Realme Selfie tripod</h2>
        <h3>Php1,190</h3>

</div> -->
<a id="About"></a>
    <h1>
        About realme
    </h1>
    <hr size="2px" width="" color="#FFC916">
    <p>
        <br> realme is a global technology brand officially established on May 4, 2018 by Sky Li. The aspiration of realme is to provide products with a comprehensive superior experience for the young, and realme is committed to be a trendsetting technology brand.<br><br>
Due to the abilities in cutting-edge technologies of smartphones and IoT devices, realme offers products with top-notch quality and innovative features to deliver the best digital experiences to its users and fans.<br><br>

According to data from Counterpoint Research on global smartphone shipments in Q1 of 2020, realme ranks 7th with year-over-year growth rate of 157%, marking the highest growth in the world. As the world's fastest-growing smartphone brand, realme stands firmly among the mainstream smartphone brands.<br><br>

In addition, at the beginning of 2020, realme announced its dual-driven strategy of “Smartphone + AIoT”. In June of 2020, its smartphone users globally reached 35 million and its sales volume of AIoT audio products broke the record of 1 million.<br><br>
    </p>  

</body>
</html>