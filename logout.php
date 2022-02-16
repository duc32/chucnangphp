<?php

      session_start();
      if (isset($_SESSION['myss'])){
          unset($_SESSION['myss']);
      }
      header("Location: login.php");


?>