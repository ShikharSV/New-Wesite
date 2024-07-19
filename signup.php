<?php
     session_start();
   

   include("dr.php");
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
     $first_name = $_POST['fname'];
     $last_name = $_POST['lname'];
     $Gender = $_POST['gender'];
     $num = $_POST['cnum'];
     $address = $_POST['add'];
     $gmail = $_POST['email'];
     $password = $_POST['pass'];

    if(!empty($gmail) && !empty($password) && !is_numeric($gmail) )
    {

       $query = "insert into form (fname, lname, gender, cnum, address, email, pass) values('$first_name', '$last_name', '$Gender', '$num', '$address', '$gmail', '$password')";
       
       mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
    }




   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: white;">
<div class="logo" style="margin: auto;" > <img src="logo.png" style="margin:auto; align-items: center;"></div>
    <div style="display: flex;">
        <div style="color:  rgb(0, 128, 255);font-size: 25px; display: flex; margin-left: 400px; margin-top: 70px; ">
            <div style="color: green; font-size: 55px;"><i class="fa-solid fa-phone"></i></div>
</div>
</div>
    <div class="signup">

        <h1>sign UP</h1>
        <h4>It is free and takes a minute</h4>
        <form method="post">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address   </label>
            <input type="tel" name="cnum" required>
            <label>Address</label>
            <input type="text" name="add" required>
            <label>Email</label>
            <input type="Email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" name="" value="submit">
        </form>
        <p>By clicking the Sign Up buttton, you agree to our<br>
        <a href="">Terms and Condition</a> and <a href="#">Policy Privacy</a></p>
        
    
</body>
</html>