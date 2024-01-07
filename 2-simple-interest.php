<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simple Interest</title>
</head>

<body>
  <form action="" method="post">
    <label for="amount">Enter the amount: </label>
    <input type="number" name="amount"><br><br>
    <label for="rate">Enter the rate: </label>
    <input type="number" name="rate"><br><br>
    <label for="time">Enter the time: </label>
    <input type="number" name="time"><br><br>

    <input type="submit" name="submit" value="Submit"><br><br>
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
