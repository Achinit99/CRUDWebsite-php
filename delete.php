<?php

  include('./dbcon.php');

  $id=$_GET['id'];

  $query = "DELETE FROM student WHERE id='$id'";
  $res = mysqli_query($con, $query);

  if($res){
    header('location: index.php');
  }