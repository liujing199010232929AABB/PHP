<?php
/**
 * 后期静态绑定的小案例
 *
 */
class Db1
{
    public static $pdo = null;
    //连接数据库
    public static function connect()
    {
        self::$pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');
    }

    public static function query()
    {
        $stmt = self::$pdo->prepare("SELECT `name`,`salary` FROM `staff` LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function select()
    {
        self::connect();
//        return self::query();
        return static::query();
    }

}

class Db2 extends Db1
{
    public static function query()
    {
        $stmt = self::$pdo->prepare("SELECT `name` AS `姓名`,`email` AS `邮箱` FROM `user` LIMIT 3");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
echo '<pre>';
//print_r(Db1::select());
print_r(Db2::select());