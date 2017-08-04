<?php 
include('class.php');
$stream = new mainClass();
if(isset($_POST['simpan'])=='simpan'){
  $data = $_POST['data'];
  $stream->simpanData($data);
}
?>
<html>
  <head>
    <title>Task - 05</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td colspan="2"><center>Binary File pada php</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
          <td>Data binary :</td>
          <td>
            <textarea rows="10" cols="40" name="data">
              <?php echo $stream->getData();?>
            </textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <input type="submit" name="simpan" value="simpan"/>
              <input type="reset" name="reset" />
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $stream->cekBinaryData();?></td>
        </tr>
      </form>
    </table>
  </body>
</html>
