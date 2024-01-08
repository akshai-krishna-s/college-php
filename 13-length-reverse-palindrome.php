<!DOCTYPE html>
<html lang="en">

<head>
  <title>Find Length, Reverse and check Palindrome of a string</title>
</head>

<body>
  <form action="" method="post">
    <label for="str">Enter the string: </label>
    <input type="text" name="str"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $str = $_POST['str'];
      $len = strlen($str);
      echo "Length of $str is $len<br>";
      $rev = strrev($str);
      echo "Reverse of $str is $rev<br>";
      if ($str == $rev)echo "$str is a Palindrome";
      else echo "$str is not a Palindrome";
    }
  ?>
</body>

</html>
