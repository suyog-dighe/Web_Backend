<?php
session_start();
include('../config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $user=mysqli_real_escape_string($con,$_POST['user']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $login_query="select * from user where username='$user' and password='$password'";
    $login_query_run=mysqli_query($con, $login_query);

    if(mysqli_num_rows( $login_query_run)>0)
    {
            $_SESSION['user_name'] =$user;

            header('Location: ../add-faculty.php');
    }
    else
    {
        echo "<script>if(confirm('Please Enter Valid Credential')){document.location.href='../login.php'};</script>";
        $_SESSION['message']="invalid credentials";
       
    }
}
elseif (isset($_POST['logout_btn'])) {
    session_unset();
   echo "<script>if(confirm('Logout Successfully')){document.location.href='../../index.php'};</script>";
    
}


?>