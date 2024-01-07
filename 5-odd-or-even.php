<!DOCTYPE html>
<html lang="en">
<head>
  <title>Odd or Even</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="num" placeholder="Enter the number">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      
      if ($num %2== 0) {
        echo "$num is even";
      } else {
        echo "$num is odd";
      }
    }
  ?>
</body>
</html>
