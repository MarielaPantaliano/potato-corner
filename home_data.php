<?php 

session_start(); 

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST ['submit'])){
    $conn = mysqli_connect('localhost' , 'root', '' , 'potato_corner') or die("Connection Failed:" .mysqli_connect_error());

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username= validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        exit();
    }
    else if(empty($password)) {
        exit();
    }
    else{
        $sql = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {
                echo '<script> alert("Login Success!")</script>';
                include("home.php");
                $_SESSION['username'] = $row['username'];
                $_SESSION['password'] = $row['password'];
                $_SESSION['id'] = $row['id'];

                exit();
            }
            else{
                echo '<script> alert("Incorrect username or password!")</script>';
                include("login.php");

                exit();
            }
        }
        else {
            echo '<script> alert("Incorrect username or password!")</script>';
            include("login.php");

            exit();
        }

    }
} 

else {
    header("Location: index.php");

    exit();
}
} 
?>


<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST ['submit1'])){
        $conn = mysqli_connect('localhost' , 'root', '' , 'potato_corner') or die("Connection Failed:" .mysqli_connect_error());
        if(isset($_POST['addflavor']) && isset($_POST['addsize']) && isset($_POST['addprice'])){
            $addflavor = $_POST['addflavor'];
            $addsize = $_POST['addsize'];
            $addprice = $_POST['addprice'];
            $sql = "INSERT INTO home(addflavor, addsize, addprice) VALUES ('$addflavor' , '$addsize' , '$addprice')"; 
            $query = mysqli_query($conn, $sql);
            if($query) {
                echo '<script> alert("Successfully Added!")</script>';
                include("home.php");
            }
            else {
                echo 'Not Submitted';
            }
        }
    }
?>

