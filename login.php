<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","simplelogin");
$query="SELECT * FROM user where username='$username' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
  header('location:dashboard.php');
  $_SESSION['username']=$username;
 }
else{
  echo "INVALID USERNAME AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script> 
$(function(){
  $("#header").load("header.html"); 

});
</script> 

<style type="text/css">
div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
   margin-top: 10%;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}
body{
  background-image: url("images/lg6.png");
  background-repeat: no-repeat;
  background-size: 100%;
}
</style>

</head>
<body>
  <center><div id="header"></div>
<!-- Default form subscription -->
<div>
<form class="text-center border border-light p-5" method="post" action="login.php">

    <p class="h4 mb-4" style="color:violet;"><b>Login Form</b></p>
                
  

    <!-- Name -->
    <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4"  name="username" placeholder="username">

    <!-- Email -->
   <input type="password" id="defaultSubscriptionFormEmail" class="form-control mb-4" name="password" placeholder="Password">
    <!-- Sign in button -->
    <button class="btn btn-info btn-block" name="submit" type="submit">Login</button>


</form>
</div>
</center>

<!-- Default form subscription -->
</body>
</html>