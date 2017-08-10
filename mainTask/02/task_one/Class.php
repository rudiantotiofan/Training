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
    public function updateStatus($player){
       foreach($this->player as $key=>$val)
        {
            if($this->player[$key]['name']==$player['name']){
                $this->player[$key]['mana'] = $player['mana'];
                $this->player[$key]['blood'] = $player['blood'];
                break;
            }
        }
    }  
    public function validateInput($input){
        if(empty($input)){
            throw new exception("Input can't be empty !, Press any button.");
        }
        return $input;
    }
    public function validatePlayerName($input){
        foreach($this->player as $val)
        {
            if($val['name']==$input){
                throw new exception("Player already exist !, Press any button.");
                break;
            }
        }
        return $input;
    }
    public function validateExistPlayer($input){
        $check = false;
        foreach($this->player as $val)
        {
            if($val['name']==$input || $input=="exit"){
                $check = true;
                if($val['mana']==0 || $val['blood']==0){
                    throw new exception("Player is dead, choose another player !, Press any button.");
                }
            }
        }
        if($check==false){
            throw new exception("Player not found !, Press any button.");
        }else{return $input;}
    }
    public function survivePlayer(){
        $count = 0;
        foreach($this->player as $val)
        {
            if(($val['mana']>0) && ($val['blood']>0)){
                $count++;
            }
        }
        return $count;
    }
    public function winnerPlayer(){
        foreach($this->player as $val)
        {
            if(($val['mana']>0) && ($val['blood']>0)){
                return $val['name'];
            }
        }
        return "not fond";
    }
    public function isDeath($player){
        foreach($this->player as $val)
        {
            if($val['name']==$player['name']){
                if(($val['mana']==0) || ($val['blood']==0)){
                    return true;
                    break;
                }
            }
        }
        return false;
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
        echo "Player Exist : \n";
        if(count($this->player)>0){
            foreach($this->player as $val)
            {
            echo "- ".$val['name']."\n";
            }
        }else{
            echo "-#\n";    
        }
        echo "-------------------------------------\n";
        echo "Put Player Name :";
        $input = trim(fgets(STDIN));
        return $input;
    }
    public function disBattle($name){
        $this->cls();
        echo "=====================================\n";
        echo "    Welcome to the Battel Arena\n";
        echo "-------------------------------------\n";
        echo "Player Status : \n";
        if(count($this->player)>0){
            foreach($this->player as $val)
            {
                if(($val['mana']==0) || ($val['blood']==0)){ $stat = " (Your Dead)";}else{ $stat = "";}
                echo "- [".$val['name']."] : mana = ".$val['mana'].", blood = ".$val['blood']."".$stat."\n";
            }
            echo "-------------------------------------\n";
            echo "Player role : ".$name."\n";
            echo "-------------------------------------\n";
            echo "Attack player  : ";
        }else{
            echo "- No character found !, Press any button \n";    
        }
        return trim(fgets(STDIN));
    }
    public function dispLogAttack($info){
        echo "-------------------------------------\n";
        echo "Attack log :\n";
        echo " Basic Demage : ".$info['basic']."\n";
        echo " Miss  Demage : ".$info['miss']."\n";
        echo " Crit  Demage : ".(($info['crit']/$info['basic'])*100)." % \n";
        echo "-------------------------------------\n";
        echo "Press any button to continue \n";    
        trim(fgets(STDIN));
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
    public function reset($mana,$blood){
        $this->mana = $mana;
        $this->blood = $blood;
    }
    public function setName($name){ $this->name = $name;}   //untuk mengambil set nama player
    public function getName(){ return $this->name;}    //untuk mengambil get nama player
    public function setMana($mana){ $this->mana = $mana;}   //untuk mengambil set nama player
    public function getMana(){ return $this->mana;}    //untuk mengambil get mana player
    public function setBlood($blood){ $this->blood = $blood;}   //untuk mengambil set nama player
    public function getBlood(){ return $this->blood;}  //untuk mengambil get hp player    
    public function getPlayerStat(){
        return array("name"=>$this->name,"mana"=>$this->mana,"blood"=>$this->blood);
    }
    public function decreaseBlood($blood){
        $this->blood = $this->blood - $blood;
        if($this->blood < 0){$this->blood = 0;}
    }
    public function demageAttack(){
        $this->mana = $this->mana-5;
        if($this->mana < 0){$this->mana = 0;}
        return array("basic"=>20,"crit"=>rand(0,10),"miss"=>rand(0,1));
    }
}
?>