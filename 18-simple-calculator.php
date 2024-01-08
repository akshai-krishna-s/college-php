<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simple Calculator</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="num1" placeholder="Enter the first number">
    <select name="op">
      <option value="add">+</option>
      <option value="sub">-</option>
      <option value="mul">*</option>
      <option value="div">/</option>
    </select>
    <input type="number" name="num2" placeholder="Enter the second number">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $op = $_POST['op'];
      if($op == 'add') echo "$num1 + $num2 = ".($num1+$num2)."<br>";
      else if($op == 'sub') echo "$num1 - $num2 = ".($num1-$num2)."<br>";
      else if($op == 'mul') echo "$num1 * $num2 = ".($num1*$num2)."<br>";
      else if($op == 'div') echo "$num1 / $num2 = ".($num1/$num2)."<br>";
    }
  ?>
</body>

</html>
