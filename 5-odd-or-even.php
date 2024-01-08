<!DOCTYPE html>
<html lang="en">

<head>
  <title>Odd or Even</title>
</head>

<body>
  <form action="" method="post">
    <label for="num">Enter a number: </label>
    <input type="number" name="num"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      
      if ($num %2== 0) echo "$num is even";
      else echo "$num is odd";
    }
  ?>
</body>

</html>
