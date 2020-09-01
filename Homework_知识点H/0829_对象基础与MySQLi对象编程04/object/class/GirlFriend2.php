<?php


class GirlFriend2
{
    //访问控制: private
    private $name;

    //年龄
    private $age;

    // 三维
    private $stature = [];

    // 声明构造方法: 对象属性的初始化,在类实例化的时候，自动调用
    public function __construct($name, $age, array $stature)
    {
        // private 访问符限制的属性仅在当前对象内部可以使用
        $this->name = $name;
        $this->age = $age;
        $this->stature = $stature;
    }

    //创建对外访问的公共接口
    public function getName($yourName='')
    {
        $msg = '非法访问';

        if (!empty($yourName) && $yourName == '武大郎') {
            $msg = $this->name;
        }
        return $msg;
    }

    //设置器
    public function setAge($age=0)
    {
        if ($age >=0 && $age <=120) {
            $this->age = $age;
        }
        echo '非法数据';

    }

    //获取器
    public function getAge()
    {
        return $this->age;
    }


}