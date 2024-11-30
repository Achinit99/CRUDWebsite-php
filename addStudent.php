<!DOCTYPE html>
<html>
  <head>
    <title>Add Student</title>
  </head>
  <body>
    <h2>Add Student</h2>

    <form method="post" action="./process.php">
      <label for="name">Name: </label>
      <input type="text" name="name" id="name"><br><br>

      <label for="city">City: </label>
      <input type="text" name="city" id="city"><br><br>

      <label for="age">Age: </label>
      <input type="number" name="age" id="age"><br><br>

      <input type="submit" name="register" value="Register">
    </form>

  </body>
</html>