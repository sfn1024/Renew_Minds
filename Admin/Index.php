<!--connect-->
<?php
    include('../includes/connect.php');
    include('functions/common_functions.php');
    session_start();

    if (!isset($_SESSION['login'])) {
        header('location:login.php');
        exit;
    }
   ?>

<!doctype html>
<html lang="en">

<head>
    <title>Renew Minds Admin</title>

    <!-- ========================= IMPORTS ========================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="icon" type="image/x-icon" href="../assets/media/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="table.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <style>    
        body{
            overflow-x: hidden;
        }
        
        .nav-cont{
            padding: 0;
            margin: auto 0px auto 60px;
        }
        .admin-logo{
            margin-left: 0px;
            width: 20%;
            height: auto%;
        }

        .bg-clr{
            background-color: #0a4275;
        }

        footer {
            bottom: 0;
            width: 100%;
        }
        
        .nav{
            background-color: #cecece;
        }
        
        .dropdown-item{
            color: white;
        }

    </style>

</head>
<body>
    <!-- ========================= NAVBAR ========================= -->

    <nav class="navbar bg-clr navbar-expand-lg sticky-top">
        <div class="container nav-cont d-flex">
            <img src="../assets/media/logo.png" class="admin-logo d-flex justify-content-start" alt="logo">
            <h3 class="text-center text-light mx-auto">Admin Dashboard</h3>
            <div class="d-flex justify-content-start">
                <a href="logout.php">
                    <i class="fa-solid fa-right-from-bracket text-light"></i>
                </a>
            </div>

        </div>
    </nav>
    <div class="row ">
        <div class="nav col-md-12 p-3 d-flex align-items-center">
            <div class="button text-center m-auto">
                <button class="btn btn-success bg-clr"><a href="index.php?dashboard" class="nav-link text-light my-1 p-1"><i class="fa-solid fa-home text-light"></i></a></button>

                <button class="btn btn-dark bg-clr">
                    <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Appointment
                    </a>
                    <ul class="dropdown-menu bg-clr">
                        <li><a class="dropdown-item" href="index.php?view_appointments">View Appointments</a></li>
                    </ul>
                </button>
                <button class="btn btn-dark bg-clr"><a href="index.php?view_contact" class="nav-link text-light my-1 p-1">Contact</a></button>
                <button class="btn btn-dark bg-clr">
                    <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Degree
                    </a>
                    <ul class="dropdown-menu bg-clr">
                        <li><a class="dropdown-item" href="index.php?manage_degree">Manage Degrees</a></li>
                        <li><a class="dropdown-item" href="index.php?insert_degree">Insert Degrees</a></li>
                    </ul>
                </button>
                <button class="btn btn-dark bg-clr">
                    <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mentor
                    </a>
                    <ul class="dropdown-menu bg-clr">
                        <li><a class="dropdown-item" href="index.php?manage_mentor">Manage Mentors</a></li>
                        <li><a class="dropdown-item" href="index.php?insert_mentor">Insert Mentors</a></li>
                    </ul>
                </button>
                <button class="btn btn-dark bg-clr">
                    <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Quotes
                    </a>
                    <ul class="dropdown-menu bg-clr">
                        <li><a class="dropdown-item" href="index.php?manage_blog">Manage Quotes</a></li>
                        <li><a class="dropdown-item" href="index.php?insert_blog">Insert Quotes</a></li>
                    </ul>
                </button>
            </div>
        </div>
    </div>

    <!--GET pages to Admin index-->
    <div class="container my-3">
        <?php
            If(isset($_GET['dashboard'])){
                include('dashboard.php');
            }

            If(isset($_GET['insert_mentor'])){
                include('insert_mentor.php');
            }

            If(isset($_GET['insert_degree'])){
                include('insert_degree.php');
            }

            If(isset($_GET['insert_blog'])){
                include('insert_blog.php');
            }

            If(isset($_GET['manage_mentor'])){
                include('manage_mentor.php');
            }

            If(isset($_GET['manage_degree'])){
                include('manage_degree.php');
            }

            If(isset($_GET['manage_blog'])){
                include('manage_blog.php');
            }

            If(isset($_GET['view_appointments'])){
                include('view_appointments.php');
            }

            If(isset($_GET['view_contact'])){
                include('view_contact.php');
            }

            If(isset($_GET['edit_mentor'])){
                include('edit_mentor.php');
            }

            If(isset($_GET['edit_degree'])){
                include('edit_degree.php');
            }

            If(isset($_GET['edit_blog'])){
                include('edit_blog.php');
            }

            If(isset($_GET['delete_mentor'])){
                include('delete_mentor.php');
            }

            If(isset($_GET['delete_degree'])){
                include('delete_degree.php');
            }

            If(isset($_GET['delete_blog'])){
                include('delete_blog.php');
            }
        ?>
    </div>
    

    <!-- ========================= FOOTER ========================= -->

    <footer class="text-white bg-clr">
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-white" href="../index.php">Renew Minds</a>
        </div>

    </footer>

    
</body>
</html>