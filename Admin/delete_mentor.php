<?php
if(isset($_GET['delete_mentor'])){
    $delete_mentor= $_GET['delete_mentor'];
    //echo $delete_mentor;

    $delete_query= "Delete from `mentors` where mentor_id= $delete_mentor";
    $result= mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('Mentor deleted successfully')</script>";
        echo "<script>window.open('index.php?manage_mentor','_self')</script>";
    }
}

?>