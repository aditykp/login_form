<?php
$username = $_POST['username'];
$password = $_POST['password'];

//Database connection
$conn = new mysqli('localhost','root','','login_form');
if($conn-> connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("select * from login where username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}
?>