<?php

// log Database
$log = mysqli_connect("localhost", "root", "", "mental_health_db");

session_start();
// If you can login the go to index.php
if (isset($_SESSION['login'])) {
    header('location:index.php');
    exit;
}

// if the button named login is clicked
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = ($_POST['password']);
   
    // retrieve data from the user where the email and password are taken
    $result = mysqli_query($log, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    
    $check = mysqli_num_rows($result);

    // if $check is equal to 1, then successfully login and go to admin page
    if ($check === 1) {
        $_SESSION['login'] = true;

        header('location:admin');
        exit;
    }
    
    // if $check is 0 then show error
    $error = true;  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/login.css">

    <title>Login | Renew Minds</title>
</head>

<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

<!----------------------- Login Container -------------------------->

   <div class="row border rounded-5 p-3 bg-white shadow box-area">

<!--------------------------- Left Box ----------------------------->

   <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
       <div class="featured-image mb-3">
        <img src="assets/media/1.png" class="img-fluid" style="width: 250px;">
       </div>
       <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
       <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Embrace the Journey, Empower Your Mind.</small>
   </div> 

<!-------------------- ------ Right Box ---------------------------->
    
   <div class="col-md-6 right-box">
      <div class="row align-items-center">
            <div class="header-text mb-4">
                 <h2>Hello,Again</h2>
                 <p>We are happy to have you back.</p>
            </div>
            <form action="" method="post">
            <div class="input-group mb-3">
                <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" name="email" autocomplete="off" required>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" name="password" autocomplete="off" required>
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="formCheck">
                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                </div>
                <div class="forgot">
                        <small><a href="frg_psw.php">Forgot Password?</a></small>
                    </div>
            </div>
            <div class="input-group mb-3">
                <button class="btn btn-primary text-uppercase" type="submit" name="login">Login</button>
            </div>
            </form>
      </div>
   </div> 

  </div>
</div>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>

 <!-- This error if unable to login -->
 <?php if (isset($error)) : ?>
                <?php echo '<script>alert("Username or Password Wrong!");</script>'; ?>
            <?php endif; ?>

