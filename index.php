<?php

$a = 1;

$b = 2;

$c = 3;
$sum = $a + $b*2;

//echo $sum;

interface Test
{
    public function echoHello();

    public function hello();
}

class User implements Test
{
    public function echoHello()
    {
        // TODO: Implement echoHello() method.
        $name = 'lzw';
        $age = 20;

        echo $this->hello();
    }

    public function hello()
    {
        // TODO: Implement hello() method.
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