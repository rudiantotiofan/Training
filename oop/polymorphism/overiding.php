<?php
class Foo{
    function myFoo(){
        return "Bar";
    }
}
class Bar extends Foo{
    function myFoo(){
        return "Bar";
    }
}

$foo = new Foo;
$bar = new Bar;
echo ($foo->myFoo()); //"Foo"
echo ($bar->myFoo()); //"Bar"
 ?>