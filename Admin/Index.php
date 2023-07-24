<!--connect-->
<?php
    include('../includes/connect.php');
    include('functions/common_functions.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../assets/images/SJ-logo-white.png" type="image/x-icon">

    <!-- ========================= IMPORTS ========================= -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets\css\style.css">

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
            <div class="d-flex justify-content-start"><i class="fa-solid fa-right-from-bracket text-light"></i></div>
        </div>
    </nav>
    <div class="row ">
        <div class="nav col-md-12 p-3 d-flex align-items-center">
            <div class="button text-center m-auto">
                <button class="btn btn-success bg-clr"><a href="index.php" class="nav-link text-light my-1 p-1"><i class="fa-solid fa-home text-light"></i></a></button>
                <button class="btn btn-dark bg-clr">
                    <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Appointment
                    </a>
                    <ul class="dropdown-menu bg-clr">
                        <li><a class="dropdown-item" href="#">View Appointments</a></li>
                        <li><a class="dropdown-item" href="index.php?manage_mentor">Manage Mentors</a></li>
                        <li><a class="dropdown-item" href="index.php?insert_mentor">Insert Mentors</a></li>
                        <li><a class="dropdown-item" href="index.php?manage_degree">Manage Degrees</a></li>
                        <li><a class="dropdown-item" href="index.php?insert_degree">Insert Degrees</a></li>
                    </ul>
                </button>
                <button class="btn btn-dark bg-clr"><a href="index.php" class="nav-link text-light my-1 p-1">Blogs</a></button>
                <button class="btn btn-dark bg-clr"><a href="index.php" class="nav-link text-light my-1 p-1">Contact</a></button>
                <button class="btn btn-dark bg-clr"><a href="index.php" class="nav-link text-light my-1 p-1">Accounts</a></button>
            </div>
        </div>
    </div>

    <!--GET pages to Admin index-->
    <div class="container my-3">
        <?php
            If(isset($_GET['insert_mentor'])){
                include('insert_mentor.php');
            }

            If(isset($_GET['insert_degree'])){
                include('insert_degree.php');
            }

            If(isset($_GET['manage_mentor'])){
                include('manage_mentor.php');
            }

            If(isset($_GET['manage_degree'])){
                include('manage_degree.php');
            }

            If(isset($_GET['edit_mentor'])){
                include('edit_mentor.php');
            }

            If(isset($_GET['edit_degree'])){
                include('edit_degree.php');
            }
        ?>
    </div>
    

    <!-- ========================= FOOTER ========================= -->

    <footer class="text-white bg-clr">
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-white" href="#">Renew Minds</a>
        </div>

    </footer>

    
</body>
</html>

<!--
GET pages to Admin index
    <div class="container my-3">

                If(isset($_GET['insert_category'])){
                    include('Insert_Category.php');
                }
                If(isset($_GET['view_category'])){
                    include('View_Category.php');
                }
                If(isset($_GET['edit_category'])){
                    include('Edit_Category.php');
                }
                If(isset($_GET['delete_category'])){
                    include('Delete_Category.php');
                }
                If(isset($_GET['insert_brand'])){
                    include('Insert_Brand.php');
                }
                If(isset($_GET['view_brand'])){
                    include('View_Brand.php');
                }
                If(isset($_GET['edit_brand'])){
                    include('Edit_Brand.php');
                }
                If(isset($_GET['delete_brand'])){
                    include('Delete_Brand.php');
                }
                If(isset($_GET['view_products'])){
                    include('View_Products.php');
                }
                If(isset($_GET['edit_products'])){
                    include('Edit_Products.php');
                }
                If(isset($_GET['delete_products'])){
                    include('Delete_Product.php');
                }
            ?>
        </div>
-->