<?php
    if(isset($_GET['edit_mentor'])){
        $edit_mentor= $_GET['edit_mentor'];
        //echo $edit_mentor;

        $get_mentor= "Select * from `mentors` where mentor_id= $edit_mentor";
        $result= mysqli_query($con, $get_mentor);
        $row= mysqli_fetch_assoc($result);
        $mentor_name= $row['mentor_name'];
        //echo $mentor_name;
    }

    if(isset($_POST['edit_mentor'])){
        $ment_name= $_POST['mentor_name'];

        $update_query= "update `mentors` set mentor_name= '$ment_name' where mentor_id= $edit_mentor";
        $result_mentor= mysqli_query($con, $update_query);
        if($result_mentor){
            echo "<script>alert('Mentor updated successfully')</script>";
            echo "<script>window.open('./index.php?manage_mentor','_self')</script>";
            //index.php?manage_mentor
        }
    }
?>

<h2 class="text-center">Edit Mentor</h2>
  
<form action="" method="post">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" name="mentor_name" id="mentor_name" class="form-control" aria-label="mentor" aria-describedby="basic-addon1"
        value='<?php echo $mentor_name; ?>'>
    </div>
    <div class="input-group w-10 m-auto">
        <input type="submit" name="edit_mentor" class="btn btn-dark bg-clr mb-3 px-3 text-cente" value="Edit Mentor">
    </div>
</form>  