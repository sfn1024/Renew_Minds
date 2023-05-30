<?php
    $con = mysqli_connect('localhost','root','','mentalhealth_db');
    if(!$con){
        die(mysqli_error($con));
    }
?>