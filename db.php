<?php
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = "my_db";
  $conn = mysqli_connect($servername, $username, $password, "$dbname");
    if(!$conn){
      die('Could not connect MySql Server: ' .mysql_error());
    }
  ?>
