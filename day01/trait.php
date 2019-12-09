<?php

/**
 * Trait Hello
 */
trait Hello
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

/**
 * Trait World
 */
trait World
{
    public function sayWorld()
    {
        echo 'World';
    }
}

class MyHelloWorld
{
    use Hello, World; # PHP 实现了代码复用的一个方法，称为 traits

    public function sayExclamationMark()
    {
        echo '!';
    }
}

$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayExclamationMark();
echo PHP_EOL;
echo __FILE__.PHP_EOL.__DIR__.PHP_EOL;
echo substr(__FILE__,strlen(__DIR__)-strlen(__FILE__)+1);