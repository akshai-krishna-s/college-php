<!DOCTYPE html>
<html lang="en">

<head>
  <title>Database update</title>
</head>

<body>
  <form action="" method="post">
    <?php
      $conn = mysqli_connect("localhost", "root", "", "shop");
      if($conn){
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
          echo "<select name='p_id'>
                <option value=''>Select product</option>";
          while($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
          echo "</select><br><br>";
        }
      }
    ?>
    <input type="submit" name="delete" value="Delete"><br><br>
    <input type="submit" name="view" value="View">
  </form>

  <?php
    if(isset($_POST['delete'])) {
      $delete = "DELETE FROM product WHERE id = '" . $_POST['p_id'] . "'";
      if(mysqli_query($conn, $delete)) {
        echo "Product deleted successfully";
      } else {
        echo "Error deleting product: " . mysqli_error($conn);
      }
    }
    
    if(isset($_POST['view'])) {
      $view = "SELECT * FROM product";
      $result = mysqli_query($conn, $view);
      while($row = mysqli_fetch_array($result)) {
        echo $row['id'] . " " . $row['name'] . " " . $row['price'] . "<br>";
      }
    }
  ?>
</body>

</html>
