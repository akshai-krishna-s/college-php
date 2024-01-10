<!DOCTYPE html>
<html lang="en">

<head>
  <title>Database creation</title>
</head>

<body>
  <form action="" method="post">
    <label for="db_name">Database name:</label>
    <input type="text" name="db_name"><br><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
    if(isset($_POST['submit'])) {
      $conn = mysqli_connect("localhost", "root", "");
      $db_name = $_POST['db_name'];
      if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } else {
        $sql = "CREATE DATABASE $db_name";
        if(mysqli_query($conn, $sql)) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . mysqli_error($conn);
        }
      }
    }
  ?>
</body>

</html>
