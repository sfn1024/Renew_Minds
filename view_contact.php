<!--connect-->
<?php include('includes/connect.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    <?php include('components/Imports.php'); ?>
    
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <!-- ========================= BLOG ========================= -->
    <!-- Start your code here...

        data-aos js animation sample...
        <div class=" " data-aos="fade-down" data-aos-delay="50"> 
    -->

    <p>hello</p>
    <?php
    $sql = "SELECT name, email, contactno,gender,education,address FROM contactpage";
                $result = $con->query($sql);

                if ($result->num_rows > 0){
                  echo "<table class='table'> <tr> <th scope='col'>  NAME </th> <th scope='col'> email</th> <th scope='col'> contact no</th>    <th scope='col'> gender</th> <th scope='col'> education</th> <th scope='col'> address</th> </tr>";

                  while($row = $result->fetch_assoc()) {
                    echo "<tr> <td>" . $row ["name"] . "</td> <td>" . $row ["email"] . "</td> <td>" .
                    $row ["contactno"] . "</td> <td>" . $row ["gender"] . "</td><td>" . $row ["education"] . "</td><td>" . $row ["address"] . "</td> </tr>";

                  }
                  echo "</table>";

                } 
                  else {
                    echo "0 results";
                  }
                $con->close();   
            ?>


    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>

