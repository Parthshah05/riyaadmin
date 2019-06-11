
<?php
class user
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","priya_store");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=user::connect();
        $q="select * from user_tbl";
        $result=$cnn->query($q);
        return $result;
        user::disconnect();
    }
    
    
   
     public function deletebyid($wid)
    {
              $cnn=user::connect();
        $q="delete from user_tbl where user_id="."'$wid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        user::disconnect();
    }

    
    

}
?>
