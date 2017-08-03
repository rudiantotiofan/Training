<?php include('class.php');?>
<html>
  <head>
    <title>Task - 02</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td colspan="2"><center>Menghitung Luas & Keliling Lingkaran</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
        <td>Inputkan Nilai R :</td>
        <td><input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?>" required/></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="hitung" value="hitung" />
          <input type="reset" name="reset" />
        </td>
      </tr>
      </form>
      <?php 
      if(isset($_POST['hitung'])=='hitung'){
        $lingkaran = new mainClass();
        ?>
        <tr>
          <td colspan="2">Keliling Lingkaran adalah <?php echo $lingkaran->Keliling($_POST['nilai'])?></td>
        </tr>
        <tr>
          <td colspan="2">Luas Lingkaran adalah <?php echo $lingkaran->Luas($_POST['nilai'])?></td>
        </tr>
        <?php
      }
      ?>
    </table>
  </body>
</html>
