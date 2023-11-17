<?php
    include('../includes/connect.php');
    
    if(isset($_POST['insert_degree'])){
        $degree_name= $_POST['Degree_Name'];

        //select data from db
        $select_query= "Select * from degrees where degree_name = '$degree_name'";
        $result_select= mysqli_query($con, $select_query);
        $number= mysqli_num_rows($result_select);
        if($number>0){
            echo "<script>alert('Degree is already exist')</script>";
        }else{
            $insert_query= "insert into `degrees` (degree_name) values ('$degree_name')";
            $result= mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Degree has been inserted succesfully')</script>";
            }
        }    
    }
?>

<h2 class="text-center">Insert Degree</h2>
  
<form action="" method="post">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" class="form-control" name="Degree_Name" placeholder="Ex: ICT" aria-label="degree" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 m-auto">
        <input type="submit" class="border-0 my-3 p-2 btn btn-dark bg-clr text-light" name="insert_degree" value="Insert Degree">
    </div>
</form>  