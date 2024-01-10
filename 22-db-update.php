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
    <input type="text" name="price" placeholder="New price"><br><br>
    <input type="submit" name="update" value="Update"><br><br>
  </form>

  <?php
    if(isset($_POST['update'])) {
      $update = "UPDATE product SET price = '" . $_POST['price'] . "' WHERE id = '" . $_POST['p_id'] . "'";
      if(mysqli_query($conn, $update)) {
        echo "Product updated successfully";
      } else {
        echo "Error updating product: " . mysqli_error($conn);
      }
    }
  ?>
</body>

</html>
