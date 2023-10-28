<h2 class="text-center mb-4">View Appointments</h2>

<div class="container">
  
  <?php
      $get_details= "Select * from appointments";
      $result=mysqli_query($con, $get_details);
      $num= 0;
      while($row=mysqli_fetch_assoc($result)){
        $std_id= $row['std_id'];
        $std_name= $row['std_name'];
        $std_reg_number= $row['std_reg_number'];
        $std_email= $row['std_email'];
        $std_contact= $row['std_contact'];
        $std_degree= $row['degree_id'];
        $std_acedamic_year= $row['std_acedamic_year'];
        $std_age= $row['std_age'];
        $std_gender= $row['std_gender'];
        //$std_mentor= $row['mentor_id'];
        $std_language= $row['std_language'];
        $std_datepicker= $row['std_datepicker'];
        $std_timepicker= $row['std_timepicker'];
        $date= $row['date'];
      $num++;
  ?>

  <div class="dropdown d-flex justify-content-center">
    <button class="btn btn-primary bg-clr dropdown-toggle mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Appointment <?php echo $std_id?> - <?php echo $date?>
    </button>

    <div class="dropdown-menu drop">
        <table  class=" table table-striped">
          <tbody>
            <tr>
              <td>Name</td> <td> - </td> <td><?php echo $std_name?></td>
            </tr>
            <tr>
              <td>Registration Number</td> <td> - </td> <td><?php echo $std_reg_number?></td>
            </tr>
            <tr>
              <td>Email</td> <td> - </td> <td><?php echo $std_email?></td>
            </tr>
            <tr>
              <td>Contact Number</td> <td> - </td> <td><?php echo $std_contact?></td>
            </tr>
            <tr>
              <td>Degree</td> <td> - </td> 
              <td>
                <?php
                  $select_query= "select * from degrees";
                  $result_query= mysqli_query($con, $select_query);
                  while($row= mysqli_fetch_assoc($result_query)){
                    $std_degree_id= $row['degree_id'];
                    $std_degree= $row['degree_name'];
                  }
                  echo $std_degree ;
                ?>
              </td>
            </tr>
            <tr>
              <td>Academic Year</td> <td> - </td> <td><?php echo $std_acedamic_year?></td>
            </tr>
            <tr>
              <td>Age</td> <td> - </td> <td><?php echo $std_age?></td>
            </tr>
            <tr>
              <td>Gender</td> <td> - </td> <td><?php echo $std_gender?></td>
            </tr>
            <tr>
              <td>Mentor</td> <td> - </td> 
              <td>
                <?php
                  $select_query= "select * from mentors";
                  $result_query= mysqli_query($con, $select_query);
                  while($row= mysqli_fetch_assoc($result_query)){
                    $std_mentor_id= $row['mentor_id'];
                    $std_mentor= $row['mentor_name'];
                  }
                  echo "$std_mentor" ;
                ?>
              </td>
            </tr>
            <tr>
              <td>Prefered Language</td> <td> - </td> <td><?php echo $std_language?></td>
            </tr>
            <tr>
              <td>Appointment Date</td> <td> - </td> <td><?php echo $std_datepicker?></td>
            </tr>
            <tr>
              <td>Appointmnet Time</td> <td> - </td> <td><?php echo $std_timepicker?></td>
            </tr>
        </table>
      </tbody>
    </div>
  </div>     
      
  <?php
      }
  ?>
</div>

<style>
  .dropdown-toggle {
    width: 40%;
    height: 35px;
  }

  .drop {
    width: 450px;
    height: 200px;
    overflow: auto;
  }

  td{
    height: 5px;
  }
</style>

