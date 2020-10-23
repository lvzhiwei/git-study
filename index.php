<?php

$a = 1;

$sum = 0;
$a *= 2;
$b = 2;

$c = 3;
$sum = $a + $b*2;

echo $sum;

interface Test
{
    public function echoHello();

    public function hello();
}

interface Hello{

}

class User implements Test, Hello
{
    public function test()
    {
        $age = 1111;
        echo "hello world";
    }
    public function echoHello()
    {

        // TODO: 实现 echoHello() 方法.
    }

    public function hello()
    {
        echo 'hello';
        // TODO: 实现 hello() 方法.
        return 111;
    }
}