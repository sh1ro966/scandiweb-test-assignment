<?php
$connect = new mysqli("localhost","root","","scandiweb-assigment");
if (isset($_POST['delete'])){
      $chkarr = $_POST['checkbox'];
      foreach($chkarr as $SKU) {
        mysqli_query($connect, "DELETE FROM products WHERE SKU='$SKU'");
      }
      header('Location: products.php');
    die();
  } 
     mysqli_close($connect);  
?>