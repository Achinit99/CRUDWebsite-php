<?php include('./dbcon.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Besic PHP CRUD Website</title>
  </head>
  <body>
    <h1>Student Details</h1>
    <a href="./addStudent.php">Add Student</a>
    <table>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>City</th>
        <th>Age</th>
        <th>Action</th>
      </tr>
    <?php
        $query = "SELECT * FROM student";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)>0){
          while($row = mysqli_fetch_assoc($res)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['age']."</td>";
            echo "<td>";
            ?>
            <a href="./update.php?id=<?php echo $row['id']; ?>">Update</a>
            <a href="./delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            <?php
            echo "</td>";
            echo "</tr>";
          }
        }
     ?>
      <tr>
        <td>03</td>
        <td>Avishka</td>
        <td>Narammala</td>
        <td>26</td>
      </tr>
    </table>
  </body>
</html>