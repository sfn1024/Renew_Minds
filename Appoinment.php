<!--connect-->
<?php include('includes/connect.php'); 
include('functions_home/common_functions_home.php');
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
    
    <!-- Modal -->
    <div class="modal fade modal-bottom-right" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <section class="gradient-custom">
                            <div class="app-form-card shadow-2-strong card-registration" style="border-radius: 15px;">
                                <div class="modal-header">
                                    <h2 class="for-title text-white">Registration Form</h2>
                                    <button type="button" class="btn-close bg-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="card-body p-4 p-md-5">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline text-dark">
                                                    <input type="text" id="firstName" class="form-control form-control-md" />
                                                    <label class="form-label text-white" for="firstName" placeholder="lional" required>First Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="lastName" class="form-control form-control-md" />
                                                    <label class="form-label text-white" for="lastName">Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="firstName" class="form-control form-control-md" />
                                                    <label class="form-label text-white" for="firstName">Enrollment Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 align-items-center">
                                                <select class="select form-control form-control-md">
                                                    <option value="1">--Select Year--</option>
                                                    <option value="2">1st</option>
                                                    <option value="3">2nd</option>
                                                    <option value="4">3rd</option>
                                                    <option value="5">4th</option>
                                                </select>
                                                <label class="form-label text-white" for="lastName">Acedamic Year</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="email" id="emailAddress" class="form-control form-control-md" />
                                                    <label class="form-label text-white" for="emailAddress">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 pb-2">
                                                <div class="form-outline">
                                                    <input type="tel" id="phoneNumber" class="form-control form-control-md" />
                                                    <label class="form-label text-white" for="phoneNumber">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                                <div class="form-outline datepicker w-100">
                                                    <input type="text" class="form-control form-control-md" id="birthdayDate" />
                                                    <label for="birthdayDate" class="form-label text-white">Age</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 align-items-center">
                                                <select class="select form-control form-control-md">
                                                    <option value="1">--Select Gender--</option>
                                                    <option value="2">Male</option>
                                                    <option value="3">Female</option>
                                                    <option value="4">Others</option>
                                                </select>
                                                <label class="form-label text-white" for="lastName">Gender</label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                                <div class="form-outline datepicker w-100">
                                                    <input type="text" class="form-control form-control-md" id="birthdayDate" />
                                                    <label for="birthdayDate" class="form-label text-white">Date</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                                <div class="form-outline datepicker w-100">
                                                    <input type="text" class="form-control form-control-md" id="birthdayDate" />
                                                    <label for="birthdayDate" class="form-label text-white">Time</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4 align-items-center">
                                                <div class="dropdown">
                                                    <button class="btn btn-light dropdown-toggle mb-2 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Select Mentor</button>
                                                    <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">

                                                        <!--mentors-->
                                                        <?php
                                                            getmentors();
                                                        ?>
                                                    </ul>
                                                </div>
                                                <label class="form-label text-white" for="lastName">Mentor</label>
                                            </div>
                                            <div class="col-md-6 mb-4 align-items-center">
                                                <select class="select form-control form-control-md">
                                                    <option value="1">--Select Level--</option>
                                                    <option value="2">Urgent</option>
                                                    <option value="3">Can Wait</option>
                                                    <option value="4">Not Emergency</option>
                                                </select>
                                                <label class="form-label text-white" for="lastName">Emergency Level</label>
                                            </div>
                                        </div>
                                        <div class="row mt-4 pt-2">
                                            <div class="col-md-1"></div>
                                            <input class="col-md-4 btn btn-danger btn-lg" type="reset" value="Reset" />
                                            <div class="col-md-2"></div>
                                            <input class="col-md-4 btn btn-primary btn-lg" type="submit" value="Submit" />
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

</body>
</html>

