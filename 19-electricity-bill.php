<!DOCTYPE html>
<html lang="en">

<head>
  <title>Generate Electricity Bill</title>
</head>

<body>
  <form action="bill.php" method="post">
    <label for="id">Enter the Consumer ID: </label>
    <input type="number" name="id"><br><br>
    <label for="name">Enter the Consumer Name: </label>
    <input type="text" name="name" pattern="[A-Za-z/s]+"><br><br>
    <label for="mobile">Enter the Mobile Number: </label>
    <input type="text" name="mobile" pattern="[0-9]{10}"><br><br>
    <label for="units">Enter the number of Units Consumed: </label>
    <input type="number" name="units"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>
