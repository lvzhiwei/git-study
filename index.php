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
    public function echoHello()
    {
	    // echoHello function
        $name = 'lzw';
        $age = 20;
        $gender = 'male';

        echo $this->hello();
    }

    public function hello()
    {
    	// hello function
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