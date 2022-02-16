<?php

include "connect.php";

       $id = $_GET['id'] ;
      $sql = " SELECT * FROM sanpham WHERE id = " .$id    ;

      $query = mysqLi_query($conn , $sql);

      $row = mysqLi_fetch_array($query);


      // khi nhan edit

      if (isset ($_POST['btn'])){
        $name = $_POST['name'] ;
        $img = $_FILES['file']['name'];


        $name_img = $_FILES['file']['tmp_name'];

        $gia =$_POST['gia'] ;
        $baohanh =$_POST['baohanh'];

        $sql = "UPDATE sanpham SET tensp = '$name',
                                                         anh = '$img',
                                                         gia = '$gia',
                                                         baohanh = '$baohanh'
                   WHERE id =" . $id;

           mysqLi_query($conn, $sql);
           move_uploaded_file($name_img ,  'img/product/'  . $img);
           header("Location: product.php");


      }

?>



<h1> San Pham <?php echo $row['tensp'] ?></h1>

<form method = "post" enctype = "multipart/form-data">

         <p> Ten sp  </p>
         <input type = "text" name = "name" value = "<?php echo $row['tensp'] ?>">

         <p> Img</p>
         <img src = "img/product/<?php echo $row['anh'] ?>"   width ="50" height ="50">
         <input type = "file" name = "file"  >

         <p> Gia </p>
         <input type = "text" name = "gia" value = "<?php echo $row['gia'] ?>">

         <p> Bao hanh </p>
         <input type = "text" name = "baohanh" value = "<?php echo $row['baohanh'] ?>">

        <br><br>
         <button name = "btn"> Edit </button>




</form>