
<?php
class work
{
    private static $conn=null;
    public static function  connect()
    {
        self::$conn=mysqli_connect("localhost","root","","student");
        return self::$conn;
    }
    public static function disconnect()
    {
        mysqli_close($conn);
        self::$conn=null;
    }
    public function select_all()
    {
        $cnn=work::connect();
        $q="select * from work";
        $result=$cnn->query($q);
        return $result;
        work::disconnect();
    }
    
    
    public function insert($wname,$wemail,$wmob,$wurl,$wmsg)
    {
        $cnn=work::connect();
        $vari=0;      
        $q="insert into  work values ('". $wname."','". $wemail ."','". $wmob ."','". $wurl ."','". $wmsg ."')";
        
        $result=$cnn->query($q);
        return $result;
        work::disconnect();

    }
    public function update($wemail,$wname,$wmob,$wurl)
    {
               $cnn=work::connect();
               $q="update work set name='". $wname ."', mobile_no='". $wmob  ."' ,url='". $wurl  ."' where email_id='". $wemail ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        work::disconnect();
    }
    
     public function deletebyid($wemail)
    {
              $cnn=work::connect();
        $q="delete from work where email_id="."'$wemail'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        work::disconnect();
    }

    
    

}
?>
