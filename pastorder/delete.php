<?php
$id=$_GET["id"];
require '../shared/classorder.php';
$obj=new past();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:pastordertbl.php');
}
?>