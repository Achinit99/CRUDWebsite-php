<?php include('./dbcon.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Update Student</title>
  </head>
  <body>
    <h2>Update Student</h2>
    <?php
        $id=$_GET['id'];

        $query = "SELECT * FROM student WHERE id='$id'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($res);
    ?>

    <form method="post" action="./process.php">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>"><br><br>

      <label for="city">City: </label>
      <input type="text" name="city" id="city" value="<?php echo $row['city']; ?>"><br><br>

      <label for="age">Age: </label>
      <input type="number" name="age" id="age" value="<?php echo $row['age']; ?>"><br><br>

      <input type="submit" name="update" value="Update">
    </form>

  </body>
</html>