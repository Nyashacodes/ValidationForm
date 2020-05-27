
 <?php

include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $email = $_POST['email'];
 $ph_number = $_POST['ph_number'];
 $house_no = $_POST['house_no'];
 $address = $_POST['address'];
 $q = " INSERT INTO `reg_show`(`name`, `email`,`ph_number`, `house_no`,`address`) VALUES ( '$name', '$email', '$ph_number', '$house_no', '$address'  )";

 $query = mysqli_query($con,$q);
 


}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Testimonial validation form</title>
  <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">

 
</head>
<body>

    
<div class="logo"></div>    
  
    
 
 <form method="post">

<div class="todolist"><p>Validation Form By Nyasha </p>


<div class="todotitle">
<input type="text" name="name" placeholder="Full Name" required>
</div>


<div class="todotitle">
<input type="email" name="email" placeholder="Email address" required>
</div>


<div class="todotitle">
<input type="text" name="address" placeholder="address" required>
</div>


<div class="todotitle">
<input type="number" name="house_no" placeholder="house no." required>
</div>

<div class="todotitle">
<input type="number" name="ph_number" placeholder="Phone no." required>
</div>




<div class="todoreset">
<button type="reset">Reset</button>
</div>

<div class="todosubmit">

<button type="submit" name="done" placeholder="Log In">Submit </button></div>
     </div>
 </form>

 
</body>
</html>
  <center>
<p>

<div class="yourtodo"><p><a href="display.php">Show Data </a></p></div>

</center>
 