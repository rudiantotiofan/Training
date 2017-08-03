<?php 
class Person
{
    public $name;
    public $age;

    function __construct()
    {
        $this->name=$n;
        $this->age=$a;
    }

    public function setAge($ag)
    {
        $this->ag=$ag;
    }

    public function display()
    {
        echo "Welcome ".$this->name."<br>";
    }
}
$person = new Person("Pankaj",25);
$person->setAge(20);
echo "You are ".$person->display()." year old";
?>

