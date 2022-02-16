<?php
 
    include  "connect.php";
    session_start();

    if (!isset($_SESSION['myss'])){
        header("Location: login.php");
        
    }

  

   
  
    if(isset($_POST['btn1'])){
        $nd  = $_POST['nd'];
    }else{
       echo $nd = false;
    };
    $sql = " SELECT * FROM sanpham WHERE tensp LIKE '%$nd%'  ";
    $result = mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_array($result)){
        echo $row['tensp'];
        ?>
          <img width ="80" height ="80" src = img/product/<?php echo $row['anh'] ?>>
          <?php
        echo $row['gia'];
        echo $row['baohanh'];
  }


?>

<h1>Trang chu </h1>
<a href = "logout.php">
  <button type = "submit" name = "btn">Dang xuat</button>
</a>




<h1> Tim Kiem</h1>

<form method = "post">
      <input type = "text" name = "nd">
      <button type ="submit" name = "btn1">tim kiem </button>

</form>