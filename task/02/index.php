<?php include('class.php');?>
<html>
  <head>
    <title>Task - 02</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td colspan="2"><center>Menentukan Indeks Nilai</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
          <td>Inputkan Nilai :</td>
          <td><input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?>" required/></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <input type="submit" name="proses" value="proses" />
              <input type="reset" name="reset" />
            </center>
          </td>
        </tr>
      </form>
      <?php
      if(isset($_POST['proses'])=='proses'){
        $indeks = new mainClass();
        ?>
        <tr>
          <td colspan="2">
            <center>
              Indeks yang didapat adalah <?php echo $indeks->indeksNilai($_POST['nilai']);?>
            </center>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
    <br />
    <table border="1">
      <tr>
        <td colspan="2"><center>Menentukan Jenis Inputan</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
          <td>Inputkan Karakter :</td>
          <td><input type="text" name="var" maxlength="1" size="7" value="<?php echo isset($_POST['var'])?>" required/></td>
        </tr>
        <tr>
          <td colspan="2">
            <center>
              <input type="submit" name="cek" value="cek" />
              <input type="reset" name="reset" />
            </center>
          </td>
        </tr>
      </form>
      <?php
      if(isset($_POST['cek'])=='cek'){
        $variabel = new mainClass();
        ?>
        <tr>
          <td colspan="2">
            <center>
              Jenis inputan karakter adalah <?php echo $variabel->tipeVariabel($_POST['var']);?>
            </center>
          </td>
        </tr>
        <?php
      }
      ?>
    </table>
  </body>
</html>
