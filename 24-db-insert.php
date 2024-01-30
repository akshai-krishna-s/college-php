<!DOCTYPE html>
<html lang="en">

<head>
  <title>Database insert</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="name" placeholder="Enter product name:"><br><br>
    <input type="number" name="price" placeholder="Enter product price:"><br><br>
    <input type="number" name="quantity" placeholder="Enter product quantity:"><br><br>
    <input type="submit" name="insert" value="Insert"><br><br>
  </form>

  <?php
    $conn = mysqli_connect("localhost", "root", "", "shop");
    if(isset($_POST['insert'])) {
      $name = $_POST['name'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $insert = "INSERT INTO product (name, price, quantity) VALUES ('$name',$price,$quantity)";
      if(mysqli_query($conn, $insert)) echo "Successful";
      else echo mysqli_error($conn);
    }
  ?>
</body>

</html>
