<?php

$a = 1;

$sum = 0;
$a *= 2;
$b = 2;

$c = 3;
$sum = $a + $b*2;

//echo $sum;

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

        // TODO: ʵ�� echoHello() ����.
        $name = 'lzw';
        $age = 20;

        echo $this->hello();
    }

    public function hello()
    {
        echo 'hello';
        // TODO: ʵ�� hello() ����.
        return 111;
        $this->test(1,2,3);
        return "Hello, my name is lzw, age is 18";
    }

    public function test($a, $b, $c)
    {
        $sum = $a + $b;
        $sum += $c;
        $city = 'sz';

        echo $sum . PHP_EOL;
    }
}

(new User())->echoHello();