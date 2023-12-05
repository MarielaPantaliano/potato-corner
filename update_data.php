<?php
require('connection_data.php');
$entry=$_REQUEST['entry'];
$query = "SELECT * from home where entry='".$entry."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT; Gorlz | Update</title>
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

        <div class="form-box-update">
                <p class= "text-form-update">UPDATE</p>

                <!-------- UPDATE DATABASE ---------->

                <?php
                $status = "";
                if(isset($_POST['new']) && $_POST['new']==1)
                {
                    $entry=$_REQUEST['entry'];
                    $addflavor =$_REQUEST['addflavor'];
                    $addsize =$_REQUEST['addsize'];
                    $addprice = $_REQUEST['addprice'];
                    $update="update home set addflavor='".$addflavor."', addsize='".$addsize."', addprice='".$addprice."' where entry='".$entry."'";
                        mysqli_query($conn, $update) or die(mysqli_error());
                        $status = "<br><br><a href='home.php' class='text-update-b'>View Updated Record</a>";
                        echo '<script> alert("Successfully Updated!")</script>'.$status.'</p>';
                                }
                                else {
                ?> <div>

            <!------- UPDATE FORM -------->
                    <form name="update" method="post" action=""> 
                        <input type="hidden" name="new" value="1" />
                        <input name="entry" type="hidden" value="<?php echo $row['entry'];?>" />
                        <p class ="text-update-a">FLAVOR</p>
                        <p><input type="text"  class='text-box-update' style= "height: 40px" name="addflavor" placeholder="Enter new flavor" 
                        required value="<?php echo $row['addflavor'];?>" /></p>
                        <p class ="text-update-a">SIZE</p> 
                        <p><input type="text"  class='text-box-update' style= "height: 40px" name="addsize" placeholder="Enter new size" 
                        required value="<?php echo $row['addsize'];?>" /></p>
                        <p class ="text-update-a">PRICE</p>
                        <p><input type="text"  class='text-box-update' style= "height: 40px" name="addprice" placeholder="Enter new price" 
                        required value="<?php echo $row['addprice'];?>" /></p>
                        <p><input class="button-update-submit" name="submit" type="submit" value="UPDATE" /></p>
                    </form>  
                    <?php } ?>
                 </div>
            </div>
     </body>
</html>