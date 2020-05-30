<?php
    require "./config/database.php";
    require "./models/db.php";
    require "./models/products.php"; 
    require "./models/manufactures.php";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../mobile/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style>
    img{
      width: 100%;
    }
    h5{
        background: lightblue;
        padding: 5px; 
        margin-right: 80%;
        text-align: center;
        border-radius: 20px;
    }
    .navbar-expand-sm .navbar-nav .nav-link {
                    color: black;
                    text-align: center;
                    padding: 17px;
    }     
    p{
        color: #5f5912;
    font-weight: bold;
    font-size: larger;
}          
  </style>
</head>
<body>
<div class="header">
        <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    <a href="index.php"><h1>Nhóm 12</h1></a> 
                    </div>
                    <div class="col-md-9">
                        <nav class="navbar navbar-expand-sm ">            
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                            <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <?php
                                                  $manufactures = new manufactures;
                                                  $getAllManu = $manufactures->getAllManu();                                             
                                                  foreach ($getAllManu as $value) { ?>
                                                        <li class="nav-item">
                                                         <a class="nav-link" href="products.php?n=<?php echo $value['manu_name'];?>"><?php echo $value['manu_name']; ?></a>
                                                        </li>
                                                 <?php }  ?>   
                                </ul>
                                <form action="search.php" class="form-inline my-2 my-lg-0" method="post">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search"  id="key" name="key">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>                  
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
        </div>
    </div>
    <?php
      
        $products = new Products;
        $id = $_GET['p'];
        $getProductsById = $products->getProductsById($id);
     ?>
        <div class="container">
        <div class="row">
            <div class="col-md-3">
            <?php
                echo "<img src='images/".$getProductsById[0]['image']."'> <br>";
            ?>
            </div>
            <div class="col-md-9">
            <?php
                echo "<p>".$getProductsById[0]['name']."</p> <br>";
                echo "Giá: ".$getProductsById[0]['price']."đ <br>";
                echo $getProductsById[0]['description']."<br>";       
                echo "<a href='#'><h5>ADD to cart</h5></a> <br>";          
            ?>
        </div>
    </div>
    </div>
    <a href="#"><i class="fas fa-angle-up"></i> </a>
</body>
</html>


