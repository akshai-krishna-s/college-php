<!DOCTYPE html>
<html lang="en">

<head>
  <title>Electricity Bill</title>
</head>

<body style="background-color:cornsilk;">
  <h1 style="text-align: center; color: darkblue;">Restuarant Bill</h1>
  <form method="post">
    <table border="1" align="center">
      <?php
      if (isset($_POST["submit"])) {
        $q1 = $_POST["q1"];
        $p1 = $_POST["p1"];
        $q2 = $_POST["q2"];
        $p2 = $_POST["p2"];
        $q3 = $_POST["q3"];
        $p3 = $_POST["p3"];
        $total1 = 0; $total2 = 0; $total3 = 0;
        $bill = 0;
        foreach ($_POST["product"] as $product) {
          if ($product == "Tea") {
            echo "<tr><td>Tea</td><td>$q1</td><td>$p1</td></tr>";
            $total1 = $q1 * $p1;
          } else if ($product == "Dosa") {
            echo "<tr><td>Dosa</td><td>$q2</td><td>$p2</td></tr>";
            $total2 = $q2 * $p2;
          } else if ($product == "Puri") {
            echo "<tr><td>Puri</td><td>$q3</td><td>$p3</td></tr>";
            $total3 = $q3 * $p3;
          }}
          $bill = $total1 + $total2 + $total3;
          echo "<tr><td colspan='3'>Total Bill: $bill</td></tr>";
  
      }
    ?>
    </table>
  </form>
</body>

</html>
