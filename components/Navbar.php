<!--connect-->
<?php
    include('includes/connect.php');
?>

<style>
    .navbar {
        width: 100%;
        height: 100px;
        background-color: #0a4275;
    }
     
    .nav-link {
        color: white;
    }

    .container-social-media:hover {
        size: 10px;
    }

    .logo {
        height: 75px;
        width: auto;
    }

    .collapse {
        background-color: #0a4275;
    }
</style>



<!-- ========================= NAVBAR ========================= -->

<nav class="navbar home-navbar navbar-expand-lg shadow-lg">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">
            <img src="assets/media/logo.png" alt="logo" class="logo m-1">
        </a>

        <div class="col-md-1"></div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link m-1" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="Appoinment.php">APPOINTMENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="About.php">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="Blog.php">QUOTES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-1" href="Contact.php">CONTACT</a>
                </li>
            </ul>

            <div class="col-md-2"></div>

            <div class="container-social-media m-1">
                <a style="color: #3b5998;" href="#!" role="button">
                    <i class="fab fa-facebook-f fa-lg m-2"></i>
                </a>

                <a style="color: #55acee;" href="#!" role="button">
                    <i class="fab fa-twitter fa-lg m-2"></i>
                </a>

                <a style="color: #25d366;" href="#!" role="button">
                    <i class="fab fa-whatsapp fa-lg m-2"></i>
                </a>   

                <a style="color: #ac2bac;" href="#!" role="button">
                    <i class="fab fa-instagram fa-lg m-2"></i>
                </a>
            </div>

        </div>
    
    </div>

</nav>