
 <a href="index.php">back to home page</a>
<!DOCTYPE html>
<html>
<head>
    <title>Testimonial validation form</title>
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">

 
</head>

<body>
	<center>
 <div class="yourtodo"><p>Data</p></div>

</center>
 <?php

 include 'conn.php'; 
 $q = "select * from reg_show ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr>
 <p>
 	<div class="todo">
 		<div class="tododis">
 
 <td>Name:- <?php echo $res['name'];  ?> </td>

</div>

	<div class="todo">
 		<div class="tododis">
 
 <td>Email:- <?php echo $res['email'];  ?> </td>

</div>

	<div class="todo">
 		<div class="tododis">
 
 <td>Address:- <?php echo $res['address'];  ?> </td>

</div>

	<div class="todo">
 		<div class="tododis">
 
 <td>House No:-  <?php echo $res['house_no'];  ?> </td>

</div>

	<div class="todo">
 		<div class="tododis">
 
 <td>Phone Number:- <?php echo $res['ph_number'];  ?> </td>

</div>

</p>

 </tr>

 <?php 
 }
 ?>
 
    

   