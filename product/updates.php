<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_pid=$_POST["txtid"];
    $_name=$_POST["txtname"];
    
$_cat=$_POST["txtcat"];



    
require '../shared/classproduct.php';
$conn=new product;
$result=$conn->update($_pid,$_name,$_cat);
if($result==true)
{
    header('location:producttbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>