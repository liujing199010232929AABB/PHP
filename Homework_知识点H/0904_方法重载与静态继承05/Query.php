<?php
/**
 * 数据库查询类
 */

class Query
{
    // 保存sql语句中的各个组成部分
    // SELECT 字段列表 FROM 表名 WHERE 条件
    private $sql = [];

    // 数据库的连接对象
    private $pdo = null;

    //构造方法: 连接数据库
    public function __construct()
    {
        // 连接数据库并返回pdo对象
        $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=php','root','root');
    }
    // table()获取sql语句的表名
    public function table($table)
    {
        $this->sql['table'] = $table;
        return $this;  //返回当前类实例对象,便于链式调用该对象的其它方法
    }

    // fields()获取sql语句的字段列表
    public function fields($fields)
    {
        $this->sql['fields'] = $fields;
        return $this;
    }

    // where()获取sql语句的查询条件
    public function where($where)
    {
        $this->sql['where'] = $where;
        return $this;
    }

    //执行查询,是一个终级方法
    public function select()
    {
        //拼装SELECT查询语句
        $sql = "SELECT {$this->sql['fields']} FROM {$this->sql['table']} WHERE {$this->sql['where']}";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}