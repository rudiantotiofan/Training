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

//contoh lain
abstract class Mamalia{
    abstract protected function berJalan($pakai);
    abstract protected function makan($apaan); //abstract method
}
//pakai extends
class Manusia extends Mamalia{
    public function berJalan($pakai){
    
        return "Manusia Jalan pakai {$pakai}";
    }
    
    public function makan($apaan){
    
        return "Manusia biasa makan {$apaan}";
    }
}
class Kucing extends Mamalia{
    public function berJalan($pakai){
    
        return "Kucing Jalan pakai {$pakai}";
    }
    
    public function makan($apaan){
    
        return "Kucing biasa makan {$apaan}";
    }
}
echo '<br>';
$obj = new Manusia;
echo $obj->makan("Nasi");
echo $obj->berJalan("Kaki");
echo "<br>";
$obj = new Kucing;
echo $obj->makan("Ikan asin");
echo $obj->berJalan("Empat kaki");
?>