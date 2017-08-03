<?php
class mainClass
{
    public $phi = 3.14;
    public function keliling($r)
    {
        return 2*$this->phi*$r;
    }
    public function luas($r)
    {
        return $this->phi*($r*$r);
    }
}
?>