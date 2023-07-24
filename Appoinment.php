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
                        <form onsubmit="return validate()">

                            <div class="row 1">
                                <div class="col-md-6 mb-4">

                                    <!--Name-->
                                    <div class="form-outline text-dark">
                                        <label class="form-label text-white" for="name">Name</label>
                                        <label id="lsluser" style="color:red; visibility: hidden;">Invalid</label>
                                        <input type="text" name="name" id="Name" class="form-control" placeholder="Ex: Kumar" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 align-items-center">

                                    <!--Degree-->
                                    <label class="form-label text-white" for="Degree">Degree</label>
                                    <select name="select_degree" id="Degree" class="form-select mb-2 text-dark">
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

                            <div class="row">
                                <div class="col-md-6 mb-4">

                                    <!--Enrollment Number-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="enrollNumber">Enrollment Number</label>
                                        <input type="text" name="enroll_number" id="enrollNumber" class="form-control" placeholder="Ex: ICT/20/008" autocomplete="off" >
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4 align-items-center">

                                    <!--Acedamic Year-->
                                    <label class="form-label text-white" for="AcedamicYear">Acedamic Year</label>
                                    <select name="select_year" id="AcedamicYear" class="form-select mb-2 text-dark">
                                        <option value="1">Select the Year</option>
                                        <option value="2">1st</option>
                                        <option value="3">2nd</option>
                                        <option value="4">3rd</option>
                                        <option value="5">4th</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <!--Email-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="emailAddress">Email</label>
                                        <input type="" name="email_address" id="emailAddress" class="form-control" placeholder="Ex: __@std.uwu.ac.lk" autocomplete="off" >
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <!--Contact Number-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="contactNumber">Contact Number</label>
                                        <input type="text" name="contact_number" id="contactNumber" class="form-control" placeholder="Ex: 772587387" autocomplete="off" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <!--Age-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="Age">Age</label>
                                        <input type="text" name="age" id="Age" class="form-control" placeholder="Ex: 23" autocomplete="off" >
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 align-items-center">
                                    <!--Gender-->
                                    <label class="form-label text-white" for="Gender">Gender</label>
                                    <select name="select_gender" id="Gender" class="form-select mb-2 text-dark">
                                        <option value="1">Select Gender</option>
                                        <option value="2">Male</option>
                                        <option value="3">Female</option>
                                        <option value="4">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <!--Date-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="date">Date</label>
                                        <input type="date" name="date" id="date" class="form-control" autocomplete="off" >
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <!--Time-->
                                    <div class="form-outline">
                                        <label class="form-label text-white" for="time">Time</label>
                                        <input type="time" name="time" id="time" class="form-control" autocomplete="off" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4 align-items-center">
                                    <!--Mentor-->
                                    <label class="form-label text-white" for="Mentor">Mentor</label>
                                    <select name="select_mentors" id="Mentor" class="form-select mb-2 text-dark">
                                        <option value="">Select a Mentor</option>
                                        <?php
                                            $select_query= "select * from mentors";
                                            $result_query= mysqli_query($con, $select_query);
                                            while($row= mysqli_fetch_assoc($result_query)){
                                                $mentor_name= $row['mentor_name'];
                                                $mentor_id= $row['mentor_id'];
                                                echo "<option value='$mentor_id'>$mentor_name</option>" ;
                                            }
                                        ?>
                                        <!-- <option value="">Mentor 1</option> -->
                                    </select>
                                </div>
                                                                        
                                <div class="col-md-6 mb-4 align-items-center">
                                <!--Language-->
                                <label class="form-label text-white" for="EmergencyLanguage">Preffered Language</label>
                                <select name="select_language" id="Language" class="form-select mb-2 text-dark">
                                    <option value="1">Select a Language</option>
                                    <option value="2">English</option>
                                    <option value="3">Sinhala</option>
                                    <option value="4">Tamil</option>
                                </select>
                            </div>
                                                                    
                            <!--Reset and Submit-->
                            <div class="form-outline mt-4 pt-2">
                                <input class="btn btn-primary px-3 submitBtn" type="submit" name="save_appointment" value="Save Appointment">
                                <input class="btn btn-danger px-3" type="reset" name="reset" value="Reset">
                            </div>
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

