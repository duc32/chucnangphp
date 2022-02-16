<?php
    include "connect.php";

    session_start();

   if(isset($_SESSION['myss'])){
    header("Location: index.php");

   }

    if(isset($_POST["btn"])){

      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $sql = "SELECT * FROM thanhvien WHERE tendn = '$user' and pass = '$pass' ";
      $result =mysqli_query($conn,$sql);
           if (mysqli_num_rows($result) == 1 )
           {
            $_SESSION['myss'] = "abc";
           header("Location: index.php");
           }else{
             echo "tk mk sai";
           }

    }

?>





<form action = "login.php" method ="post">
  <p>username</p>
  <input type = "text" name = "user">

  <p>pass</p>
  <input type = "password" name = "pass">

  <br>
  <br>
  <br>
  <button name = "btn">dang nhap </button>
  <button name = "btn2">
<a href = "dangky.php">dangky </a>
  </button>



</form>