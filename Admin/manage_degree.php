<h2 class="text-center">Manage Degree</h2>
<table id="example" class="table table-striped" style="width:100%">
        <thead class="bg-clr text-light">
            <tr class="text-center">
                <th>Degree No</th>
                <th>Degree Name</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $select_deg= "Select * from `degrees`";
            $result= mysqli_query($con, $select_deg);
            
            $number= 0;
            while($row= mysqli_fetch_assoc($result)){
                $degree_id= $row['degree_id'];
                $degree_name= $row['degree_name'];
                $number++;
        ?>
                <tr class="text-center">
                    <td><?php echo $number; ?></td>
                    <td><?php echo $degree_name; ?></td>
                    <td>
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <ul class="dropdown-menu bg-clr">
                            <li><a class="dropdown-item text-warning" href="index.php?edit_degree=<?php echo $degree_id; ?>">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="index.php?delete_degree">Delete</a></li>
                        </ul>
                    </td>
                </tr>
        <?php
            }
        ?>
        </tbody>
</table>            