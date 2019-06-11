
<?php
class kproduct
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
        $cnn=kproduct::connect();
        $q="select * from kart_product";
        $result=$cnn->query($q);
        return $result;
        kproduct::disconnect();
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
    
     public function deletebyid($uid)
    {
              $cnn=kproduct::connect();
        $q="delete from Kart_product where kart_id="."'$uid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        kproduct::disconnect();
    }

    
    

}
?>
