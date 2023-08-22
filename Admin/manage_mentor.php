<h2 class="text-center">Manage Mentor</h2>
<table id="example" class="table table-striped" style="width:100%">
    <thead class="bg-clr text-light">
        <tr class="text-center">
            <th>Mentor No</th>
            <th>Mentor Name</th>
            <th>Manage</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
            $select_cat= "Select * from `mentors`";
            $result= mysqli_query($con, $select_cat);
            
            $number= 0;
            while($row= mysqli_fetch_assoc($result)){
                $mentor_id= $row['mentor_id'];
                $mentor_name= $row['mentor_name'];
                $number++;
        ?>
                <tr class="text-center">
                    <td><?php echo $number; ?></td>
                    <td><?php echo $mentor_name; ?></td>
                    <td>
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars"></i>
                        </a>
                        <ul class="dropdown-menu bg-clr">
                            <li><a class="dropdown-item text-warning" href="index.php?edit_mentor=<?php echo $mentor_id; ?>">Edit</a></li>
                            <li><a class="dropdown-item text-danger" href="index.php?delete_mentor=<?php echo $mentor_id; ?>">Delete</a></li>
                        </ul>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>                   