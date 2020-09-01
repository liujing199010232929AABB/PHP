<?php
//模型类

namespace mvc\model;


class Model
{
    public $pdo = null;
    //连接数据库
    public $result = [];
    public function __construct($dbname, $user, $pass)
    {
        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname='.$dbname, $user, $pass);
    }

    //查询
    public function select($table, $num)
    {
        //创建预处理对象
        $stmt = $this->pdo->prepare("SELECT `id`,`name`,`age`,`salary` FROM {$table} LIMIT :num");
        //执行查询
        $stmt->bindValue(':num', $num, \PDO::PARAM_INT);
        $stmt->execute();

        $this->result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}