<?php
class mainClass
{
    public function cekBinaryData(){
        return "Filename data.bin had ".filesize("data.bin")." bytes written\n";
    }
    
   public function getData(){
        $handle = fopen('data.bin', 'rb');
        if (FALSE === $handle) {
            exit("Failed to open file");
        }
        $contents = '';
        while (!feof($handle)) {
            $contents .= fread($handle, 8192);
        }
        fclose($handle);
        return $contents;
    }

    function simpanData($string) {
        $fp = fopen('data.bin', 'w');
        if (FALSE === $fp) {
            exit("Failed to open file");
        }
        for ($written = 0; $written < strlen($string); $written += $fwrite) {
            $fwrite = fwrite($fp, substr($string, $written));
            if ($fwrite === false) {
                return $written;
            }
        }
        return $written;
    }
}
?>