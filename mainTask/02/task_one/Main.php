<?php 
include("Class.php");
$main = new mainClass();
$player;
$pushPlayer = function($name,$mp,$blood){ return array("name"=>$name,"mp"=>$mp,"blood"=>$blood);};
$counter = 1;
while($input!="exit"){
$input = $main->disHome();
    switch($input){
        case "new": 
            labelNew :
            $playerName = $main->disNewChar();
            try{    
                if($counter>3){
                    throw new exception("maksimum hanya 3 player saja !, silahkan tekan sembarang tombol.");
                    fgets(STDIN);
                }else{
                    $playerName = $main->validateInput($playerName);
                    $player[$playerName] = new player($playerName,40,100);
                    $main->nPlayerSet($pushPlayer($player[$playerName]->getName(),$player[$playerName]->getMana(),$player[$playerName]->getBlood()));
                    $counter++;
                    fgets(STDIN);
                }
            }catch(exception $e){
                echo $e->getMessage();
            }
            break;
        case "start": break;
    }
}


?>