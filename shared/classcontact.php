
<?php
class contact
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
        $cnn=contact::connect();
        $q="select * from contact_us";
        $result=$cnn->query($q);
        return $result;
        contact::disconnect();
    }
    
    
   
     public function deletebyid($wid)
    {
              $cnn=contact::connect();
        $q="delete from contact_us where user_id="."'$wid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        contact::disconnect();
    }

    
    

}
?>
