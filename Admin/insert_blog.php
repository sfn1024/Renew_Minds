<?php
    include('../includes/connect.php');
    if(isset($_POST['insert_quote'])){
        $quote_title= $_POST['quote_title'];
        $author= $_POST['author'];

        //accessing images
        $image= $_FILES['image']['name'];

        //accessing temporary names of the images
        $temp_image= $_FILES['image']['tmp_name'];

        //select data from db
        $select_query= "Select * from quotes where quote_title = '$quote_title'";
        $result_select= mysqli_query($con, $select_query);
        $number= mysqli_num_rows($result_select);
        if($number>0){
            echo "<script>alert('Quote is already exist')</script>";
        }else{
            //upload images
            move_uploaded_file($temp_image, "./images/$image");
            
            $insert_query= "insert into `quotes` (quote_title, author, image, date)
            values ('$quote_title', '$author', '$image', NOW())";
            $result= mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Quote has been inserted succesfully')</script>";
            }
        }    
    }
?>

<h2 class="text-center">Insert Degree</h2>
  
<form action="" method="post" enctype="multipart/form-data">

    <!--Image-->
    <div class="input-group w-90 mb-2">     
        <input type="file" class="form-control" name="image" aria-label="image" aria-describedby="basic-addon1">
    </div>

    <!--Quote-->
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" class="form-control" name="quote_title" placeholder="Ex: Health Is Wealth" aria-label="quote" aria-describedby="basic-addon1">
    </div>

    <!--Author-->
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-clr text-light" id="basic-addon1">
            <i class="fa-solid fa-pen"></i>
        </span>
        <input type="text" class="form-control" name="author" placeholder="Ex: Mr.James" aria-label="author" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 m-auto">
        <input type="submit" class="border-0 my-3 p-2 btn btn-dark bg-clr text-light" name="insert_quote" value="Insert Quote">
    </div>
</form>  