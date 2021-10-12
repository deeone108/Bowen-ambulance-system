<?php
include('api.php');
if($isset($_POST['pusher'])){
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $condition = mysqli_real_escape_string($conn,$_POST['condition']);

    $query = "INSERT INTO tabler (locations, conditions) VALUES('$location','$condition')";
    if(mysqli_query($conn,$query)){
        echo "Inserted ";
    }else{
        echo "Value not saved!";
    }
}
?>