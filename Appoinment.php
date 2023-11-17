<!--connect-->
<?php 
    include('includes/connect.php'); 

    if(isset($_POST['insert_details'])){

        $std_name= $_POST['name'];
        $std_reg_number= $_POST['reg_number'];
        $std_email= $_POST['email'];
        $std_contact= $_POST['contact'];
        $std_degree= $_POST['Degree'];
        $std_acedamic_year= $_POST['AcedamicYear'];
        $std_age= $_POST['age'];
        $std_gender= $_POST['gender'];
        $std_mentor= $_POST['mentor'];
        $std_language= $_POST['language'];
        $std_datepicker= $_POST['datepicker'];
        $std_timepicker= $_POST['timepicker'];


        //checking whether feilds are empty
        if ($std_name== "" or $std_reg_number== "" or $std_email== "" or $std_contact== "" or 
            $std_degree== "" or $std_acedamic_year== "" or $std_age== "" or $std_gender== "" or 
            $std_mentor== "" or $std_language== "" or $std_datepicker== "" or $std_timepicker== "" )
        {
            echo "<script>alert('Fill All the Fields')</script>";
        }else{

            //insert details
            $insert_details=  "insert into `appointments` (std_name, std_reg_number, std_email, std_contact, degree_id, std_acedamic_year, std_age, 
            std_gender, mentor_id, std_language, std_datepicker, std_timepicker, date)
            values ('$std_name', '$std_reg_number', '$std_email', '$std_contact', '$std_degree', 
            '$std_acedamic_year', '$std_age', '$std_gender', '$std_mentor', '$std_language', '$std_datepicker', '$std_timepicker', NOW())";
            $result_query= mysqli_query($con, $insert_details);
            if($result_query){
                echo "<script>alert('Details Entered Succesfully')</script>";
                echo "<script>window.open('submitted.php','_self')</script>";
            }
        }
    }
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
    <form action="" method="post">
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
                <input type="text" name="reg_number" id="reg_number" class="form-control" maxlength="10" placeholder="ICT/20/008" autocomplete="off"/>
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
                    <input type="text" name="contact" id="contact" class="form-control" maxlength="10" placeholder="0772587387" autocomplete="off"/>
                </div>
            </div>
        </div>

        <!-- degree and acedamic year -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="degree">Degree</label>
                <select name="Degree" id="Degree" class="form-select">
                    <option>Select a Degree</option>
                    <?php
                        $select_query= "select * from degrees";
                        $result_query= mysqli_query($con, $select_query);
                        while($row= mysqli_fetch_assoc($result_query)){
                            $degree_name= $row['degree_name'];
                            $degree_id= $row['degree_id'];
                            echo "<option value='$degree_name'>$degree_name</option>" ;
                        }
                    ?>
                    <!-- <option value="">Mentor 1</option> -->
                </select>
            </div>
            </div>

            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="year">Academic Year</label>
                <select name="AcedamicYear" id="AcedamicYear" class="form-select mb-2 text-dark">
                    <option value="null">Select the Year</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
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
                    <option value="null">Select Your Age</option>
                    <option value="below 21">below 21</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="Above 25">Above 25</option>
                </select>
            </div>
            </div>

            <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="gender">Gender</label>
                <select name="gender" name="gender" id="gender" class="form-select mb-2 text-dark">
                    <option value="null">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
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
                    <option value="null">Select a Mentor</option>
                    <?php
                        $select_query= "select * from mentors";
                        $result_query= mysqli_query($con, $select_query);
                        while($row= mysqli_fetch_assoc($result_query)){
                            $mentor_name= $row['mentor_name'];
                            $mentor_id= $row['mentor_id'];
                            echo "<option value='$mentor_name'>$mentor_name</option>";
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
                    <option value="null">Select Language</option>
                    <option value="English">English</option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            </div>
        </div>

        <!-- date and time -->
        <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="date">Date</label>
                <input type="date" name="datepicker" id="datepicker" class="form-control">
            </div>
        </div>

        <div class="col">
            <div class="form-outline">
                <label class="form-label text-white" for="time">Time</label>
                <input type="time" name="timepicker" id="timepicker" class="form-control">
            </div>
        </div>
        </div>

        <!-- Submit button -->
        <button type="reset" class="btn btn-danger btn-block mx-3">Reset</button>
        <button type="submit" name="insert_details" class="btn btn-primary btn-block mx-3">Appoinment</button>
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

    <!-- ========================= DISABLE PAST DATE  ========================= -->

    <script>
        // Get the current date as a string in "YYYY-MM-DD" format
        function getCurrentDate() {
            const now = new Date();
            const year = now.getFullYear();
            const month = (now.getMonth() + 2).toString().padStart(2, '0');
            const day = now.getDate().toString().padStart(2, '0');
            return `${year}-${month}-${day}`;
        }

        // Set the minimum date for the datepicker
        function setMinDate() {
            const datepicker = document.getElementById('datepicker');
            datepicker.min = getCurrentDate();
        }

        // Call setMinDate to initialize the minimum date
        setMinDate();
    </script>


    <script src="assets/js/main.js"></script>

</body>
</html>