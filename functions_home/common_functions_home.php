<?php
//include connect
include('includes/connect.php');
?>


<?php
//get function for display mentors
function getmentors() {
    global $con;
    $select_mentors= "select * from mentors";
    $result_mentors= mysqli_query($con, $select_mentors);

    while($row_data= mysqli_fetch_assoc($result_mentors)){
        $mentor_name= $row_data['mentor_name'];
        $mentor_id= $row_data['mentor_id'];
        echo
        "<li class='nav-item'>
            <a href='Appointment.php?mentors=$mentor_id' class='nav-links'><p>$mentor_name</p></a>
        </li>";
    }
}
?>