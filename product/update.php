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
<div class="jumbotron">
  <div class="container">
    <h1>Update Your Data</h1>
  </div>
</div>
<?php

$_id=$_GET["id"];

$conn=new mysqli('localhost','root','','priya_store');
$sql="select * from product_tbl where product_id='$_id'";
//echo $sql;
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_name=$row["product_name"];
    $_cat=$row["fk_cat_id"];
    $_pid=$row["product_id"];
?>
<form action="updates.php" method="post" class="container">
    <div class="row">
    <table class="table">
        <div class="form-group col-ld-10">
            <tr><td>Enter Product Name :<td><input type="text" value="<?php echo $_name ?>" name="txtname" class="form-control" id="text" placeholder="Enter name"  ></tr><br>
        </div>
    </div>
    <div class="row">
     
   <div class="form-group col-ld-10">
            
            <?php
require '../shared/classcategory.php';
$res=cat::select_all();
echo '<tr>'.'<td>'.'Category:'.'<td>'.'<select name="txtcat">';
while($row=$res->fetch_assoc())
{
echo '<option  value="'.$row["cat_id"].'" ';
if($_cat==$row["cat_id"]){
    echo "selected";
}
echo '>'.$row["cat_name"] .'</option>';
}
echo '</select>';
?>

        </div>
    </div>
    <div class="row">
        <div class="form-group col-ld-10">
       <tr><td>Enter Id : <td><input type="text" value="<?php echo $_pid ?>" name="txtid" class="form-control" id="text" disabled="true" >
       </tr><br> </div>
    </div>
    
        <div class="row">
      <tr><td>  <button type="submit" class="form-control btn btn-success" aria-label="Left Align"> Edit     
            <span class="glyphicon glyphicon-check" ></span>
        <td></tr><br></button>
    </div>
    
</form>
</body>
</html>
