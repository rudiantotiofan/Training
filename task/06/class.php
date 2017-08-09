<?php
class mainClass
{   
    public function cekUrl($url){
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new Exception('<tr><td colspan="2">Format Url Yang Anda Masukan Salah !!</td></tr>');
        }
        return $url;
    }

    public function downloadFile($url,$path){
        try{
            $url = $this->cekUrl($url); //validasi url
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $data = curl_exec($ch);
            curl_close($ch);
            $filename = basename($url); // nama file

            $fp = fopen("downloads/".$filename, 'w');
            fwrite($fp, $data);
            fclose($fp);
            echo '<tr><td colspan="2">File telah disimpan pada folder download dengan nama '.$filename.'</td></tr>';
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>