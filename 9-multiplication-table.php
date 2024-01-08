<!DOCTYPE html>
<html lang="en">

<head>
  <title>Multiplication Table</title>
</head>

<body>
  <form action="" method="post">
    <label for="num">Enter the number: </label>
    <input type="number" name="num"><br><br>
    <label for="limit">Enter the limit: </label>
    <input type="number" name="limit"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      $limit = $_POST['limit'];
      for ($i=1; $i <= $limit; $i++) echo "$num x $i = ".$num*$i."<br>";
    }
  ?>
</body>

</html>
