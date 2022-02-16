<?php

        include "connect.php";
        
        if (   isset($_POST['btn'])){
           $name = $_POST['name'] ;
           $img = $_FILES['file']['name'];


           $name_img = $_FILES['file']['tmp_name'];

           $gia =$_POST['gia'] ;
           $baohanh =$_POST['baohanh'];


           $sql = "INSERT INTO sanpham (tensp,anh,gia,baohanh)
           VALUE ('$name', '$img', '$gia','$baohanh')
           ";

           mysqLi_query($conn, $sql);
           move_uploaded_file($name_img ,  'img/product/'  . $img);
           header("Location: product.php");



        }

?>

<form action = "add.php" method = "post" enctype ="multipart/form-data">

       <p> Name </p>
       <input type = "text" name = "name">


       <p> Img</p>
       <input type = "file" name = "file">


       <p> Gia</p>
       <input type = "text" name = "gia">

       <p> Baohanh </p>
       <input type = "text" name = "baohanh">
       <br>

       <button id ="submit" name = "btn"> Gui </button>



</form>