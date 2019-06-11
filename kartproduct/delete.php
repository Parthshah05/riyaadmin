<?php
$id=$_GET["id"];
require '../shared/classkartproduct.php';
$obj=new kproduct();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:kartproducttbl.php');
}
?>