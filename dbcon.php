<?php


  function insert_db($insSql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mizan";
    
    //https://www.w3schools.com/php/php_mysql_insert.asp
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
      $conn->query($insSql);
    }
    $conn->close();		
}
?>