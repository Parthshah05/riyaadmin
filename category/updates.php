<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $_name=$_POST["txtcat"];
    $_cid=$_POST["txtid"];
    


    
require '../shared/classcategory.php';
$conn=new cat;
$result=$conn->update($_cid,$_name);
if($result==true)
{
    header('location:categorytbl.php');
}
else
{
 echo $result;
  echo "unsuccessfully";
}
}
?>