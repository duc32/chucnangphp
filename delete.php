<?php
      include "connect.php";

       $id = $_GET['id'] ;


       $sql = " DELETE FROM sanpham WHERE  id ='$id'   ";

       mysqLi_query($conn, $sql);
       header("Location: product.php");
       


?>