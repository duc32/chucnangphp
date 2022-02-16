<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>


<?php


      include "connect.php";
      $sql = " SELECT * FROM sanpham";
      $result =  mysqLi_query($conn, $sql);
      while (          $row =mysqLi_fetch_array($result) 
      ){

        ?>
        <br>
           <tr>

           <td> <?php echo $row['id'] ?> </td>
           <td> <?php echo $row['tensp'] ?> </td>
           <td >  <img width ="80" height ="80" src = img/product/<?php echo $row['anh'] ?>>  </td>
           <td>  <?php echo $row['gia'] ?></td>
           <td> <?php echo $row['baohanh'] ?> </td>
              <a href = "delete.php?id=<?php echo $row['id']  ?>">xoa </a>
              <a href = "edit.php?id=<?php echo $row['id']  ?>">sua </a>

          </tr>




<?php
     };
     ?>
     <br>
     <br>
    <a href = "add.php">them</a>
</body>
</html>