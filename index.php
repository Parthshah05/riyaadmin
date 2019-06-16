<?php 
session_start();
if(isset($_SESSION["id"]))
{
    header("Location:web/index.php");
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login | Riya Foods</title>
    <script src="shared/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="shared/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="shared/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="shared/js/bootstrap.min.js"></script>
</head>
<style>
#nav{
    background-color: rgb(6, 217, 149);
    
}
#navf{
    color: #fff; 
    font-family: 'Roboto', sans-serif;
}
</style>
<body  >
<nav class="top1 navbar navbar-default navbar-static-top" id="nav" role="navigation" style="margin-bottom: 0">
           <div class="navbar-header" >
                <a class="navbar-brand" href="index.php" id="#navf" style="color:#fff">Riya Foods</a>
            </div>
</nav>


<div class="jumbotron">
  <h1><center>Login</center></h1>
</div>
<div class="container">
<form   method="post" class="form-group" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      
      <label>Email:</label>
      <input type="email" class="form-control" required placeholder="Enter email" name="txtemail"><br>
      <label>Password:</label>
      <input type="password" required class="form-control" placeholder="Enter password" name="txtpwd"><br>
      <input type="submit" name="btnlogin" value="Login" id="nav" class="btn btn-success">
</form>
</div>
<?php 
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
    $_id=$_POST["txtemail"];
    $_pass=$_POST["txtpwd"];
        if(($_id=="ram50@gmail.com")&&($_pass=="ram5050"))
        {
            header('location:web/index.php');
            $_SESSION["id"]=$_id;

        }
        else
        {

            header('location:index.php');
           
        }
 
/*$conn=new mysqli("localhost","root","","stu_db");
    if($conn->connect_error)
    {
            echo "connection error";
    }
    $result=$conn->query("select * from user where email_id='". $_id ."' and pass='". $_pass ."'");
    if($result->num_rows ==1)
    {
            $_SESSION["id"]=$_id;
        header('location:view_profile.php');
    }
    else
    {
        echo "fail";
    }*/
 }
?>
<br>
<br>
<br>
<br>
<br>
<br>

<nav class="top1 navbar navbar-default navbar-static-bottom"  style="background-color: #ffffff" role="navigation" style="margin-bottom: 0">
<div class="navbar-header"  >
    <a class="navbar-brand" ><p>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbspCopyright &copy; 2019 Riya Foods. All Rights Reserved | Design And Created by Parth Shah </p></a>
 </div>
</nav>
<script src="web/js/bootstrap.min.js"></script>
</body>
</html>