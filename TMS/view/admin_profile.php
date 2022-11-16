<?php


include("../control/admin_profile_process.php");
if(!isset($_SESSION['firstName']))
{
    header("Location: admin_login.php");
    echo "<br>Login first<br>";

}

setcookie("Username", $_SESSION['username'], time() + (86400*30),"/");
?>
<html>
    <body>

    <div>  
        <p><h1 align="center">
           <span style="color:indianred"> TOURISM MANAGEMENT SYSTEM </span>
           </h1>
        </p>
        <hr>  
    </div>
    
        <h1>Welcome <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?> </h1><br>
        <hr size="2" width="100%">
        <h2>User Info</h2><br>
        <?php
        echo "First name: ".$_SESSION['firstName']."<br>";
        echo "Last name: ".$_SESSION['lastName']."<br>";
        echo "Password: ".$_SESSION['password']."<br>";
        echo "Username: ".$_SESSION['username']."<br>";
        echo "Email: ".$_SESSION['email']."<br>";
        echo "Mobile no.: ".$_SESSION['mobile']."<br>";
        echo "Date of birth: ".$_SESSION['Dob']."<br>";
        echo "Gender: ".$_SESSION['gen']."<br>";
        //echo "Uploaded file: ".$_SESSION['Files']."<br>";
        //echo "Username: ".$_SESSION['username']."<br>";
        ?>
        <br><br>
        <a href="../view/admin_Registration.php"> Register new account </a> <br>
        <a href="../view/admin_logout.php">Logut</a><br>
        <a href="../view/homepage.php">Go to homepage</a>

    </body>
</html>