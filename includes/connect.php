<?php
    $con = mysqli_connect('localhost','root','','renew_minds_db');
    if(!$con){
        die(mysqli_error($con));
    }
?>