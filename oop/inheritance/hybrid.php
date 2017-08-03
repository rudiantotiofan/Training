<?php 
interface A {
    public function do1();
    public function do2();
    public function do3();
}

interface B extends A {
    public function do4();
    public function do5();
    public function do6();
}

interface C extends A {
    public function do4();
    public function do5();
    public function do6();
}

class D implements B, C {
    //statment
}
?>