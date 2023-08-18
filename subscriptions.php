<?php

$con=mysqli_connect("localhost","root","tiger","impulsecoffee");

$user_email=$_REQUEST["email"];
if(!$con)
{
  die("Could Not Connect".mysqli_error());
}

else{
  if(empty($user_email))
{
  header("location:Impulsecoffee.html");
  die;
}

else
{
  mysqli_query($con,"INSERT INTO `subscriptions`(`Email_id`) VALUES ('$user_email')");
  mysqli_close($con);
  header("location:index.html");
}
  
}
?>