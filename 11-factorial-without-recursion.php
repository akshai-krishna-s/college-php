<!DOCTYPE html>
<html lang="en">

<head>
  <title>Factorial Without Recursion</title>
</head>

<body>
  <form action="" method="post">
    <label for="num">Enter the number: </label>
    <input type="number" name="num"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      $fact = 1;
      for ($i=1; $i <= $num; $i++)  $fact = $fact * $i;
      echo "Factorial of $num is $fact";
    }
  ?>
</body>

</html>
