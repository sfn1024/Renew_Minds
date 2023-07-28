<?php
    $con = mysqli_connect('localhost','root','','mental_health_db');
    if(!$con){
        die(mysqli_error($con));
    }
?>