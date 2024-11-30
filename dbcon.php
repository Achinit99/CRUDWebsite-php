<?php 

    $hostname = 'localhost';
    $username = 'root';
    $pw = '';
    $dbname = 'simplecrud';

    $con = mysqli_connect($hostname,$username,$pw,$dbname) or die("Failed to connect");