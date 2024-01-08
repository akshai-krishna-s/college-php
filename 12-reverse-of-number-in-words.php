<!DOCTYPE html>
<html lang="en">

<head>
  <title>Reverse of Number in Words</title>
</head>

<body>
  <form action="" method="post">
    <label for="num">Enter the number: </label>
    <input type="text" name="num"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $num = $_POST['num'];
      while ($num > 0) {
        $r = $num % 10;
        switch ($r) {
          case 0:
            echo "Zero ";
            break;
          case 1:
            echo "One ";
            break;
          case 2:
            echo "Two ";
            break;
          case 3:
            echo "Three ";
            break;
          case 4:
            echo "Four ";
            break;
          case 5:
            echo "Five ";
            break;
          case 6:
            echo "Six ";
            break;
          case 7:
            echo "Seven ";
            break;
          case 8:
            echo "Eight ";
            break;
          case 9:
            echo "Nine ";
            break;
        }
        $num = floor($num /10);
      }
    }
  ?>
</body>

</html>
