<?php

class Car
{
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
}

$bmw = new Car ();
$mercedes = new Car ();

echo $bmw -> color;
echo $mercedes -> color;