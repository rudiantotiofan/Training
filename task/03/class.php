<?php
class mainClass
{
    public $data;
    public $n = 10;
    public function setData($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10){
        $this->data[0] = $n1;
        $this->data[1] = $n2;
        $this->data[2] = $n3;
        $this->data[3] = $n4;
        $this->data[4] = $n5;
        $this->data[5] = $n6;
        $this->data[6] = $n7;
        $this->data[7] = $n8;
        $this->data[8] = $n9;
        $this->data[9] = $n10;
    }
    public function sortData($data){
        for($i=0; $i<=$this->n-2; $i++)
        {
            for($j=$this->n-2; $j>=$i; $j--)
            {
                if($data[$j]> $data[$j+1]){
                    $temp= $data[$j+1];
                    $data[$j+1]= $data[$j];
                    $data[$j]= $temp;
                }
            }
        }
        return $data;
    }

    public function tampilHasil(){
        $hasil = $this->sortData($this->data);
        echo '<tr><td>Hasil Sorting :</td><td>';
        for($i=0;$i<$this->n;$i++){
            echo '<input type="number" value="'.$hasil[$i].'" size="1" readonly> ';
        }
        echo '</td></tr>';
    }
}

   
?>
