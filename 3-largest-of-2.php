<!DOCTYPE html>
<html lang="en">

<head>
  <title>Largest of 2</title>
</head>

<body>
  <form action="" method="post">
    <label for="num1">Enter first number: </label>
    <input type="number" name="num1"><br><br>
    <label for="num2">Enter second number: </label>
    <input type="number" name="num2"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      if ($num1 == $num2)  echo "The numbers are equal";
      else if ($num1 > $num2) echo "$num1 is greater than $num2";
      else echo "$num2 is greater than $num1";
      
    }
  ?>
</body>

</html>
