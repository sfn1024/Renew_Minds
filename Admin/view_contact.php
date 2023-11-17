<?php
  $sql = "SELECT * FROM `contact`";
  $result = $con->query($sql);

  if ($result->num_rows > 0){
      echo "<table class='table'> 
              <tr> 
                <th scope='col'> NAME </th> 
                <th scope='col'> Email </th> 
                <th scope='col'> Contact No </th>    
                <th scope='col'> Gender </th> 
                <th scope='col'> Education </th> 
                <th scope='col'> Address </th> 
              </tr>";

    while($row = $result->fetch_assoc()) {
      echo "<tr> 
              <td>" . $row ["name"] . "</td> 
              <td>" . $row ["email"] . "</td> 
              <td>" . $row ["contactno"] . "</td> 
              <td>" . $row ["gender"] . "</td>
              <td>" . $row ["education"] . "</td>
              <td>" . $row ["address"] . "</td> 
            </tr>";
    }
      echo "</table>";

  } else {
    echo "0 results";
  }
    
  $con->close();   

    //SELECT name, email, contactno,gender,education,address FROM contactpage
?>

