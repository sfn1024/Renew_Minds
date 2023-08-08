<?php 
include('../includes/connect.php');

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $numofdays = date("t"); //numbers of days in the current month
    $first = date("Y-m") ."-". "1"; //get the current year and month, join it with first day of the month
    $day = strtotime($first); //get the timestamp value of $first
    $firstday = date("w", $day); //get the numeric representation of the first day in the month
    $hasdaystarted = false; //have we reached the first day of the month
    $dayscounter = 0;
    $numofdays = $numofdays + $firstday;

    // Query to count mentors
    $mentorCount = 0;
    $mentorQuery = mysqli_query($con, "SELECT COUNT(*) as count FROM mentors");
    if ($mentorQuery) {
        $mentorRow = mysqli_fetch_assoc($mentorQuery);
        $mentorCount = $mentorRow['count'];
    }

    // Query to count patients
    $patientCount = 0;
    $patientQuery = mysqli_query($con, "SELECT COUNT(*) as count FROM appointments");
    if ($patientQuery) {
        $patientRow = mysqli_fetch_assoc($patientQuery);
        $patientCount = $patientRow['count'];
    }

    // Query to count appointments
    $appointmentCount = 0;
    $appointmentQuery = mysqli_query($con, "SELECT COUNT(*) as count FROM appointments");
    if ($appointmentQuery) {
        $appointmentRow = mysqli_fetch_assoc($appointmentQuery);
        $appointmentCount = $appointmentRow['count'];
    }
  
    ?>

    <style>
        .card {
            height: 200px;
            color: white;
            border: none;
        }
        .card-header {
            border: none;
        }
        .mentor-card {
            background-color: #007bff;
        }
        .patient-card {
            background-color: #dc3545;
        }
        .appointment-card {
            background-color: #ffc107;
        }
        .date {
            width: 14.2857%;
            height: 40px; 
            float: left;
            border-bottom: 1px solid #999999;
            border-right: 1px solid #999999;
            background-color: #ffffff;
            box-sizing: border-box;
            text-align: center;
            line-height: 40px;
        }
        .day {
            width: 14.2857%;
            height: 25px;
            color: #330000;
            float: left;
            padding: 5px;
            text-align: center;
            font:bold 16px arial;
            border-bottom: 1px solid #999999;
            border-right: 1px solid #999999;
            background-color: #cccccc;
            box-sizing: border-box;
        }
        .clear {
            clear: both;
        }
    </style>

  <body>
    <div class="row">
      <!-- Card 1 for Mentor -->
      <div class="col-md-4">
        <div class="card mentor-card">
          <div class="card-header text-center">
            Mentor
          </div>
          <div class="card-body d-flex align-items-center justify-content-center">
          <p class="card-text display-4"><?php echo $mentorCount; ?></p>
          </div>
        </div>
      </div>

      <!-- Card 2 for Patient -->
      <div class="col-md-4">
        <div class="card patient-card">
          <div class="card-header text-center">
            Patient
          </div>
          <div class="card-body d-flex align-items-center justify-content-center">
          <p class="card-text display-4"><?php echo $patientCount; ?></p>
          </div>
        </div>
      </div>

      <!-- Card 3 for Appointments -->
      <div class="col-md-4">
        <div class="card appointment-card">
          <div class="card-header text-center">
            Appointments
          </div>
          <div class="card-body d-flex align-items-center justify-content-center">
          <p class="card-text display-4"><?php echo $appointmentCount; ?></p>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <h2 class="text-center"><?php echo date("F Y"); ?></h2>
        <div class="container_calendar">
          <div>
            <div class="day" style="border-top-left-radius:18px;">Sunday</div>
            <div class="day">Monday</div>
            <div class="day">Tuesday</div>
            <div class="day">Wednesday</div>
            <div class="day">Thursday</div>
            <div class="day">Friday</div>
            <div class="day" style="border-top-right-radius:18px;">Saturday</div>
            <div class="clear"></div>
          </div>
          <?php
          for($I=0; $I<$numofdays; $I++){
            if($I==$firstday)
              $hasdaystarted = true;
            if($hasdaystarted){
              $dayscounter++;
              echo "<div class='date'>$dayscounter</div>";
            }
            else
              echo "<div class='date'></div>";

            if (($I + 1) % 7 == 0) {
              echo "<div class='clear'></div>"; // Clear after every 7 days
            }
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  </body>

