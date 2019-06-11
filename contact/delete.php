<?php
$id=$_GET["id"];
require '../shared/classcontact.php';
$obj=new contact();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:contacttbl.php');
}
?>