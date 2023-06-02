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
            <a class="nav-link text-black  fs-5" href="mainuser.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-black  fs-5" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Smartphones</a></li>
              <li><a class="dropdown-item" href="#">TV</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black  fs-5" href="mainuser.php/About">About</a>
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
    <br>
    <hr size="2px" width="" color="#FFC916">  
    <h2>
       Add to Cart
    </h2>
    <?php
    include_once 'realmedb.php';
  
    $sql = "SELECT * FROM addtocart";
    $result = mysqli_query($conn, $sql);
  
    echo '<table class="item-table" style="border-collapse: collapse; border: 1px solid black; width: 100%; text-align: center;">';
    echo '<tr style="background-color: #FFC916; border: 1px solid black;"><th style="padding: 10px;">Product Image</th><th style="padding: 10px;">Name</th><th style="padding: 10px;">Price</th><th style="padding: 10px;">Quantity</th><th style="padding: 10px;">Total</th><th style="padding: 10px;"></th></tr>';
  
    $grand_total = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr class="item-row" style="border: 1px solid black;">';
      echo '<td style="padding: 10px;"><img src="' . $row['pimg'] . '" alt="' . $row['name'] . '"width="200px"></td>';
      echo '<td style="padding: 10px;">' . $row['name'] . '</td>';
      echo '<td style="padding: 10px;">Php' . $row['price'] . '</td>';
      echo '<td style="padding: 10px;">' . $row['nstocks'] . '</td>';
      
      $item_total = $row['price'] * $row['nstocks'];
      $grand_total += $item_total;
      
      echo '<td style="padding: 10px;">Php' . $item_total . '</td>';
      echo '<td style="padding: 10px;">
              <form action="delcart.php" method="POST">
                <input type="hidden" name= "name" value="' . $row['name'] . '">
                <button type="submit" style="background-color: red; border-radius: 15px; color: white;">Delete</button>
              </form>
            </td>';
      
      echo '</tr>';
    }
  
    echo '<tr>
            <td colspan="4" class="total-label" style="padding: 10px; text-align: right; border: none;">Grand Total:</td>
            <td class="total-value" style="padding: 10px; border: 1px solid black;">Php' . $grand_total . '</td>
            <td style="border: none;">
              <a href="checkout.php">
                <button style="background-color: green; border-radius: 15px; color: white;">Checkout</button>
              </a>
            </td>
          </tr>';
  
    echo '</table>';
    ?>
  


</body>
</html>