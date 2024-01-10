<!DOCTYPE html>
<html lang="en">

<head>
  <title>Generate Restuarant Bill</title>
</head>

<body>
  <form action="bill2.php" method="post">
    <table border="1" align="center">
      <tr>
        <td>Select the Item</td>
        <td>Quantity</td>
        <td>Unit Price</td>
      </tr>
      <tr>
        <td><input type="checkbox" name="product[]" value="Tea">Tea</td>
        <td><input type="number" name="q1"></td>
        <td><input type="number" name="p1"></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="product[]" value="Dosa">Dosa</td>
        <td><input type="number" name="q2"></td>
        <td><input type="number" name="p2"></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="product[]" value="Puri">Puri</td>
        <td><input type="number" name="q3"></td>
        <td><input type="number" name="p3"></td>
      </tr>
      <tr>
        <td colspan="3"><input type="submit" name="submit" value="Submit"></td>
      </tr>
    </table>
  </form>
</body>

</html>
