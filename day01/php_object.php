<?php

class Car
{
    var $color;

    function __construct($color = "green")
    {
        $this->color = $color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    function what_color()
    {
        return $this->color;
    }
}

function print_vars($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

$car = new Car("white");
echo $car->getColor();
echo PHP_EOL;
$car->setColor("yellow");
echo $car->getColor();

echo PHP_EOL;

// 显示 herbie 属性
echo "\therbie: Properties\n";
print_vars($car);


class MyDestructableClass
{
    function __construct()
    {
        print "构造函数\n";
        $this->name = "MyDestructableClass";
    }

    function __destruct()
    {
        print "销毁 " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();


class Site {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par){
        $this->url = $par;
    }

    function getUrl(){
        echo $this->url . PHP_EOL;
    }

    function setTitle($par){
        $this->title = $par;
    }

    function getTitle(){
        echo $this->title . PHP_EOL;
    }
}

// 子类扩展站点类别
class Child_Site extends Site {
    var $category;

    function setCate($par){
        $this->category = $par;
    }

    function getCate(){
        echo $this->category . PHP_EOL;
    }
}