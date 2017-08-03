<?php
class mainClass
{
  public function indeksNilai($val){
    $temp = "";
    if($val >= 80){
      $temp = "A";
    }else if(($val >= 65) && ($val < 80)){
      $temp = "B";
    }else if(($val >= 45) && ($val < 65)){
      $temp = "C";
    }else if(($val >= 30) && ($val < 45)){
      $temp = "D";
    }else{
      $temp = "E";
    }
    return $temp;
  }
  public function tipeVariabel($var){
    $result = "";
    if (is_numeric($var)) {
      $result = "Angka";
    } else {
       $result = "Huruf";
    }
    return $result;
  }
}
?>
