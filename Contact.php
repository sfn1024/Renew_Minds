<!--connect-->
<?php include('includes/connect.php'); ?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$address=$_POST['address'];
$query=mysqli_query($con,"insert into contactpage(name,email,contactno,gender,education,address)
values('$name','$email','$contactno','$gender','$education','$address')");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    
    
    <?php include('components/Imports.php'); ?>
    
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <!-- ========================= CONTACT ========================= -->
    <!-- Start your code here...

        data-aos js animation sample...
        <div class=" " data-aos="fade-down" data-aos-delay="50"
    -->
<h3 style="text-align: center;">CONTACT US</h3>
<div style="display: flex; justify-content: center;">
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.23222197752!2d81.07370807390494!3d6.981900517668943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4618a1a9fec37%3A0x1dd900702229654b!2sUva%20Wellassa%20University%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1689189132757!5m2!1sen!2slk" width="1300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
    <form style="width: 50%;" name="insert" action="" method="post">
<table width="100%"  border="0">
<tr>
<th height="62" scope="row">Name </th>
<td ><input type="text" name="name" id="name" value=""  class="form-control" required />
</td>
</tr>
<tr>
<th height="62" scope="row">Email id </th>
<td><input type="email" name="email" id="email" value=""  class="form-control" required />
</td>
</tr>
<tr>
<th height="62" scope="row">Contact no</th>
<td>
<input type="text" name="contactno" id="contactno" value=""  class="form-control" maxlength="10" required /></td>
</tr>
<tr>
<th height="62" scope="row">Gender</th>
<td><input type="radio" name="gender" value="Male" checked >Male
<input type="radio" name="gender" value="Female" >female</td>
</tr>
<tr>
<th height="62" scope="row">Education</th>
<td><select name="education" id="email" class="form-control" required >
<option value="">Select your Year</option>
<option value="1st Year">1st Year</option>
<option value="2nd Year">2nd Year</option>
<option value="3rd Year">3rd Year</option>
<option value="4th Year">4th Year </option>

</select></td>
</tr>
<tr>
<th height="62" scope="row">Address</th>
<td><textarea name="address" class="form-control"  required></textarea> </td>
</tr>
<tr>
<th height="62" scope="row"></th>
<td><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
</tr>
</table>
</form>


    

    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>