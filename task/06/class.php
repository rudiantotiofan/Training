<?php
class mainClass
{   

    public function downloadFile($url,$path){
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

    }
}
?>