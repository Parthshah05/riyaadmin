
<?php
class product
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
        $cnn=product::connect();
        $q="select * from product_tbl";
        $result=$cnn->query($q);
        return $result;
        product::disconnect();
    }
    public function select_all1()
    {
        $cnn=product::connect();
        $q="select p.*,c.* from product_tbl p,product_cat c where p.fk_cat_id=c.cat_id";
        $result=$cnn->query($q);
        return $result;
        product::disconnect();
    }
    
    public function insert($pname,$pcid)
    {
        $cnn=product::connect();
        $vari=0;      
        $q="insert into product_tbl values ('".null."','". $pname."','".null."','". $pcid ."')";
        $result=$cnn->query($q);
        return $result;
        product::disconnect();

    }
    public function update($pid,$pname,$pcid)
    {
        $cnn=product::connect();
        $q="update product_tbl set product_name='". $pname ."', fk_cat_id='". $pcid  ."' where product_id='". $pid ."'";
        echo $q;
        $result=$cnn->query($q);
        echo $q;
        return $result;
        product::disconnect();
    }
    
     public function deletebyid($wid)
    {
              $cnn=product::connect();
        $q="delete from product_tbl where product_id="."'$wid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        product::disconnect();
    }

}
?>
