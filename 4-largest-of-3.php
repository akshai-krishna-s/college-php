<!DOCTYPE html>
<html lang="en">
<head>
  <title>Largest of 3</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="num1" placeholder="Enter first number">
    <input type="text" name="num2" placeholder="Enter second number">
    <input type="text" name="num3" placeholder="Enter third number">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $num3 = $_POST['num3'];

      if ( $num1 >= $num2 && $num3 >= $num3 ) {
        echo "$num1 is the largest";
      } else if ( $num2 >= $num1 && $num2 >= $num3 ) {
        echo "$num2 is the largest";
      } else {
        echo "$num3 is the largest";
      }
    }
  ?>
</body>
</html>
