
<?php
    session_start();
    session_unset();
   echo "<script>if(confirm('Logout Successfully')){document.location.href='../../index.php'};</script>";
    

?>