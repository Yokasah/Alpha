<!--Made By Tomás Morais-->


<?php
$servername = "localhost";
$username = "example";
$password = "1234";

//The username and password in this case are examples,you have to put the user from your own PHPMyAdmin and use it 
//in the rest of the project!!

try{
    $conn = new PDO("mysql:host=$servername;dbname=db_alphasphere",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}
?>$