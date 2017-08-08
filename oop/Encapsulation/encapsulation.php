<?php 
class Person
{
    public $name;
    public $age;

    function __construct($n,$a)
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
        return $this->age - $this->ag;
    }
}
$person = new Person("Pankaj",25);
$person->setAge(20);
echo "You are ".$person->display()." year old";
?>

