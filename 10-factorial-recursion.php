<!DOCTYPE html>
<html lang="en">

<head>
  <title>Factorial Recursion</title>
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
      function factorial($num) {
        if ($num == 0) return 1;
        else return $num * factorial($num-1);
      }
      echo "Factorial of $num is ".factorial($num);
    }
  ?>
</body>

</html>
