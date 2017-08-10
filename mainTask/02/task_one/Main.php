<?php 
include("Class.php");
$main = new mainClass();
$player;
//$pushPlayer = function($name,$mp,$blood){ return array("name"=>$name,"mp"=>$mp,"blood"=>$blood);};
$counter = 1;
while($input!="exit"){
home:    
$input = $main->disHome();
    switch($input){
        case "new":
            $playerName = $main->disNewChar(); //get player display
            try{    
                if($counter>3){
                    throw new exception("has reach maximum slot !, Press any button.");
                }else{
                    $playerName = $main->validatePlayerName(strtolower($main->validateInput($playerName))); //check empty string and exist player name
                    $player[$playerName] = new player($playerName,40,100);
                    $main->nPlayerSet($player[$playerName]->getPlayerStat());
                    $counter++;
                }
            }catch(exception $e){
                echo PHP_EOL."Warning : ".$e->getMessage();
                fgets(STDIN);
            }
            break;
        case "start": 
            try{
                if(count($main->player)<1){
                    throw new exception("create new player first !, Press any button.");
                }else{
                    while($main->survivePlayer()>1){
                        foreach($main->player as $val){
                            try{
                                batle :
                                if($main->isDeath($player[$val['name']]->getPlayerStat())){ //check player stat
                                    //do nothing, just skip the loser
                                }else{ //if player not dead
                                    $input = $main->validateExistPlayer($main->validateInput($main->disBattle($val['name']))); //check empty string and empty player choosen
                                    if($input==$val['name']){
                                        throw new exception("Cant attack your self ! Press any button");
                                    }else{
                                        $demage = $player[$val['name']]->demageAttack(); //get demage from player
                                        $player[$input]->decreaseBlood(($demage['basic']+$demage['crit'])-$demage['miss']);
                                        $main->updateStatus($player[$val['name']]->getPlayerStat()); //update status player
                                        $main->updateStatus($player[$input]->getPlayerStat()); //update status enemy
                                        $main->dispLogAttack($demage);
                                    }
                                }
                            }catch(exception $e){
                                echo PHP_EOL."Warning : ".$e->getMessage();
                                fgets(STDIN);
                                goto batle;
                            }
                            if($main->survivePlayer()==1){
                                echo "The one survive is ".$main->winnerPlayer();
                                fgets(STDIN);
                                }
                            if($input=="exit"){goto home; break;}
                        }                
                    }//endwhile
                }

            }catch(exception $e){
                echo PHP_EOL."Warning : ".$e->getMessage();
                fgets(STDIN);
            }
            break;
        case "exit": break;
        default :
            echo PHP_EOL."Undefiend command !, Press any button";
            fgets(STDIN);
    }
}


?>