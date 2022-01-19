<?php
  define("servername", "localhost");
  define("username", "root");
  define("password", "");
  define("dbname", "my_db");

  $conn = mysqli_connect(servername, username, password, dbname);
    if(!$conn){
      die('Could not connect MySql Server: ' .mysqli_error());
    }
  ?>
