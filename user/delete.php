<?php
$id=$_GET["id"];
require '../shared/classuser.php';
$obj=new user();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:usertbl.php');
}
?>