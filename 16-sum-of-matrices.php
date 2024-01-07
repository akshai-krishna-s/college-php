<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sum of Matrices</title>
</head>
<body>
  <form action="" method="post">
    <p>First matrix</p>
    <input type="number" name="100" style="width:30px;">
    <input type="number" name="101" style="width:30px;">
    <input type="number" name="102" style="width:30px;"><br>
    <input type="number" name="110" style="width:30px;">
    <input type="number" name="111" style="width:30px;">
    <input type="number" name="112" style="width:30px;"><br>
    <input type="number" name="120" style="width:30px;">
    <input type="number" name="121" style="width:30px;">
    <input type="number" name="122" style="width:30px;"><br>
    <p>Second matrix</p>
    <input type="number" name="200" style="width:30px;">
    <input type="number" name="201" style="width:30px;">
    <input type="number" name="202" style="width:30px;"><br>
    <input type="number" name="210" style="width:30px;">
    <input type="number" name="211" style="width:30px;">
    <input type="number" name="212" style="width:30px;"><br>
    <input type="number" name="220" style="width:30px;">
    <input type="number" name="221" style="width:30px;">
    <input type="number" name="222" style="width:30px;"><br><br>
    <input type="submit" name="submit" value="Submit"><br><br>
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $m00 = $_POST['100']+ $_POST['200'];
      $m01 = $_POST['101']+ $_POST['201'];
      $m02 = $_POST['102']+ $_POST['202'];
      $m10 = $_POST['110']+ $_POST['210'];
      $m11 = $_POST['111']+ $_POST['211'];
      $m12 = $_POST['112']+ $_POST['212'];
      $m20 = $_POST['120']+ $_POST['220'];
      $m21 = $_POST['121']+ $_POST['221'];
      $m22 = $_POST['122']+ $_POST['222'];

      echo "$m00  $m01  $m02<br>";
      echo "$m10  $m11  $m12<br>";
      echo "$m20  $m21  $m22<br>";
    }
  ?>
</body>
</html>
