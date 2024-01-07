<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Length, Reverse and check Palindrome of a string</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="str" placeholder="Enter the string">
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $str = $_POST['str'];
      $len = strlen($str);
      echo "Length of $str is $len<br>";
      $rev = strrev($str);
      echo "Reverse of $str is $rev<br>";
      if ($str == $rev) {
        echo "$str is a Palindrome";
      } else {
        echo "$str is not a Palindrome";
      }
    }
  ?>
</body>
</html>
