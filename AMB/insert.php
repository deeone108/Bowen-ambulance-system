<?php

include("api.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $sex = $_POST['sex'];
    $college = $_POST['college'];
    $depart = $_POST['depart'];
    $insertinto = "INSERT INTO ambvalue (nameu, locationu, sex, college, department) VALUES ('$name','$location','$sex','$college','$depart')";

    $poster = mysqli_query($conn,$insertinto);
    if($poster){
        header('Location: index.html');
    }else{
        echo "Not inserted, Can you contact us again!";
    }
}