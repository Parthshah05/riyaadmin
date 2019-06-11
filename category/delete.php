<?php
$id=$_GET["id"];
require '../shared/classcategory.php';
$obj=new cat();
$res=$obj->deletebyid($id);
if($res===true){
    header('location:categorytbl.php');
}
?>