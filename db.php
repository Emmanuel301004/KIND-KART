//connecting to my data base and cheacking if connected it echos connected sucessfully else it dies 
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kindcart_server";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_erro){
    die("Error connecting to",$conn->connect_error);
}else{
    echo "connected sucessfully"
}
?>
