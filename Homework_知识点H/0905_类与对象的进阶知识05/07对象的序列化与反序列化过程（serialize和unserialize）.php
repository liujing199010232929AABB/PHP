<?php
/**
 * 对象的序列化
 */
//$num = 500;
//echo serialize($num),'<hr>'; // i:500;
//$name = 'peter';
//echo serialize($name), '<hr>'; // s:5:"peter";
//$course = ['html','css','javascript'];
//echo serialize($course), '<hr>';

class Db
{
    //连接参数与返回值
    public $db = null;
    public $host;
    public $user;
    public $pass;

    //构造方法
    public function __construct($host='127.0.0.1', $user='root', $pass='root')
    {
        $this->host = $host;
        $this->user =  $user;
        $this->pass = $pass;
        // 确保实例化对象的时候能自动连接上数据库
        $this->connect();
    }

    //数据库连接
    private function connect()
    {
        $this->db=mysqli_connect($this->host,$this->user,$this->pass);
    }

    //对象序列化的时候自动调用
    public function __sleep()
    {
        return ['host','user','pass'];
    }

    //反序列化:
    public function __wakeup()
    {
        $this->connect();
    }

}

$obj = new Db();
/**
 * 对象序列化的特点:
 * 1. 只保存对象中的属性,不保存方法
 * 2. 只保存类名,不保存对象名
 */

echo serialize($obj),'<hr>';
$tmp = serialize($obj);
var_dump(unserialize($tmp));


