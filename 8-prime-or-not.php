<!DOCTYPE html>
<html lang="en">

<head>
  <title>Prime or Not</title>
</head>

<body>
  <form action="" method="post">
    <label for="num">Enter the number: </label>
    <input type="number" name="num"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      $flag = 0;
      if ($num > 1) {
        for ($i=2; $i < $num/2+1; $i++) { 
          if ($num % $i == 0) {
            $flag = 1;
            break;
          }
        }
        if ($flag == 0) echo "$num is a prime number";
        else echo "$num is not a prime number";
      }
      else if ($num == 1)echo "1 is neither prime nor composite";
      else echo "Enter a number greater than 0";   
    }
  ?>
</body>

</html>
