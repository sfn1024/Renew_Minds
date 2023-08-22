<?php
if(isset($_GET['delete_degree'])){
    $delete_degree= $_GET['delete_degree'];
    //echo $delete_mentor;

    $delete_query= "Delete from `degrees` where mentor_id= $delete_degree";
    $result= mysqli_query($con, $delete_query);
    if($result){
        echo "<script>alert('Degree deleted successfully')</script>";
    }
}

?>