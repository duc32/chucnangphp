<?php
      include "connect.php";
      if (isset($_POST['btn'])){
         $id = "";
         $user = $_POST['user'];
         $pass = $_POST['pass'];
         $lv = 2;
         $sql = "INSERT INTO thanhvien (id,tendn,pass,lv)  
         VALUE ('$id','$user','$pass','$lv')  ";
        mysqli_query($conn, $sql);

        header("Location: login.php");

      }


?>


<form  method ="post">
       <p>username</p>
      <input type = "text" name = "user">

  <p>pass</p>
  <input type = "password" name = "pass">
  <br>
  <br>
  <button name = "btn">dang ky </button>

</form>