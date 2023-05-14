<?php
    $con = mysqli_connect('localhost','root','','RenewMinds_db');
    if(!$con){
        die(mysqli_error($con));
    }
?>