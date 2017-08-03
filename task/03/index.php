<?php 
include('class.php');
if(isset($_POST['sorting'])=='sorting')
{
  $sort = new mainClass();
  $sort->setData($_POST['n1'],$_POST['n2'],$_POST['n3'],$_POST['n4'],$_POST['n5'],$_POST['n6'],$_POST['n7'],$_POST['n8'],$_POST['n9'],$_POST['n10']);
}
?>
<html>
  <head>
    <title>Task - 03</title>
    <style>
      input[type="number"] {
        width:50px;
      }
    </style>
  </head>
  <body>
    <table border="1">
      <tr>
        <td colspan="2"><center>Sorting Array</center></td>
      </tr>
      <form method="post" action="index.php">
        <tr>
        <td>Inputkan 10 Nilai :</td>
        <td>
          <input type="number" name="n1" size="1" value="<?php if(isset($_POST['n1'])){ echo $sort->data[0];}?>" required/>
          <input type="number" name="n2" size="1" value="<?php if(isset($_POST['n2'])){ echo $sort->data[1];}?>" required/>
          <input type="number" name="n3" size="1" value="<?php if(isset($_POST['n3'])){ echo $sort->data[2];}?>" required/>
          <input type="number" name="n4" size="1" value="<?php if(isset($_POST['n4'])){ echo $sort->data[3];}?>" required/>
          <input type="number" name="n5" size="1" value="<?php if(isset($_POST['n5'])){ echo $sort->data[4];}?>" required/>
          <input type="number" name="n6" size="1" value="<?php if(isset($_POST['n6'])){ echo $sort->data[5];}?>" required/>
          <input type="number" name="n7" size="1" value="<?php if(isset($_POST['n7'])){ echo $sort->data[6];}?>" required/>
          <input type="number" name="n8" size="1" value="<?php if(isset($_POST['n8'])){ echo $sort->data[7];}?>" required/>
          <input type="number" name="n9" size="1" value="<?php if(isset($_POST['n9'])){ echo $sort->data[8];}?>" required/>
          <input type="number" name="n10" size="1" value="<?php if(isset($_POST['n10'])){ echo $sort->data[9];}?>" required/>
        </td>
      </tr> 
      <tr>
        <td colspan="2">
          <center>
            <input type="submit" name="sorting" value="sorting" />
            <input type="reset" name="reset" value="reset"/>
          </center>
        </td>
      </tr>
      </form>
      <?php 
      if(isset($_POST['sorting'])=='sorting')
      {
        $sort->tampilHasil();
      }
      ?>
    </table>
  </body>
</html>
