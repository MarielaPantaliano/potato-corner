<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "potato_corner";
     
   $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn -> connect_errno) {
       echo "Failed to connect to MySQL: " . $conn -> connect_error;
       exit();
    }
  
    $sql = "SELECT * from home";
    $result = ($conn->query($sql));
    $row = []; 
  
    if ($result->num_rows > 0) {
        $row = $result->fetch_all(MYSQLI_ASSOC);  
    }   
?>