<!DOCTYPE html>
<html lang="en">

<head>
  <title>Decimal to Binary, Octal and Hexadecimal</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="num" placeholder="Enter the number">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      echo "Binary of $num is ".decbin($num)."<br>";
      echo "Octal of $num is ".decoct($num)."<br>";
      echo "Hexadecimal of $num is ".dechex($num)."<br>";
    }
  ?>
</body>

</html>
