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

  } else{
    echo "Failed to get data";
  }