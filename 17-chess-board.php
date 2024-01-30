<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chess Board</title>
</head>

<body style="background-color: #456456;">

  <div style="width:400px; height:400px;">
    <?php
      for($i = 0; $i < 8; $i++){
        for($j = 0; $j < 8; $j++){
          if(($i+$j)%2 == 0) $color = "#ffffff";
          else $color = "#000000";
          echo "<div style='width: 50px; height: 50px; float: left; background-color: $color;'></div>";
        }
        echo "<br>";
      }
    ?>
  </div>
</body>

</html>
