<?php
if (isset($_GET['edit_blog'])) {
    $edit_blog = $_GET['edit_blog'];
    $get_blog = "SELECT * FROM `quotes` WHERE quote_id = $edit_blog";
    $result = mysqli_query($con, $get_blog);
    $row = mysqli_fetch_assoc($result);
    $quote_title = $row['quote_title'];
    $author = $row['author'];
    $image = $row['image'];
    // echo $degree_name;
}

if (isset($_POST['edit_blog'])) {
    $quote_title = $_POST['quote_title'];
    $author = $_POST['author'];

    // Check if a new image file was uploaded
    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $temp_image = $_FILES['image']['tmp_name'];

        // Move the uploaded file to the correct location
        move_uploaded_file($temp_image, "./images/$image");
    }

    // Update the database
    $update_query = "UPDATE `quotes` SET quote_title = '$quote_title', author = '$author', image = '$image' WHERE quote_id = $edit_blog";
    $result_blog = mysqli_query($con, $update_query);

    if ($result_blog) {
        echo "<script>alert('Quote updated successfully')</script>";
        echo "<script>window.open('./index.php?manage_blog','_self')</script>";
    }
}
?>

<h2 class="text-center">Edit Quote</h2>

<form action="" method="post" enctype="multipart/form-data">
    <!-- Quote -->
    <div class="input-group w-90 mb-2">
        <input type="text" class="form-control" name="quote_title" placeholder="Ex: Health Is Wealth" aria-label="quote" aria-describedby="basic-addon1"
               value='<?php echo $quote_title; ?>'>
    </div>

    <!-- Author -->
    <div class="input-group w-90 mb-2">
        <input type="text" class="form-control" name="author" placeholder="Ex: Mr.James" aria-label="author" aria-describedby="basic-addon1"
               value='<?php echo $author; ?>'>
    </div>

    <!-- Image -->
    <div class="input-group w-90 mb-2">
        <img src='./images/<?php echo $image; ?>' alt="Image">
        <input type="file" class="form-control" name="image" aria-label="image" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 m-auto">
        <input type="submit" class="border-0 my-3 p-2 btn btn-dark bg-clr text-light" name="edit_blog" value="Edit Quote">
    </div>
</form>
