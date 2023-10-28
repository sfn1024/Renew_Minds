<!--connect-->
<?php include('includes/connect.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    <?php include('components/Imports.php'); ?>

    <style>
        body{
            overflow-x: hidden;
        }

        .card-img-top{
            height: 300px;
        }
    </style>
    
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <!-- ========================= BLOG ========================= -->

    <div class="row">
                <!--Cards-->
                <div class="col-md-12">
                    <!--card-->
                    <div class="row">
                            <?php
                                $select_query= "Select * from `quotes`";
                                $result_query= mysqli_query ($con, $select_query);

                                while ($row= mysqli_fetch_assoc ($result_query)){
                                    $quote_title= $row['quote_title'];
                                    $author= $row['author'];
                                    $image= $row['image'];
                                    $date= $row['date'];

                                    echo "<div class='col-md-4 mb-3' data-aos='fade-down' data-aos-delay='250'>
                                            <div class='card h-80 m-4'>
                                                <img src='Admin/images/$image' class='card-img-top' data-aos='fade-down' data-aos-delay='150' alt='$image'>
                                                <div class='card-body'>
                                                    <p class='date'>$date</p>
                                                    <h5 class='quote-title'>$quote_title</h5>
                                                    <p class='author'>$author</p>                   
                                                </div>
                                            </div>
                                        </div>";
                                }
                            ?>
                    </div>
                </div>
            </div>

    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>