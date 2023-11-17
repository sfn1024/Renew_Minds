<!--connect-->
<?php include('includes/connect.php'); ?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$address=$_POST['address'];
$query=mysqli_query($con,"insert into contact(name,email,contactno,gender,education,address)
values('$name','$email','$contactno','$gender','$education','$address')");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    
    
    <?php include('components/Imports.php'); ?>


     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>contact</title>
    <link href="./assets/css/style.css" rel="stylesheet">
    <style>
        #contact::after {
            margin-top: 65%;
            content: "";
            width: 100%;
            height: 80%;
            background: linear-gradient(rgba(var(--c-brand-rgb), 0.8), rgba(var(--c-brand-rgb), 0.8)), url(./assets/media/contact.jpg);
            background-position: center;
            background-size: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .first_col {
            margin-left: 22%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 20px;
        }

        .row-last{
            width= 100%;
        }

        .details{
            background-color: #0a4275;
            border-radius: 20px;
        }

        .img-fluid{
            height: 450px;
            width: 800px;
        }
    </style>
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <!-- ========================= CONTACT ========================= -->
    <!-- Start your code here...

        data-aos js animation sample...
        <div class=" " data-aos="fade-down" data-aos-delay="50"
    -->
    
    <div class="container py-5">

        <div class="row">
            <div class="col-md-7">
                <div class="fade-in-image mt-0">
                    <img src="./assets/media/contact.png" class="img-fluid">
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 text-center details" id="contact">
                <div><p></p></div>
                <div class="row pb-3">
                    <h4 class="text-secondary">NOTE</h4>
                    <p class="text-warning">Please re-check mentors availability <br> via phone before your <br> appointment time</p>
                </div>

                <div class="row pt-3 text-light">
                    <h4 class="text-secondary">CALL US</h4>
                    <p class="text-warning"> 
                        +94 77 2140 000 <br> +94 71 2140 000 <br> +94 55 2140 000
                    </p>
                </div>

                <div class="row p-3">
                    <h4 class="text-secondary">EMAIL</h4>
                    <p class="text-warning">renewminds_offl@gmail.com <br> renewminds_buss@gmail.com
                    </p>
                </div>

            </div>
        </div>
                
        <div class="row mt-5">
            
            <div class="col-md-6 first_col text-dark fw-bold bg-light">

                <div class="container">
                    <h1 class="text-center mt-3">Contact Us</h1>
                </div>

                <form class="p-4 mt-3" name="insert" action="" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" value=""  class="form-control" required />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                        <input type="email" name="email" id="email" value=""  class="form-control" required />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contact Number</label>
                        <input type="text" name="contactno" id="contactno" value=""  class="form-control" maxlength="10" required />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea name="address" class="form-control"  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Education</label>
                        <select name="education" id="email" class="form-control" required >
                            <option value="">Select your Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gender -</label>
                        <input type="radio" name="gender" value="Male" checked >Male
                        <input type="radio" name="gender" value="Female" >female
                    </div>

                    <div class="mb-3">
                        <tr>
                            <th height="62" scope="row"></th>
                            <td><input type="submit" name="submit" value="Send Now" class="btn btn-primary" /> </td>
                        </tr>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row mt-5">
            <h4>Where You Can Find Us <i class="fas fa-map-marker-alt"></i></h4>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.23222197752!2d81.07370807390494!3d6.981900517668943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9fec37%3A0x1dd900702229654b!2sUva%20Wellassa%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1689189132757!5m2!1sen!2slk" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </div> 
    </div> 

    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>