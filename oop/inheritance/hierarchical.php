<?php 
class Animal
{
    public $name;
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is ".$this->name;
    }
}
class Cat extends Animal
{
    public function Greet()
    {
        return "Hello, I'm a four footed animal and my name is ".$this->name;
    }
}
class Dog Extends Animal
{
    public function Greet()
    {
        return "Hello, I'm a dog and my name is ".$this->name;
    }
}
?>