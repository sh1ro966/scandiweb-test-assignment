<?php
$SKU=$_POST['SKU'];
$name=$_POST['name'];
$price=$_POST['price'];
$size=$_POST['size'];
$height=$_POST['height'];
$width=$_POST['width'];
$length=$_POST['length'];
$weight=$_POST['weight'];

if($SKU and $name and $price and $size){
$conn= new mysqli("localhost","root","","scandiweb-assigment");
$sql="INSERT INTO Products SET SKU='$SKU', name='$name', price='$price $', info='Size: $size MB'";

$conn->query($sql);
mysqli_close($conn);
header('Location: add_product.html');
die();
}

if ($SKU and $name and $price and $height and $width and $length) {
$conn= new mysqli("localhost","root","","scandiweb-assigment");
$sql="INSERT INTO Products SET SKU='$SKU', name='$name', price='$price $', info='Dimension: $height x $width x $length'"; 

$conn->query($sql);
mysqli_close($conn);
header('Location: add_product.html');
die();
}

if ($SKU and $name and $price and $weight) {
    $conn= new mysqli("localhost","root","","scandiweb-assigment");
    $sql="INSERT INTO Products SET SKU='$SKU', name='$name', price='$price $', info='Weight: $weight KG'"; 

$conn->query($sql);
mysqli_close($conn);
header('Location: products.php');
die();
    }

 ?>