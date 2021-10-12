<?php 
$conn = mysqli_connect("localhost","root","","amb");
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}else{
    echo "Connection Successful";
}
?>