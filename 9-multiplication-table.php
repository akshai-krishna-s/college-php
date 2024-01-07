<!DOCTYPE html>
<html lang="en">

<head>
  <title>Multiplication Table</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="num" placeholder="Enter the number">
    <input type="number" name="limit" placeholder="Enter the limit">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      $limit = $_POST['limit'];
      for ($i=1; $i <= $limit; $i++) { 
        echo "$num x $i = ".$num*$i."<br>";
      }
    }
  ?>
</body>

</html>
