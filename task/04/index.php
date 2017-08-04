<?php include('class.php');?>
<html>
  <head>
    <title>Task - 04</title>
  </head>
  <body>
    <table border="1s">
      <tr>
        <td colspan="2"><center>Kalkulator sederhana</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
          <td>Inputkan Nilai 1 :</td>
          <td><input type="number" name="n1" value="<?php if(isset($_POST['n1'])){ echo $_POST['n1'];}?>" required/></td>
        </tr>
        <tr>
          <td>Inputkan Nilai 2 :</td>
          <td><input type="number" name="n2" value="<?php if(isset($_POST['n2'])){ echo $_POST['n2'];}?>" required/></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="jumlah" value="jumlah" />
            <input type="submit" name="kurang" value="kurang" />
            <input type="submit" name="kali" value="kali" />
            <input type="submit" name="bagi" value="bagi" />
            <input type="reset" name="reset" />
          </td>
        </tr>
      </form>
      <?php 
      $kalkulator = new mainClass();
      $result = 0;
      if(isset($_POST['jumlah'])){
        $result = $kalkulator->penjumlahan($_POST['n1'],$_POST['n2']);
      }
      if(isset($_POST['kurang'])){
        $result = $kalkulator->pengurangan($_POST['n1'],$_POST['n2']);
      }
      if(isset($_POST['kali'])){
        $result = $kalkulator->perkalian($_POST['n1'],$_POST['n2']);
      }
      if(isset($_POST['bagi'])){
        $result = $kalkulator->pembagian($_POST['n1'],$_POST['n2']);
      }
      ?>
      <tr>
        <td>Hasil : </td>
        <td><input type="text" name="hasil" value="<?php echo $result?>" readonly/></td>
      </tr>
    </table>
  </body>
</html>
