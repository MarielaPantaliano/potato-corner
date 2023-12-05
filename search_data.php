<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST ['submit2'])){
        $conn = mysqli_connect('localhost' , 'root', '' , 'potato_corner') or die("Connection Failed:" .mysqli_connect_error());
        $search = $_POST['search'];
        $column = $_POST['column'];
        $sql = "SELECT * from home where $column  like '%$search%'";
        $result = $conn->query($sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT; Gorlz | Search</title>
        <link rel="icon" href="potato corner_icon.png">
        <link rel="stylesheet" href="dsa_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 <!------------- HEADER ------------->

 <header>
   
    </header>

    <!------------- BODY ------------->
    
    <body class= "background">
    <section>

        <div class="form-box-search">
                <p class= "text-form-search">SEARCH RESULT</p>

                <!-------- UPDATE DATABASE ---------->

            <!------- UPDATE FORM -------->

                    <form name="form" method="post" action="home.php"> 
                     <div class="text-search-a"><?php
                 if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc() ){
                        echo '<script> alert("See the record here")</script>';
                        echo "Flavor: " .$row["addflavor"]." <br>  Size: ".$row["addsize"]." <br> Price: ".$row["addprice"]."<br><br>";
                        
                    }
                } 
                else {
                    echo '<script> alert("No record!")</script>';
                }
                $conn->close();?>    
          <button type='button' class="button-back-search" onclick="document.location='home.php'">BACK</button>

                            </form>  
                    </form>
                 </div>
             </div>
          </body>
     </html>