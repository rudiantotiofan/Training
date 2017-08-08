<?php include('class.php');?>
<html>
  <head>
    <title>Task - 06</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <td colspan="2"><center>Download file dari URL</center></td>
      </tr>
      <form method="post" action="index.php"> 
        <tr>
          <td>Inputkan URL :</td>
          <td><input type="text" name="url" size="50" value="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" required/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" name="download" value="download" />
            <input type="reset" name="reset" />
          </td>
        </tr>
      </form>
    </table>
    <?php
    if(isset($_POST['download'])=='download'){
      $main = new mainClass();
      $main->downloadFile($_POST['url'],"/downloads");
    }
    ?>
  </body>
</html>
