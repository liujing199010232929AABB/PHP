<?php
/**
 * 对象的复制与克隆
 * 1. 默认的情况下，对象复制是引用传递
 */

class Member
{
    // 声明三个私有属性
    private $name; //全员名
    private $email; // 邮箱
    private $score; // 积分

    //构造方法
    public function __construct($name='',$email='',$score=0)
    {
        $this->name = $name;
        $this->email = $email;
        $this->score = $score;
    }

    //查询器
    public function __get($name)
    {
        return $this->$name;
    }
    //设置器
    public function __set($name,$value)
    {
        $this->$name = $value;
    }

    public function __clone()
    {
       $this->score = 0;
    }

}

// 创建会员对象
$member = new Member('peter','peter@php.cn',1000);
//访问测试
echo $member->score, '<hr>';
//复制对象
$member1 = clone $member; // 应该有一个方法，在复制之前自动执行
//$member1->score = 2000;
echo 'member1的积分: '. $member1->score, '<hr>';
echo 'member的积分: '. $member->score, '<hr>';
//var_dump($member === $member1);

