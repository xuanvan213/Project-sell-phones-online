<?php
 require "../config/database.php";
 require "../models/db.php";
 require "../models/products.php"; 
 require "../models/manufactures.php"; 
 require "../models/protype.php";

$manufactures = new manufactures;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $manu_img = $_FILES["fileUpload"]["name"];
	$manu_name = $_POST['manu_name'];  
}
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
if(!empty($manu_img))
{
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
    $updateManufactures = $manufactures->updateManufactures($manu_name, $manu_img, $id);
}
else
{
    $updateManufactures2 = $manufactures->updateManufactures2($manu_name, $id);
}
header("location: ./manufactures.php");