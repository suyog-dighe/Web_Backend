<?php
session_start();
$userprofile=$_SESSION['user_name'];


if($userprofile==true)
{

}
else
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanjivani Junior College,Kopargaon</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/logo.png" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>

<?php include('sidebar.php');?>
<?php include('navbar.php'); ?>
