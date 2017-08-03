<?php 
class Foo{
    public function __call($method, $args){
        if($method === 'findSum'){
            echo 'Sum is calculated to '.$this->_getSum($args);
        }else{
            echo "Called method $method";
        }
    }

    private function _getSum($args){
        $sum = 0;
        foreach($args as $arg){
            $sum += $arg;
        }
        return $sum;
    }
}

$foo = new Foo;
$foo->bar1(); //called method bar1
$foo->bar2(); //called method bar1
$foo->findSum(10,50,30);
$foo->findSum(10.75,101);
?>