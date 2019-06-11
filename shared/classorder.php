
<?php
class past
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
        $cnn=past::connect();
        $q="select * from past_order_tbl";
        $result=$cnn->query($q);
        return $result;
        past::disconnect();
    }
    public function select_all1()
    {
        $cnn=past::connect();
        $q="select p.*,u.*,o.* from product_tbl p,user_tbl u,past_order_tbl o where o.user_id=u.user_id AND o.product_id=p.product_id";
        $result=$cnn->query($q);
        return $result;
        past::disconnect();
    }
    public function deletebyid($uid)
    {
        $cnn=past::connect();
        $q="delete from past_order_tbl where user_id="."'$uid'";
        $result=$cnn->query($q);
        echo $q;
        return $result;
        past::disconnect();
    }

}
?>
