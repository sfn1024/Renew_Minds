<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
// Session deleted and logged out

header('location: login.php');
    // back to login.php