<?php

$a = 1;

$b = 2;

$sum = $a + $b;

echo $sum;

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
    }

    public function hello()
    {
        // TODO: Implement hello() method.
    }
}