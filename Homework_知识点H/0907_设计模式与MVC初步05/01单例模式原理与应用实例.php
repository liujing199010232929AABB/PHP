<?php
/**
 * 单例模式: 一个类仅允许被实例化一次
 * 1. 一个站点仅需要创建一个数据库连接
 * 2. 一个站点通常只需要一个配置类
 */

class Config1 {}
// 下面我们来实例化
$obj1 = new Config1();
$obj2 = new Config1();
var_dump($obj1, $obj2);
var_dump($obj1 === $obj2);
echo '<hr>';
// 创建一个实用的配置类: 单例模式
class Config
{
    /**
     * 为什么要用静态的? 因为静态属性于类的,被所有类实例所共享;
     * 为什么要能实例初始化为null? 便于检测
     */

    private static $instance = null; // 其实默认值也是null,可以省

    // 配置参数容器
    public $setting = [];

    // 禁止从类的外部实例化对象
    private function __construct()
    {

    }

    //克隆方法也私有化
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //外部仅允许通过一个公共静态方法来创建实例
    public static function getInstance()
    {
        //检测当前的类属性$instance是否已经保存了当前类的实例?
        if (self::$instance == null) {
            self::$instance = new self();
        }
        // 如果已经存在当前类的实例,返回当前类的实例
        return self::$instance;
    }

    // 配置项的设置操作
    public function set()
    {
        //获取参数的数量
        $num =  func_num_args();
        if ($num > 0) {
            switch ($num) {
                case 1:  // 如果只有一个参数,说明这是一个数组
                    $value = func_get_arg(0);
                    if (is_array($value)) {
                        $this->setting = array_merge($this->setting, $value);
                    }
                    break;
                case 2:  // 逐个设置
                    $name = func_get_arg(0); // 配置项的名称
                    $value = func_get_arg(1); // 配置项的值
                    $this->setting[$name] = $value;
                    break;
                default:
                    echo '<span style="color:red">非法参数</span>';
            }
        } else {
            echo '<span style="color:red">没有参数</span>';
        }
    }

    // 获取参数: 当无参数的时候,默认获取全部参数
    public function get($name='')
    {
        if (empty($name)) {
            //获取所有参数
            return $this->setting;
        }
        // 获取某一个参数
        return $this->setting[$name];
    }
}

$obj1 = Config::getInstance();
$obj2 = Config::getInstance();
var_dump($obj1, $obj2);
var_dump($obj1 === $obj2);
echo '<hr>';

//设置
$obj1->set('host','127.0.0.1');

echo $obj1->get('host');
echo '<hr>';
$config = ['host'=>'localhost','user'=>'root','pass'=>'123456'];
$obj1->set($config);
print_r($obj1->get());
