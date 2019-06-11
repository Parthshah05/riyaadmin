<?php
$id=$_GET["id"];
require '../shared/classproduct.php';
$obj=new product();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:producttbl.php');
}
?>