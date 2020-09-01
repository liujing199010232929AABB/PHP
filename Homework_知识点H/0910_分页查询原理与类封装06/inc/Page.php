<?php
//分页查询类

namespace model;

class Page
{
    //查询起始偏移量
    private $offset;

    //每页记录数量
    private $num;

    //数据库连接对象
    private $pdo;

    //构造方法
    public function __construct($num=5)
    {
        //初始化每页记录数量
        $this->num = $num;

        //查询起始偏移量: (页码-1)*数量
        $this->offset = ($this->getPage()-1)*$this->num;
    }

    //连接数据库
    public function connect($type,$host,$dbname,$user,$pass)
    {
        try {
            $this->pdo = new \PDO("{$type}:host={$host};dbname={$dbname}",$user,$pass);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    //获取当前页码
    public function getPage()
    {
        //如果url中存在页码变量p则取之,否则默认为1,即第一页
        return isset($_GET['p']) ? $_GET['p'] : 1;
    }

    //获取总页数
    public function getPages($table)
    {
        //因为是读操作,所有必须使用count()获取,不允许通过rowCount()进行判断
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM `{$table}` ");
        $stmt->execute();

        //获取结果集中的一行一列,即记录总数
        $total = $stmt->fetchColumn(0);

        // ceil()是向上取整函数,即当前页哪怕只有一条记录,也必须输出一个页面
        return  ceil($total / $this->num);
    }

    //获取分页数据
    public function getData($table)
    {
        //从指定数据表中的获取当前页需要显示的记录
        $sql = "SELECT * FROM `{$table}` LIMIT {$this->offset}, {$this->num} ;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        //获取分页数据并返回关联部分
        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}