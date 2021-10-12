<?php
include('api.php');
    $query = "SELECT count(*) as UserC FROM tabler";
    $result = mysqli_query($conn,$query);
$va = mysqli_num_rows($result);
$count = $result[UserC];
if($va >= 1){
    echo $va;
}
?>