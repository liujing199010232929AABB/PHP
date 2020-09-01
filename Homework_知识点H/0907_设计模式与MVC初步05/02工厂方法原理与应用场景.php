<?php
/**
 * 工厂模式: 不用用new ,而用函数/类方法批量创建对象
 *  $obj = create($class)
 */

// 声明一个类: 形状
class Shape
{
    // 声明一个静态方法,用来创建对象的,$type 就是类
    public static function create($type,array $size=[])
    {
        //检测形状
        switch ($type)
        {
            //长方形
            case 'rectangle':
                //创建出长方形的对象
                return new Rectangle($size[0], $size[1]);
                break;
            //长方形
            case 'triangle':
                //创建出长方形的对象
                return new Rriangle($size[0], $size[1]);
                break;
        }
    }
}


// 声明一个长方形类
class Rectangle
{
    private $width; // 宽
    private $height; // 高
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    //计算面积
    public function area()
    {
        return $this->width * $this->height;
    }
}

// 声明一个三角形类
class Rriangle
{
    private $bottom; // 底
    private $height; // 高
    public function __construct($bottom, $height)
    {
        $this->bottom = $bottom;
        $this->height = $height;
    }
    //计算面积
    public function area()
    {
        return ($this->bottom * $this->height)/2;
    }
}

$rectangle = Shape::create('rectangle',[10,30]);
echo '长方形的面积是: '. $rectangle->area(), '<hr>';

$triangle = Shape::create('triangle',[20,50]);
echo '三角形的面积是: '. $triangle->area(), '<hr>';