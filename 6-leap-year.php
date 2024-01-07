<!DOCTYPE html>
<html lang="en">

<head>
  <title>Leap Year</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="year" placeholder="Enter the year">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $year = $_POST['year'];
      if ($year%4==0 && $year%100!=0 || $year%400==0) {
        echo "$year is a leap year";
      } else {
        echo "$year is not a leap year";
      }
    }
  ?>
</body>

</html>
