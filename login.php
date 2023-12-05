<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IT; Gorlz | Log in</title>
        <link rel="icon" href="potato corner_icon.png">
        <link rel="stylesheet" href="dsa_styles.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <!------------- HEADER ------------->

    <header>
    <div class="header">
        <i class="fa fa-file" style="top: 16px; padding-left: 3%; padding-right: 1%; font-size: 30px; color: yellow; position: absolute; "></i>
        <i class="fa fa-user" style="top: 16px; padding-left: 88%; padding-right: 1%; font-size: 40px; color: yellow; position: absolute; "></i>
        <p href="#" class="header-text">Inventory File Maintenance</p>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Note: You must log in to see the contents of this bar</a>
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
            <form id='login' action="home_data.php" method="POST">
                <section>
                <img alt="" class="body-logo" src="logo.png"> </i>
                <div class="form-box-login">
                    <img alt="" class="avatar" src="avatar.png"></img>
                    <br>
                    <p class ="text-login-a">USERNAME</p>
                    <input type='text' class='input-username' id='username' name='username' placeholder='Enter your username' value="" required>
                    
                    <p class ="text-login-b">PASSWORD</p>
                    <input type='password' class='input-pass' id='password' name='password' placeholder='Enter your password' value="" required>
                    <button type='submit' name="submit" id="submit"class="button-login">ADMIN LOGIN</button>
                </div>
                </section> 
            </form>
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