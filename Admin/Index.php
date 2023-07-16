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
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



    <style>
        body{
            overflow-x: hidden;
        }
        
        .admin-logo{
            width: 20%;
            height: auto%;
        }

        .navbar{
            background-color: #0a4275;
        }

        footer {
            background-color: #0a4275;
            bottom: 0;
            width: 100%;
        }

        .product_image{
            width: 100px;
            object-fit: contain;
        }
    </style>

</head>
<body>
    <!-- ========================= NAVBAR ========================= -->

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container d-flex">
            <img src="../assets/media/logo.png" class="admin-logo d-flex justify-content-start" alt="logo">
            <h3 class="text-center text-light mx-auto">Admin Dashboard</h3>
            <div class="d-flex justify-content-start"><i class="fa-solid fa-right-from-bracket text-light"></i></div>
        </div>
    </nav>
    
    <div class="row ">
        <div class="col-md-12 p-3 bg-secondary p-1 d-flex align-items-center">
            <div class="button text-center m-auto">
                <button><a href="../Admin/Insert_Product.php" class="nav-link text-light bg-dark my-1 p-1">View Mentors</a></button>
                <button><a href="index.php?insert_mentor" class="nav-link text-light bg-dark my-1 p-1">Insert Mentor</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-dark my-1 p-1">Insert Category</a></button>
                <button><a href="index.php?view_category" class="nav-link text-light bg-dark my-1 p-1">View Category</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-dark my-1 p-1">Insert Brand</a></button>
                <button><a href="index.php?view_brand" class="nav-link text-light bg-dark my-1 p-1">View Brand</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1 p-1">Logout</a></button>
<!--            
                <button><a href="" class="nav-link text-light bg-dark my-1 p-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1 p-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-dark my-1 p-1">List Users</a></button>
-->
            </div>
        </div>
    </div>

    <!--GET pages to Admin index-->
    <div class="container my-3">
        <?php
            If(isset($_GET['insert_mentor'])){
                include('insert_mentor.php');
            }
        ?>
    </div>
    

    <!-- ========================= FOOTER ========================= -->

    <footer class="text-white">
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