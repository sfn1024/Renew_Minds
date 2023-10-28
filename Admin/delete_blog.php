<?php
if (isset($_GET['delete_blog'])) {
    // Get the ID of the row to be deleted from the URL parameter and validate it
    $delete_blog = intval($_GET['delete_blog']);

    
        $delete_query = "DELETE FROM `quotes` WHERE quote_id = $delete_blog";

        // Execute the DELETE query
        $result = mysqli_query($con, $delete_query);

        if ($result) {
            echo "<script>alert('Quote deleted successfully')</script>";
            echo "<script>window.open('index.php?manage_blog','_self')</script>";
            // Redirect to the page where you want to display the updated table or any other page
        }
    }
?>