/* this file is for checking whether the id and password entered by the user is correct or not */
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
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//selecting data form the database
$sql = "SELECT username, password FROM signup where username='$username' and password='$password'";
$result = $conn->query($sql);
if($result->num_rows==1){
    echo "You have successfully logged into my website.";
}

else{
    echo "Error, wrong username and passowrd";
}

$conn->close();

?>