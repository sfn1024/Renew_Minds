<!--connect-->
<?php 
    include('includes/connect.php'); 
?>

<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    <?php include('components/Imports.php'); ?>
    
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <style>
        button {
            width: 150px;
        }
        body {
            overflow-x: hidden; 
        }
        .section-title {
            color: #0a4275;
        }
        .app-form-card{
            background-color: #0a4275;
            border-radius: 15px;
        }

        .submitBtn{
            margin-right: 20px;
        }
    </style>

    <!-- ========================= APPOINMENT ========================= -->
    
    <section>
        <div class="row mt-3 text-center text-dark">
            <div class="right-side col-md-6" data-aos="fade-down" data-aos-delay="100">
                <img src="assets\media\appointment_banner.png" alt="">
            </div>
            <div class="left-side col-md-5" data-aos="fade-down" data-aos-delay="50">
                <h2 class="section-title mt-5">Schedule Your Appointment</h2>
                <p class="">Take the first step towards prioritizing your mental health and well-being. Our appointment page allows you to schedule a session with a qualified mental health professional. Book now and embark on your journey towards a healthier mind.</p>
                
                <button type="button" class="btn btn-danger btn-rounded float-left mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Book an Appointment
                    <div class="modal-dialog modal-fullscreen-sm-down"></div>
                </button>
            </div>
        </div>
        <div class="row mt-3"></div>
    </section>
    
    <!-- Form Popup -->
    <div class="modal fade modal-bottom-right" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <section class="gradient-custom">
            <div class="app-form-card">
                    <div class="modal-header">
                        <h2 class="for-title text-white">Registration Form</h2>
                        <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body p-4 p-md-5">

    <!-- ========================= FORM ========================= -->
    <form>
        <!-- name and registeration no. -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Shafni" autocomplete="off"/>
            </div>
            </div>

            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="reg_number">Reg Number</label>
                <input type="text" name="reg_number" id="reg_number" class="form-control" placeholder="ICT/20/008" autocomplete="off"/>
            </div>
            </div>
        </div>

        <!-- email and conact number -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="sfn@gmail.com" autocomplete="off"/>
                </div>
            </div>

            <div class="col">
                <div class="form-outline mb-4">
                    <label class="form-label text-white" for="contact">Contact</label>
                    <input type="number" name="contact" id="contact" class="form-control" placeholder="0772587387" autocomplete="off"/>
                </div>
            </div>
        </div>

        <!-- degree and acedamic year -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="degree">Degree</label>
                <select name="degree" id="Degree" class="form-select">
                    <option value="">Select a Degree</option>
                    <?php
                        $select_query= "select * from degrees";
                        $result_query= mysqli_query($con, $select_query);
                        while($row= mysqli_fetch_assoc($result_query)){
                            $degree_name= $row['degree_name'];
                            $degree_id= $row['degree_id'];
                            echo "<option value='$degree_id'>$degree_name</option>" ;
                        }
                    ?>
                    <!-- <option value="">Mentor 1</option> -->
                </select>
            </div>
            </div>

            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="year">Academic Year</label>
                <select name="select_year" id="AcedamicYear" class="form-select mb-2 text-dark">
                    <option value="1">Select the Year</option>
                    <option value="2">1st</option>
                    <option value="3">2nd</option>
                    <option value="4">3rd</option>
                    <option value="5">4th</option>
                </select>
            </div>
            </div>
        </div>

        <!-- age and gender -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="age">Age</label>
                <select name="age" name="age" id="age" class="form-select mb-2 text-dark">
                    <option value="1">Select Your Age</option>
                    <option value="2">below 21</option>
                    <option value="3">21</option>
                    <option value="4">22</option>
                    <option value="5">23</option>
                    <option value="6">24</option>
                    <option value="7">25</option>
                    <option value="8">Above 25</option>
                </select>
            </div>
            </div>

            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="gender">Gender</label>
                <select name="gender" name="gender" id="gender" class="form-select mb-2 text-dark">
                    <option value="1">Select Gender</option>
                    <option value="2">Male</option>
                    <option value="3">Female</option>
                    <option value="4">Other</option>
                </select>
            </div>
            </div>
        </div>

        <!-- mentor and language -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
            <label class="form-label text-white" for="mentor">Mentor</label>
                <select name="mentor" id="mentor" class="form-select mb-2 text-dark">
                    <option value="">Select a Mentor</option>
                    <?php
                        $select_query= "select * from mentors";
                        $result_query= mysqli_query($con, $select_query);
                        while($row= mysqli_fetch_assoc($result_query)){
                            $mentor_name= $row['mentor_name'];
                            $mentor_id= $row['mentor_id'];
                            echo "<option value='$mentor_id'>$mentor_name</option>";
                        }
                    ?>
                    <!-- <option value="">Mentor 1</option> -->
                </select>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="language">Language</label>
                <select name="language" name="language" id="language" class="form-select mb-2 text-dark">
                    <option value="1">Select Language</option>
                    <option value="2">English</option>
                    <option value="3">Sinhala</option>
                    <option value="4">Tamil</option>
                    <option value="5">Other</option>
                </select>
            </div>
            </div>
        </div>

        <!-- date and time -->
        <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" autocomplete="off"/>
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="time">Time</label>
                <input type="time" name="time" id="time" class="form-control" autocomplete="off"/>
            </div>
        </div>
        </div>

        <!-- Submit button -->
        <button type="reset" class="btn btn-danger btn-block mx-3">Reset</button>
        <button type="submit" class="btn btn-primary btn-block mx-3">Place order</button>
    </form>     
                    </div>
                </div>
            </section>
        </div>              
        </div>
        </div>
    </div>
    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/form_validation.js"></script>

</body>
</html>

