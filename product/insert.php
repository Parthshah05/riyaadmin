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

<tr><td>Product Name:<td><input type="text" class="form-control" name="txtname" placeholder="Enter Product Name" required></tr><br>
<?php
require '../shared/classcategory.php';
$res=cat::select_all();
echo '<tr>'.'<td>'.'Category:'.'<td>'.'<select name="txtcat">';
while($row=$res->fetch_assoc())
{
echo '<option name="1"  value=" echo $row["cat_id"] ">'.$row["cat_name"] .'</option>';
}
echo '</select>';
?>
<br>
</tr><br>


</tr><br></table>
<tr><center><input type ="submit" class="btn btn-success" name="btnin" value="Insert"></center>
</form>

<?php
$_pname="";
$_cat="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $_pname=$_POST["txtname"];
    $_cat=$_POST["txtcat"];
    
   
    require '../shared/classproduct.php';
    $conn=new product;
    $result=$conn->insert($_pname,$_cat);

    if($result===true)
    {
         header('location:producttbl.php');
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