<?php
$connect = new mysqli("localhost","...","...","...");
if (isset($_POST['delete'])){
    if (!$_POST['checkbox']) {
        echo "<button>ADD</button>";
    }
    else {
  $chkarr = $_POST['checkbox'];
      foreach($chkarr as $SKU) {
        mysqli_query($connect, "DELETE FROM products WHERE SKU='$SKU'");
      }
      header('Location: index.php');
    die();
}
}
     mysqli_close($connect);  
?>