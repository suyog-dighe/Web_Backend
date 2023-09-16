<?php 
   $host="localhost";
   $username= "root";
   $password= "";
   $database = "sanjivanijunior";
    //creating databse cannection
   $con=mysqli_connect($host,$username,$password,$database );

   if(!$con)
   {
       die("connection failed:". mysqli_connect_error());
   }
   
     ?>
<?php
function getAll($table)
{
    global $con;
    $query_view="select * from $table";
    return $query_view_run=mysqli_query($con,$query_view);
}

function getByID($table,$id)
{
    global $con;
    $query_get="select * from $table where id='$id'";
    return $query_get_run=mysqli_query($con,$query_get);
}
function getByData($stream,$class)
{
    global $con;
    $query="select name,phone,stream,class,feedbackcampus,aboutcollege,suggestions from science_feedback where stream='$stream' and class='$class'";
    return $query_get_run=mysqli_query($con,$query);
}
?>
