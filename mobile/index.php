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
    <title>index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../mobile/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        h5{
            padding: 5px;      
            text-align: center;
            border-radius: 20px;
            color: wheat;
            background: green;
            font-weight: bolder;
            color: white;
            margin: 12px 20%;
        }
        .col-md-3{
            text-align: center;
        }

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
    </div>
   
   <?php
   $products = new Products;
   $getAllProducts = $products->getAllProducts();
   ?>
   <div class="content">

  
    <div class="container">
        <div class="row">
   <?php

    $totalRow = count($products->getAllProducts());
    $perpage = 4;
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else{
        $page = 1;
    }
    $getProducts = $products->getProducts($page, $perpage);

    foreach($getProducts as $key=>$value)
    { ?>
        <div class="col-md-3">
                <?php
                           
                   echo "<a href='detail.php?p=".$value['id']."'><img src='images/".$value['image']."'></a> <br>";                          
                   echo "<a href='detail.php?p=".$value['id']."'><h3>".$value['name']."</h3></a> <br>";
                   echo "Giá: ".$value['price']."đ <br>";                                          
                   echo "<a href='#' class='cart'><h5>ADD to cart</h5></a> <br>";         
                ?>
        </div>        
    <?php }  
     $pagination = $products->pagination($totalRow, $perpage);
     echo $pagination."<br>";?>
    </div>
    <div class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>DO-AN NHÓM 12 </h1>
                    <h3>THÀNH VIÊN NHÓM 12 </h3> 
                    <p class ="ten">  Trần Xuân Văn 
                    <br> Trương Huỳnh Quốc Bảo 
                    <br> Nguyễn Hoàng Long 
                    <br> Phạm Văn Hiếu
                    </p>
                </div>
                <div class="col-md-6">
                    <h4>Contact Us</h4>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Nhập email........">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="mail">Email</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>