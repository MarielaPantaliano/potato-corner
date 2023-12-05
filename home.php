<?php
    include('display_data.php');
    include('delete_data.php');
    $query = "SELECT * from home";  
    $run = mysqli_query($conn,$query);  
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT; Gorlz | Home</title>
        <link rel="icon" href="potato corner_icon.png">
        <link rel="stylesheet" href="dsa_styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <!------------- HEADER ------------->

    <header>
    <div class="header">
        <i class="fa fa-file" style="top: 16px; padding-left: 3%; padding-right: 1%; font-size: 30px; color: yellow; position: absolute; "></i>
        <i class="fa fa-user" style="top: 16px; padding-left: 80%; padding-right: 1%; font-size: 35px; color: yellow; position: absolute; "></i>
        <p href="#" class="header-text-a">Admin</p>
        <p href="#" class="header-text">Inventory File Maintenance</p>
    
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="developers.php">Developers</a>
                <a href="index.php">Log out</a>
            </div>
            
            <div id="main">
                <span class="nav" onclick="openNav()">&#9776;</span>
            </div>
                
                <script>
                    function openNav() {
                        document.getElementById("mySidenav").style.width = "250px";
                        document.getElementById("main").style.marginRight = "250px";
                    }
                    
                    function closeNav() {
                        document.getElementById("mySidenav").style.width = "0";
                        document.getElementById("main").style.marginRight= "0";
                    }
                </script>
    </div> 
    </header>

    <!------------- BODY ------------->
    
    <body class= "background">
    <section>
        <img alt="" class="home-logo" src="logo.png"> </i>

            <!------ FORM BOX BUTTONS ------->

            <div class="form-box-home">
                <p class= "text-home">MANAGE<br>FLAVORS & SIZES</p>

                <!------- FLAVOR & FORM -------->

                    <form id='flavor-size' class='home-flavor-size' method="post">
                        <div><button type='button' onclick="showPopupA()" class="button-add">Add</button>
                            <button type='button' onclick="showPopupB()" class="button-search">Search</button>
                            <button type='button' onclick="showPopupC()"class="button-display">Display</button>
                            <button type='button' onclick="showPopupD()"class="button-delete">Delete</button>
                            <button type='button' onclick="showpopupE()"class="button-update">Update</button>
                        </div>
                    </form>


            <!------- POP UP FUNCTION -------->


                <!------- ADD FLAVOR & SIZE FUNCTION -------->

                    <div class="popupA">
                        <div class="blockerA" onclick="hidePopupA()"></div>
                        <div class="contents">
                            <form id= "add" action="home_data.php" method="POST">
                            <input type='text' class='add' id='addflavor' style= "height: 40px" name='addflavor' placeholder='Enter a flavor here' required>
                            <input type='text' class='add' id='addsize' style= "top: 20%; height: 40px" name='addsize' placeholder='Enter a size here' required>
                            <input type='text' class='add' id='addprice' style= "top: 40%; height: 40px" name='addprice' placeholder='Enter a price here' required>
                            <button type='button' class="button-back" onclick="document.location='home.php'">BACK</button>
                            <button type='submit' name="submit1" id="submit1" class="button-add-submit">ADD</button>
                        </form>
                        </div>
                    </div>

                    <script>
                        const popupA = document.querySelector('.popupA');
                        function showPopupA() {
                            popupA.classList.add('open');
                        }
                        function hidePopupA() {
                            popupA.classList.remove('open');
                        }
                    </script>


                <!------- SEARCH FLAVOR & SIZE FUNCTION -------->

                <div class="popupB">
                    <div class="blockerB" onclick="hidePopupB()"></div>
                    <div class="contents">
                        <form id= "search" action="search_data.php" method="POST">
                        <input type='text' class='search' id='search' style= "height: 40px" name='search' placeholder='Search a flavor here' required>
                        <p style="color:#f5b638ef; font-family: Arvo; margin-top: 13%; margin-left: 32px"> Column: 
                        <select style="font-family: Arvo; background-color: #dfad57; color: rgb(33, 19, 0)" name="column"> </p>
                            <option value="addflavor">Flavor</option>
                            <option value="addsize">Size</option>
                            <option value="addprice">Price</option>
                        </select>
                        <br>
                        
                            <button type='button' class="button-back" onclick="document.location='home.php'">BACK</button>
                            <button type='submit' name="submit2" id="submit2" class="button-search-submit">SEARCH</button>
                        </form>
                    </div>
                </div>

                <script>
                    const popupB = document.querySelector('.popupB');
                    function showPopupB() {
                        popupB.classList.add('open');
                    }
                    function hidePopupB() {
                        popupB.classList.remove('open');
                    }
                </script>


                <!------- DISPLAY FLAVOR & SIZE FUNCTION -------->
                <div class="popupC">
                        <div class="blockerC" onclick="hidePopupC()"></div>
                        <div class="contents">
                            <form id= "display" action="home.php" method="POST">
                                <table width="85%" border="0" style="border-collapse:collapse; border-color:#662912; margin: auto; margin-top: 13%">
                                <thead>
                                    <tr>
                                        <th style="color:#f5b638ef; font-family: Arvo">Flavor</th>
                                        <th style="color:#f5b638ef; font-family: Arvo">Size</th>
                                        <th style="color:#f5b638ef; font-family: Arvo">Price</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                <?php
                                if(!empty($row))
                                foreach($row as $rows)
                                { 
                                ?>
                                
                                <tr>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addflavor']; ?></td>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addsize']; ?></td>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addprice']; ?></td>
                                </tr>

                                <?php } ?>
                                </tbody>
                                
                                </table>

                                <?php   
                                mysqli_close($conn);
                                ?>

                            <button type='button' class="button-back" onclick="document.location='home.php'">BACK</button>
                            </form>
                        </div>
                </div>

                <script>
                    const popupC = document.querySelector('.popupC');
                    function showPopupC() {
                        popupC.classList.add('open');
                    }
                    function hidePopupC() {
                        popupC.classList.remove('open');
                    }
                </script>
 

                <!------- DELETE FLAVOR  & SIZE FUNCTION -------->
                
                <div class="popupD">
                    <div class="blockerD" onclick="hidePopupD()"></div>
                    <div class="contents">
                        <form id= "delete" action="home.php" method="POST">
                            <table width="88%" border="0" style="border-collapse:collapse; border-color:#662912; margin: auto; margin-top: 13%">
                            <thead>
                                <tr>
                                    <th style="color:#f5b638ef; font-family: Arvo">Flavor</th>
                                    <th style="color:#f5b638ef; font-family: Arvo">Size</th>
                                    <th style="color:#f5b638ef; font-family: Arvo">Price</th>
                                    <th style="color:#f5b638ef; font-family: Arvo">Delete</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                                if(!empty($row))
                                foreach($row as $rows)
                                { 
                                ?>
                                <tr>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addflavor']; ?></td>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addsize']; ?></td>
                                    <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addprice']; ?></td>
                                    <td align="center"> <a style="color:red; font-family: Arvo" href="delete_data.php?entry=<?php echo $rows['entry']?>">Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        <button type='button' class="button-back" onclick="document.location='home.php'">BACK</button>
                        </form>
                    </div>
                </div>

                <script>
                    const popupD = document.querySelector('.popupD');
                    function showPopupD() {
                        popupD.classList.add('open');
                    }
                    function hidePopupD() {
                        popupD.classList.remove('open');
                    }
                </script>


                <!------- UPDATE FLAVOR & SIZE FUNCTION -------->

                <div class="popupE">
                    <div class="blockerE" onclick="hidePopupE()"></div>
                    <div class="contents">
                        <form id= "update" action="home.html" method="POST">
                            <table  width="88%" border="0" style="border-collapse:collapse; border-color:#662912; margin: auto; margin-top: 13%">
                                <thead>
                                    <tr>
                                        <th style="color:#f5b638ef; font-family: Arvo">Flavor</th>
                                        <th style="color:#f5b638ef; font-family: Arvo">Size</th>
                                        <th style="color:#f5b638ef; font-family: Arvo">Price</th>
                                        <th style="color:#f5b638ef; font-family: Arvo">Update</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                    if(!empty($row))
                                    foreach($row as $rows)
                                    { 
                                    ?>
                                    <tr>
                                        <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addflavor']; ?></td>
                                        <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addsize']; ?></td>
                                        <td align="center" style="color:rgb(33, 19, 0); font-family: Arvo"><?php echo $rows['addprice']; ?></td>
                                        <td align="center"> <a style="color:green; font-family: Arvo" href="update_data.php?entry=<?php echo $rows['entry']?>">Update</a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        <button type='button' class="button-back" onclick="document.location='home.php'">BACK</button>
                        </form>
                    </div>
                </div>

                <script>
                    const popupE = document.querySelector('.popupE');
                    function showpopupE() {
                        popupE.classList.add('open');
                    }
                    function hidepopupE() {
                        popupE.classList.remove('open');
                    }
                </script>

                <script>
                    var modal = document.getElementById('flavor-size');
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
            </div>
    </section>
    

    <!------------- FOOTER ------------->

    <footer class="footer">
    <div class="chekered-box">
        <table>
            <tr>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
            </tr>
    
            <tr>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
            </tr>
    
            <tr>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
                <td> </td>
                <td class = "highlight"> </td>
            </tr>
        </table>
    </div>
    </footer>

    </body>
</html>