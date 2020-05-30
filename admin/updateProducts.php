<?php
 require "../config/database.php";
 require "../models/db.php";
 require "../models/products.php"; 
 require "../models/manufactures.php"; 
 require "../models/protype.php";

$products = new products;
if(isset($_GET['p']))
{
    $id = $_GET['p'];
    $name = $_POST['name'];
    $image = $_FILES['fileUpload']['name'];
    $typeid= $_POST['type_id'];
    $manuid = $_POST['manu_id'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image2 = $_POST['imgs'];
}



    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if(!empty($image))
    {
        move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
        $updatesProducts = $products->updatesProducts($name,$price,$image,$description,$manuid,$typeid,$id);
    }
    else
    {
        $updatesProducts_2 = $products->updatesProducts_2($name,$price,$description,$manuid,$typeid,$id);
    }
   header("location:./indexAdmin.php");

