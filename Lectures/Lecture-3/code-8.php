<?php 

class Dog{
    public string $name;
}

$dogA = new Dog();
$dogB = new Dog();

$dogA->name = "Rex";
$dogB->name = "Bella";

echo $dogA->name;