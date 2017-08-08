
<?php
class STD extends Thread{
    public function put(){
       
        $this->synchronized(function(){
            for($i=0;$i<7;$i++){

    printf("%d\n",$i);
    $this->notify();
    if($i < 6)
    $this->wait();
    else
        exit();
    sleep(1);
}
        });

    }

        public function flush(){
       
$this->synchronized(function(){
            for($i=0;$i<7;$i++){
    flush();
    $this->notify();
    if($i < 6)
    $this->wait();
    else
        exit();
    }
});
}
}

class A extends Thread{
    private $std;
    public function __construct($std){
        $this->std = $std;
    }
    public function run(){
        $this->std->put();
    }
}

class B extends Thread{
    private $std;
    public function __construct($std){
        $this->std = $std;
    }
    public function run(){
        $this->std->flush();
    }
}
ob_end_clean();
echo str_repeat(" ", 1024);
$std = new STD();
$ta = new A($std);
$tb = new B($std);
$ta->start();
$tb->start();
?>