<?php

  include('./dbcon.php');

  if(isset($_POST['register'])){
    //echo "Data received";
    $name = $_POST['name'];
    $city = $_POST['city'];
    $age = $_POST['age'];

    $query = "INSERT INTO student(name, city, age) VALUES ('$name','$city','$age')";
    $res = mysqli_query($con, $query);

    if($res){
      echo "Successfully inserted";
    }else{
      echo "Failed to insert";
    }
  }

  if(isset($_POST['update'])){
    $id=mysqli_real_escape_string($con,$_POST['id']);
    $name=$_POST['name'];
    $city = $_POST['city'];
    $age=$_POST['age'];

    $query = "UPDATE student SET name='$name',city='$city',age='$age' WHERE id='$id'";
    $res = mysqli_query($con, $query);

    if($res){
        //echo "Successfully updated";
        header("location:index.php");
    }else{
        echo "Failed to update";
    }
}