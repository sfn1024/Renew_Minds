<h2 class="text-center">Manage Quotes</h2>
<table id="example" class="table table-striped" style="width:100%">
        <thead class="bg-clr text-light">
            <tr>
                <th>Quote No</th>
                <th>Quote Title</th>
                <th>Author</th>
                <th>Image</th>
                <th>Operation</th>  
            </tr>
        </thead>
        <tbody>
        <?php
            $select_quote= "Select * from `quotes`";
            $result= mysqli_query($con, $select_quote);
            
            $number= 0;
            while($row= mysqli_fetch_assoc($result)){
                $quote_id= $row['quote_id'];
                $quote_title= $row['quote_title'];
                $author= $row['author'];
                $image= $row['image'];
                $number++;
        ?>
                <tr>
                    <td><?php echo $number; ?></td>
                    <td><?php echo $quote_title; ?></td>
                    <td><?php echo $author; ?></td>
                    <td><?php echo "<img src='./images/$image' >"; ?></td>
                    <td>
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <ul class="dropdown-menu bg-clr">
                            <li><a class="dropdown-item text-warning" href="index.php?edit_blog=<?php echo $quote_id; ?>">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="index.php?delete_blog">Delete</a></li>
                        </ul>
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
</table> 
<style>
    img {
        height: 50px;
    }
</style>           