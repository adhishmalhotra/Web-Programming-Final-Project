<!-- This file checks whether the username and password entered by the user is right or not -->
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        
    </body>
</html>
<?php
//assigning php variables the value which is being received from the LoginForm
$username = $_POST["username"];
$password = $_POST["password"];

// creating a database connection 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="user";

// create connection 
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// check connection 
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

//selecting data form the database
$sql = "SELECT username, password FROM signup where username='$username' and password='$password'";
$result = $conn->query($sql);
if($result->num_rows==1){
    header("Location: main.php"); 

// html to be replaced if logged in
$html ='<div class="navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
<ul class="nav nav-pills">
    <li class="nav-item">
        <a href="main.php" class="nav-link active">Home</a>
    </li>
   
    <li class="nav-item">
        <a href="#schedule" class="nav-link">Schedule an Event</a>
    </li>

    <li class="nav-item">
        <a href="contact.html" class="nav-link" data-toggle="modal">Contact</a>
    </li>
    <li id="login" class="nav-item">
        <a href="Log In Page.html" class="nav-link">Login</a>
    </li>
    <li id="login" class="nav-item">
        <a href="Log In Page.html" class="nav-link">Sign up</a>
    </li>
</ul>
</div>';

    // echo "You have successfully logged into my website.";
    $html = preg_replace('#<li id="login">(.*?)</li>#', '', $html);
}

else{
    echo "Error, wrong username and passowrd";
}

$conn->close();

?>