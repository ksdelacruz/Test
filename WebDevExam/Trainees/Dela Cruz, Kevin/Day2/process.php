<?php  

$post = $_POST;

echo $post['firstname'];

$server = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>