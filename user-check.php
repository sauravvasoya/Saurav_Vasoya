<?php
if(isset($_SESSION["userid"]))
{
    $get_user_id=$_SESSION["userid"];
  

} 
else{
    echo "<script>alert('PLease First Login!');window.location='login.php';</script>";
    
}
?>