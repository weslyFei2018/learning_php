<?php


abstract class AbstractClass
{
    // 强制要求子类定义这些方法
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

    // 普通方法（非抽象方法）
    public function printOut()
    {
        print $this->getValue() . PHP_EOL;
    }
}

class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue()
    {
        return "ConcreteClass2";
    }

    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;


echo "-----------------------------".PHP_EOL ;

/**
 * 调用父类构造方法
 */
class BaseClass {
    function __construct() {
        print "BaseClass 类中构造方法" . PHP_EOL;
    }
}
class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();  // 子类构造方法不能自动调用父类的构造方法, 所以此处自动调用
        print "SubClass 类中构造方法" . PHP_EOL;
    }
}
class OtherSubClass extends BaseClass {
    // 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();

// 调用 BaseClass 构造方法
$obj = new OtherSubClass();