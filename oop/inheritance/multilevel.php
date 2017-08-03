<?php 
class Animal
{
    public $name;
    public function Greet()
    {
        return "Hello, I'm some sort of animal and my name is ".$this->name;
    }
}

class FourFooted extends Animal
{
    public function Greet()
    {
        return "Hello, I'm a four footed animal and my name is ".$this->name;
    }
}

class Dog extends FourFooted
{
    public function Greet()
    {
        return "Hello, I'm a dog and my name is ".$this->name;
    }
}
$animal = new Animal();
echo $animal->Greet();

$animal = new FourFooted();
echo $animal->Greet();

$animal = new Dog();
$animal->name = "Bob";
echo $animal->Greet();
?>