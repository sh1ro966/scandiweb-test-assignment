<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/products_style.css">
    <title>Scandiweb Assgiment</title>
</head>
<body>
    <header class="header">
    <div class="container">
                <h1>Product List</h1>
            <div class="header-buttons">
                <button class="header-addBtn"><a href="add_product.html">ADD</a></button>
                <input type="button" id="delete-product-btn" name='delete' value='MASS DELETE' class="header-deleteBtn">
            </div>
        <hr> 
    </div>
    </header>
    <main class="main">
        <div class="container">
        <div class="main-wrapper">
        <?php
    $connect = new mysqli("localhost","root","","scandiweb-assigment");
    $sql = ("SELECT SKU, NAME, PRICE, INFO FROM products ORDER BY SKU;");
    $result=$connect->query($sql);
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        $SKU = $row['SKU'];
        echo "<div class='main-item'>";
        echo "<input type='checkbox' name='checkbox[]' value='.$SKU' class='delete-checkbox'>";
        echo "<div class='item-sku'>".$row['SKU']."</div>";
        echo "<div class='item-name'>".$row['NAME']."</div>";
        echo "<div class='item-price'>".$row['PRICE']."</div>";
        echo "<div class='item-info'>".$row['INFO']."</div>";
        echo "</div>";
      }
    }

    if(isset($_POST['delete'])){

        if(isset($_POST['checkbox'])){
          foreach($_POST['checkbox'] as $deleteid){
            $deleteUser = "DELETE FROM products WHERE SKU=".$deleteid;
            mysqli_query($connect,$deleteUser);
          }
        }
       
      }
    
        
    mysqli_close($connect);
     ?>
        </div>
    <hr>
    <h3>Scandiweb Test Assigment</h3>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>