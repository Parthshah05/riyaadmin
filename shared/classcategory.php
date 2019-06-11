
<?php
class cat
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
        $cnn=cat::connect();
        $q="select * from product_cat";
        $result=$cnn->query($q);
        return $result;
        cat::disconnect();
    }
    
    
    public function insert($cname)
    {
        $cnn=cat::connect();
        $vari=0;      
        $q="insert into product_cat values ('".null."','". $cname."')";
        
        $result=$cnn->query($q);
        return $result;
        cat::disconnect();

    }
    public function update($cid,$cname)
    {
               $cnn=cat::connect();
               $q="update product_cat set cat_name='". $cname ."' where cat_id='". $cid ."'";
         $result=$cnn->query($q);
         echo $q;
        return $result;
        cat::disconnect();
    }
    
     public function deletebyid($wid)
    {
              $cnn=cat::connect();
        $q="delete from product_cat where cat_id="."'$wid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        cat::disconnect();
    }

    
    

}
?>
