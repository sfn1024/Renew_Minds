<?php
    if(isset($_GET['edit_degree'])){
        $edit_degree= $_GET['edit_degree'];
        //echo $edit_degree;

        $get_degree= "Select * from `degrees` where degree_id= $edit_degree";
        $result= mysqli_query($con, $get_degree);
        $row= mysqli_fetch_assoc($result);
        $degree_name= $row['degree_name'];
        //echo $degree_name;
    }

    if(isset($_POST['edit_degree'])){
        $dgr_name= $_POST['degree_name'];

        $update_query= "update `degrees` set degree_name= '$dgr_name' where degree_id= $edit_degree";
        $result_degree= mysqli_query($con, $update_query);
        if($result_degree){
            echo "<script>alert('Degree updated successfully')</script>";
            echo "<script>window.open('./index.php?manage_degree','_self')</script>";
            //index.php?manage_degree
        }
    }
?>

<h2 class="text-center">Edit Degree</h2>
  
<form action="" method="post">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" name="degree_name" id="degree_name" class="form-control" aria-label="degree" aria-describedby="basic-addon1"
        value='<?php echo $degree_name; ?>'>
    </div>
    <div class="input-group w-10 m-auto">
        <input type="submit" name="edit_degree" class="btn btn-dark bg-clr mb-3 px-3 text-cente" value="Edit Degree">
    </div>
</form>  