<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Interest</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="amount" placeholder="Enter amount">
    <input type="text" name="rate" placeholder="Enter rate">
    <input type="text" name="time" placeholder="Enter time">

    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $amount = $_POST['amount'];
      $rate = $_POST['rate'];
      $time = $_POST['time'];

      $interest = ($amount * $rate * $time) / 100;
      echo "The simple interest is $interest";
    }
  ?>
</body>
</html>
