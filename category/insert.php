<!DOCTYPE html>
<html>
    <head>
    <script src="../shared/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../shared/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../shared/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="../shared/js/bootstrap.min.js" ></script>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<table class="table">
<h1><center>Insert Your Data</center></h1>

<tr><td>Category Name:<td><input type="text" class="form-control" name="txtcat" placeholder="Enater Category" required></tr><br>

<tr></table>
<center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_cname="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_cname=$_POST["txtcat"];
   
    require '../shared/classcategory.php';
    $conn=new cat;
    $result=$conn->insert($_cname);

    if($result===true)
    {
         header('location:categorytbl.php');
    }
    else
    {
        echo $sql;
        echo " Not Successfully Insert";
        header('location:../web/index.php');
    }

}
?>
</body>
</html>