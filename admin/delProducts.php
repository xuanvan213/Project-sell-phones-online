<?php
   require "../config/database.php";
   require "../models/db.php";
   require "../models/products.php"; 
  require "../models/manufactures.php"; 
  require "../models/protype.php";

 if(isset($_GET['id']))
 {
    $id = $_GET['id'];
 }
 $products = new products;
 $delProducts = $products->delProducts($id);
header("location:./indexAdmin.php");

