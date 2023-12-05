<?php   

include 'connection_data.php';  

if (isset($_GET['entry'])) {  
      $entry = $_GET['entry'];  
      $query = "DELETE FROM home WHERE entry = '$entry'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:home.php');  
          
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 } 

?>