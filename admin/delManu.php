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
 $manu = new manufactures;
 $delProducts = $manu->delManufactures($id);

 header("location:./manufactures.php ");

