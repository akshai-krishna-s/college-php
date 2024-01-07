<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sum</title>
</head>

<body>
  <form action="" method="post">
    <label for="num1">Enter the first number: </label>
    <input type="number" name="num1"><br><br>
    <label for="num2">Enter the second number: </label>
    <input type="number" name="num2"><br><br>
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
