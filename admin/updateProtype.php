<?php
 require "../config/database.php";
 require "../models/db.php";
 require "../models/products.php"; 
 require "../models/manufactures.php"; 
 require "../models/protype.php";

$protypes = new protypes;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $type_img = $_FILES["fileUpload"]["name"];
	$type_name = $_POST['type_name'];  
}
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
if(!empty($type_img))
{
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
    $updateProtype = $protypes->updateProtype($type_name, $type_img, $id);
}
else
{
    $updateProtype2 = $protypes->updateProtype2($type_name, $id);
}

header("location: ./protype.php");