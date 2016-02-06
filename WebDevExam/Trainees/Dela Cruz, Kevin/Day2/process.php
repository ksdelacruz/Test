<?php  

$post = $_POST;

echo $post['firstname'];
echo $post['lastname'];
echo $post['email'];
echo $post['age'];

$server = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$con = new mysqli($server, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>