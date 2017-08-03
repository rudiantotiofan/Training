<?php 
abstract class AbstractClass
{
    abstract protected function prefixName($name);
}

class ConcereteClass extends AbstractClass
{
    public function prefixName($name, $separator = "."){
        if($name == "Pacman"){
            $prefix = "Mr";
        }elseif ($name == "Pacwoman"){
            $prefix = "Mrs";
        }else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}
$class = new ConcereteClass;
echo $class->prefixName("Pacman"),"\n";
echo $class->prefixName("Pacwoman"),"\n";
?>