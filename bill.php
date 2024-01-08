<!DOCTYPE html>
<html lang="en">

<head>
  <title>Electricity Bill</title>
</head>

<body style="background-color:cornsilk;">
  <h1 style="text-align: center; color: darkblue;">Electricity Bill</h1>
  <form method="post">
    <?php
      date_default_timezone_set("Asia/Kolkata");
      if (isset($_POST["submit"])) {
        $id = $_POST["id"];
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $units = $_POST["units"];
        $date = date("d/m/Y");
        $time = date("h:i:sa");
        $bill = 0;
        if ($units <= 100) $bill = $units * 3;
        else if ($units <= 200) $bill = 100 * 3 + ($units - 100) * 4;
        else if ($units <= 300) $bill = 100 * 3 + 100 * 4 + ($units - 200) * 5;
        else $bill = 100 * 3 + 100 * 4 + 100 * 5 + ($units - 300) * 6;
        echo "<table border='1' align='center'>";
        echo "<tr><td>Consumer ID</td><td>$id</td></tr>";
        echo "<tr><td>Consumer Name</td><td>$name</td></tr>";
        echo "<tr><td>Mobile Number</td><td>$mobile</td></tr>";
        echo "<tr><td>Units Consumed</td><td>$units</td></tr>";
        echo "<tr><td>Bill Amount</td><td>$bill</td></tr>";
        echo "<tr><td>Date</td><td>$date</td></tr>";
        echo "<tr><td>Time</td><td>$time</td></tr>";
        echo "</table>";
      }
    ?>
  </form>
</body>

</html>
