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
    <title>demo Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../mobile/style.css">
    <style>
        .duoihead{
            background: yellow;
        }
        .container-fluid{
            padding: 0;
        }
        button{
        margin-right: 5px;
    }
    .footer1{
        border-top: 1px solid black;
        margin-top: 5%;
    }
    .container{
        padding-top: 20px;
    }
    </style>
</head>
<body>
    <div class="header">
        <div class="container-fluid">
        <div class="duoihead">
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
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
                </div>
        </div>
    </div>

   <?php
   $products = new products;
   if(isset($_GET['n']))
   {
    $manu_name = $_GET['n'];
   }
   else
   {
        $manu_name = "";
        echo "<strong> khong tim thay san pham </strong>";
   }
   $getProductManuName = $products->getProductManuName($manu_name);
   //var_dump($getAllProducts);
   ?>
   <div class="container">
        <div class="row">
<?php
    foreach($getProductManuName as $key=>$value)
    { ?>
        <div class="col-md-3">
                <?php
                   echo "<img src='images/".$value['image']."'> <br>";                                     
                   echo "<a href='detail.php?p=".$value['id']."'><h3>".$value['name']."</h3></a> <br>";
                   echo "Giá: ".$value['price']."đ <br>";                                          
                   echo "<a href='#' class='cart'><h5>ADD to cart</h5></a> <br>";         
                ?>
        </div>        
    <?php }  ?>
</body>
</html>