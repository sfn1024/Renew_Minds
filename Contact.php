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
$query=mysqli_query($con,"insert into contactpage(name,email,contactno,gender,education,address)
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
        .typewriter-text {
          overflow: hidden; /* Ensures the content is not shown outside the box */
          border-right: .15em solid orange; /* The typewriter cursor */
          white-space: nowrap; /* Keeps the content on a single line */
          margin: 0 auto; /* Gives that scrolling effect as if it's being typed */
          letter-spacing: .15em; /* Adjust as needed */
          animation: typing 5s steps(40, end), blink-caret .85s step-end infinite;
        }
        
        /* The typing animation */
        @keyframes typing {
          from {
            width: 0;
          }
          to {
            width: 80%;
          }
        }
        
        /* The typewriter cursor animation */
        @keyframes blink-caret {
          from,
          to {
            border-color: transparent;
          }
          50% {
            border-color: orange;
          }
        }


/*fade image*/
        .fade-in-image {
            position: relative;
            animation: fadeIn 3s ease-in-out forwards;
        }
        
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
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
    <div class="bg-background"></div>
    <div class="container py-5">
        <div class="row py-5 g-3">

            <div class="col-md-6 first_col ">


                <div class="container mt-5">
                    <h1 class="typewriter-text">Contact Us</h1>
                  </div>


                  <form class="p-4 mt-5" name="insert" action="" method="post">
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Enter your Name</label>
                   
                    <input type="text" name="name" id="name" value=""  class="form-control" required />


                </div>



                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email ID</label>
                        <input type="email" name="email" id="email" value=""  class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Contact NO</label>
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
</tr></div>
</table>
</form>
            </div>
            

            <div class="col-md-6 sec_col">

<div class="fade-in-image">


<img src="./assets/media/contact.jpg"
    class="img-fluid">
</div>
</div>

</div>
<div class="row-last">
<div class="row row-cols-1 row-cols-md-3  p-3 text-white">
<div class="col">
    <h4>CALL US</h4>
    <p> +94 11 2140 000(Help Line)<br> +94 11 8547 000<br> +94 11 2140 458</p>
</div>
<div class="col">
    <h4>LOCATION</h4>
    <p>Please check specialists’ availability prior to your arrival to the hospital</p>
</div>
<div class="col">
    <h4>Email</h4>
<p>ustomer Care<br>
        contactus@durdans.com<br>
        
        Business Related Inquiries<br>
        businessdevelopment@durdans.com</p>
</div>

</div>




</div>
<br>
<h4>Where You Can Find Us <i class="fas fa-map-marker-alt"></i></h4>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.23222197752!2d81.07370807390494!3d6.981900517668943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9fec37%3A0x1dd900702229654b!2sUva%20Wellassa%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1689189132757!5m2!1sen!2slk" width="900" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->


    

    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>