<!DOCTYPE html>
<html>
    <head></head>
    <body>
        
    </body>
</html>
<?php
$host="localhost";
$user="root";
$pass="";
$name="user";
$connection = new mysqli($host, $user, $pass, $name);
if ($connection->connect_error) {
    die("connection failed " . $conn->connect_error);
}
$sql = "INSERT INTO signup(email, username, password)
        VALUES ('{$connection->real_escape_string($_POST['email'])}',
            '{$connection->real_escape_string($_POST['UserName'])}',
            '{$connection->real_escape_string($_POST['psw'])}')";

$insertsql = $connection->query($sql);
if($insertsql==TRUE){
    echo "<h1>It Works!!</h1>";
}
else{
    die("error:{$connection->errno}:{$connection->error}");
}
$connection->close();
?>