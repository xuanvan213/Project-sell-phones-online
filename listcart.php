<?php
session_start();
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
        .tren{
            border-bottom: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 10px 0;
        }
        .navbar-brand p{
        font-size: 30px;
        padding: 5%;
        font-weight: bold;
        color: darkgreen;
        }
        .navbar-expand-sm .navbar-nav .nav-link {
            color: black;
            text-align: center;
            padding: 25px;
        }
        .navbar-expand-sm {
            
            background: yellow;
        }
        .dropdown-item:hover
        {
        background: lightgrey;
        margin: 0;
        }
        .fa-microsoft:before {
        font-size: 25px;
        }
        .up{
            background: lightgrey;
            display: flex;
        }
        .rightup{
            right: 7%;
            z-index: 999;
            position: absolute;
            
        }
        .rightup, .left{
            padding: 10px 25px; 
        }
        .register{
            display: flex;
        }
        .login{
            padding-left: 10px;
        }
        .goup {
            right: 5%;
            z-index: 999;
            position: fixed;
            background: #f65a3a;
            padding: 15px;
            font-size: 40px;
            color: white;
            bottom: 10%;
            border-radius: 40px;
        }
        h5:hover {
            background: orangered;

        }
        a:hover{
            text-decoration: none;
        }
        .col-md-3:hover{
            border: 1px solid;
        }
        img{
            padding-top: 10px;
        }
        .goup {
            right: 5%;
            z-index: 999;
            position: fixed;
            background: #f65a3a;
            padding: 15px;
            font-size: 40px;
            color: white;
            bottom: 10%;
            border-radius: 40px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        img{
            width: 30%;
        }
        table{
            margin-left: 3%;
        }
        .cart{
            padding-left: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <div class="up">
            <div class="left">
                <a href="https://www.facebook.com/profile.php?id=100023914547654"><i class="fab fa-facebook-square"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <span class="hotline">Hotline: 0965882331</span>
            </div>
            <div class="rightup">
                <div class="register mr-auto">
                  <a href="#"> <p>Register</p></a> 
                  <a href="../mobile/login/login.php" class="login" >log in</a>
                  <a href="../mobile/listcart.php"><i class="fas fa-shopping-cart cart"></i></a>
                
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" href="index.php" class="logo"> <p>Sale Phones</p></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="fab fa-microsoft"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laptop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <?php
                            $manufactures = new manufactures;
                            $getAllManu = $manufactures->getAllManu();  
                            $lap = "lt";                                          
                            foreach ($getAllManu as $value) { ?>
                                   
                                    <a class="dropdown-item" href="products.php?n=<?php echo $value['manu_name'];echo $lap;?>"><?php echo $value['manu_name']; ?></a>
                            <?php }   
                            ?>       
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Điện Thoại</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <?php
                            $manufactures = new manufactures;
                            $getAllManu = $manufactures->getAllManu();   
                            $dienthoai = "dt";                                           
                            foreach ($getAllManu as $value) { ?>
                                   
                                    <a class="dropdown-item" href="products.php?n=<?php echo $value['manu_name']; echo $dienthoai; ?>"><?php echo $value['manu_name']; ?></a>
                                  
                            <?php }   
                            ?>      
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tai Nghe</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <?php
                            $manufactures = new manufactures;
                            $getAllManu = $manufactures->getAllManu();   
                            $tainghe = "tn";                                           
                            foreach ($getAllManu as $value) { ?>
                                   
                                    <a class="dropdown-item" href="products.php?n=<?php echo $value['manu_name']; echo $tainghe; ?>"><?php echo $value['manu_name']; ?></a>
                                  
                            <?php }   
                            ?>      
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Máy Tính Bảng</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <?php
                            $manufactures = new manufactures;
                            $getAllManu = $manufactures->getAllManu();   
                            $tablet = "tb";                                           
                            foreach ($getAllManu as $value) { ?>
                                   
                                    <a class="dropdown-item" href="products.php?n=<?php echo $value['manu_name']; echo $tablet; ?>"><?php echo $value['manu_name']; ?></a>
                                  
                            <?php }   
                            ?>      
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form action="search.php" class="form-inline my-2 my-lg-0" method="post">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search"  id="key" name="key">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>                  
                    </form>
            </div>
        </nav>
    </div>
   
   <?php
   $products = new Products;
   $getAllProducts = $products->getAllProducts();
   ?>
   <div class="content">
        
            <?php 
                if(isset($_SESSION["cart"]))
                { 
                    $i = 0;
                    ?>
                    <table>
                        <tr>
                            <th>#id</th>
                            <th>Name</th>
                            <th>image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    <?php
                    foreach($_SESSION["cart"] as $key=>$value)
                    { $i++; ?>
                        <tr>
                            <th><?php echo $i; ?></th>
                            <th><?php echo $_SESSION["cart"][$key]["name"]; ?></th>
                            <th><?php echo "<img src='images/".$_SESSION["cart"][$key]["image"]."' width=30% >" ?></th>
                            <th><?php echo  $_SESSION["cart"][$key]["soluong"]; ?></th>
                            <th><?php echo  $_SESSION["cart"][$key]["price"]; ?></th>
                            <th><?php echo  $_SESSION["cart"][$key]["soluong"] * $_SESSION["cart"][$key]["price"]; ?></th>
                            <th><a href="delcart.php?id='<?php echo $i; ?>'" class="btn btn-danger btn-mini">Delete</a></th>
                        </tr>
                   <?php }
                   ?>
                      </table>
                   <?php }
                else{
                    echo "<h1>Không có sản phẩm nào trong giỏ hàng!!</h1>";
                }
            ?>
     
        <div class="container">  
            <a href="#"><i class="fas fa-angle-up goup"></i> </a>
            
            </div>
            <div class="footer1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 hang">
                            <h6 class="thongtin">Contact Us</h6>
                            <p class ="email"><span><i class="far fa-envelope"></i> </span>tdc_nhom12_backend1<br>@gmail.com</p>
                            <p class ="diachi">Địa chỉ : 53,Võ Văn Ngân, Linh Chiểu, Thủ Đức</p>
                        </div>
                        <div class="col-sm-3 hang">
                            <h6 class="thongtin">Information</h6>
                            <a href="#" class="tenchu">About</a><br>
                            <a href="#" class="tenchu">Our Company</a><br>
                            <a href="#" class="tenchu">Our History</a><br>
                            <a href="#" class="tenchu">Contacts</a>
                            </div>
                            <div class="col-sm-3 hang">
                                <h6 class="thongtin">How can we help</h6>
                                <a href="#" class="tenchu">Order tracking</a> <br>
                                <a href="#" class="tenchu">FAQ</a><br>
                                <a href="#" class="tenchu">Privacy policy</a><br>
                                <a href="#" class="tenchu">Support</a>
                            </div>
                            <div class="col-sm-3 hang">
                                <h6 class="thongtin">Account</h6>
                                <a href="#" class="tenchu">My account</a><br>
                                <a href="#" class="tenchu">Wish list</a><br>
                                <a href="#" class="tenchu">Newsletter</a><br>
                                <a href="#" class="tenchu">My order</a><br>
                            </div>
                        </div>
                    <br>
                    <div class="row">
                    <div class="col-md-6"><br>
                    <br>
                    <h3 class="thongtin">Đồ án Back End1</h3>
                        </div>
                        <div class="col-md-6">
                    <h3 class="thongtin">Các Thành Viên</h3>
                    <p>Nguyễn Hoàng Long</p>
                    <p>Trần Xuân Văn</p>
                    <p>Trương Huỳnh Quốc Bảo</p>
                    <p>Phạm Văn Hiếu</p>
                        </div>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>