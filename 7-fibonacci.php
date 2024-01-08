<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fibonacci</title>
</head>

<body>
  <form action="" method="post">
    <label for="limit">Enter the limit: </label>
    <input type="number" name="limit"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $limit = $_POST['limit'];
      $num1 = 0;
      $num2 = 1;
      $num3 = $num1 + $num2;
      echo "$num1 $num2 ";
      while ($num3 < $limit) {
        echo "$num3 ";
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
      }
    }
    
  ?>
</body>

</html>
