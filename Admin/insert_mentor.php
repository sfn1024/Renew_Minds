<?php
    include('../includes/connect.php');
    if(isset($_POST['insert_mentor'])){
        $mentor_name= $_POST['Mentor_Name'];

        //select data from db
        $select_query= "Select * from mentors where mentor_name = '$mentor_name'";
        $result_select= mysqli_query($con, $select_query);
        $number= mysqli_num_rows($result_select);
        if($number>0){
            echo "<script>alert('Mentor is already exist')</script>";
        }else{
            $insert_query= "insert into `mentors` (mentor_name) values ('$mentor_name')";
            $result= mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Mentor has been inserted succesfully')</script>";
            }
        }    
    }
?>

<h2 class="text-center">Insert Mentor</h2>
  
<form action="" method="post">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" class="form-control" name="Mentor_Name" placeholder="Ex: Dr S.Disanayaka" aria-label="mentor" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 m-auto">
        <input type="submit" class="border-0 my-3 p-2 btn btn-dark bg-clr text-light" name="insert_mentor" value="Insert Mentor">
    </div>
</form>  