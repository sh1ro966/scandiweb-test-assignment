<?php
$sku=$_POST['sku'];
$name=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$height=$_POST['height'];
$width=$_POST['width'];
$length=$_POST['length'];
$weight=$_POST['weight'];

if($sku and $name and $price and $size){
$conn= new mysqli("localhost","...","...","...");
$sql="INSERT INTO products SET sku='$sku', name='$name', price='$price $', info='Size: $size MB'";

$conn->query($sql);
mysqli_close($conn);
header('Location: index.php');
die();
}

if ($sku and $name and $price and $height and $width and $length) {
$conn= new mysqli("localhost","...","...","...");
$sql="INSERT INTO products SET sku='$sku', name='$name', price='$price $', info='Dimension: $height x $width x $length'"; 

$conn->query($sql);
mysqli_close($conn);
header('Location: index.php');
die();
}

if ($sku and $name and $price and $weight) {
$conn= new mysqli("localhost","...","...","...");
    $sql="INSERT INTO products SET sku='$sku', name='$name', price='$price $', info='Weight: $weight KG'"; 

$conn->query($sql);
mysqli_close($conn);
header('Location: index.php');
die();
    }

 ?>