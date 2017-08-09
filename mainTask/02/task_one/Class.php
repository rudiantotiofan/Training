<?php
class mainClass{
    public $player = array();
    public function cls()
    {
        array_map(create_function('$a', 'print chr($a);'), array(27, 91, 72, 27, 91, 50, 74));
    }
    public function nPlayerSet($player){
       array_push($this->player,$player);  //jika array tidak kosong makan push array
    }  
    public function validateInput($input){
        if(!isset($input)){
            throw new exception("Input tidak boleh kosong !, silahkan tekan sembarang tombol.");
            fgets(STDIN);
        }
        return $input;
    }
    public function disHome(){
        $this->cls();
        echo "=====================================\n";
        echo "    Welcome to the Battel Arena\n";
        echo "-------------------------------------\n";
        echo "Descripotion :\n";
        echo "1. type \"new\" to create a character\n";
        echo "2. type \"start\" to begin the fight \n";
        echo "-------------------------------------\n";
        echo "Current Player :".count($this->player)."\n";
        if(count($this->player)>0){
            foreach($this->player as $val)
            {
            echo "- ".$val['name']."\n";
            }
        }else{
            echo "-#\n";    
        }
        
        echo "*Max player 2 or 3\n";
        echo "-------------------------------------\n";
        echo "input : ";
        return $input = trim(fgets(STDIN));
    }

    public function disNewChar(){
        $this->cls();
        echo "=====================================\n";
        echo "    Welcome to the Battel Arena\n";
        echo "-------------------------------------\n";
        echo "Descripotion :\n";
        echo "1. type \"new\" to create a character\n";
        echo "2. type \"start\" to begin the fight \n";
        echo "-------------------------------------\n";
        echo "Put Player Name :";
        echo "\n-\n";
        echo "*Max player 2 or 3\n";
        $input = trim(fgets(STDIN));
        return $input;
    }
}

class player{
    private $name;
    private $mana;
    private $blood;

    public function __construct($name,$mana,$blood){
        $this->name = $name;
        $this->mana = $mana;
        $this->blood = $blood;
    }
    public function setName($name){ $this->name = $name;}   //untuk mengambil set nama player
    public function getName(){ return $this->name;}    //untuk mengambil get nama player
    public function setMana($mana){ $this->mana = $mana;}   //untuk mengambil set nama player
    public function getMana(){ return $this->mana;}    //untuk mengambil get mana player
    public function setBlood($blood){ $this->blood = $blood;}   //untuk mengambil set nama player
    public function getBlood(){ return $this->blood;}  //untuk mengambil get hp player    
    public function decreaseMana(){
        $this->mana = $this->mana-10;
    }
    public function decreaseBlood(){
        $this->blood = $this->blood-25;
    }
}
?>