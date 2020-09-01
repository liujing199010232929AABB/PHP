<?php
/**
 * 类中的静态成员与访问
 * 1.类中静态成员使用关键字:static 定义;
 * 2.静态成员包括: 静态属性和静态方法;
 * 3.静态成员是属于类的,我们应该终终使用类来访问;
 * 4.静态属性必须使用类来访问,而静态方法即可以用类,也可以用对象访问;
 * 5.静态成员是可以有访问限制的: public,protected,private;
 * 6.静态成员与对象无关,所以内部不允许使用伪变量: $this;
 * 7.访问时,类名后必须使用:范围解析符:双冒号[::]
 * 8.在类中引用自身使用关键字: self::
 *
 * 范围解析符的作用:
 * 1. 访问静态成员;
 * 2. 访问类常量;
 * 3. 继承上下文中引用被覆盖成员
 */

class Demo5
{
    public static $pdo = null;
    protected static $db = [
      'type' => 'mysql',
      'host' => 'localhost',
      'dbname' => 'php',
      'user' => 'root',
      'pass' => 'root',
    ];

    public static function connect()
    {
        $dsn = self::$db['type'].':host='.self::$db['host'].';dbname='.self::$db['dbname'];
        self::$pdo = new PDO($dsn,self::$db['user'],self::$db['pass']);
    }

    public static function select($table,$fields='*', $num=5)
    {
        $stmt = self::$pdo->prepare("SELECT {$fields} FROM {$table} LIMIT {$num}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}

//连接数据库
Demo5::connect();

//查询数据表
$result = Demo5::select('staff','name,age,salary',8);

//显示结果
echo '<pre>',var_export($result);


