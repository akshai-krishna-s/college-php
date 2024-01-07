<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="num1" placeholder="Enter first number">
    <input type="text" name="num2" placeholder="Enter second number">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $sum = $num1 + $num2;
      echo "The sum of $num1 and $num2 is $sum";
    }
  ?>
</body>
</html>
