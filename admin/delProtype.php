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
 $protypes = new protypes;
 $delProtype = $protypes->delProtype($id);
 
header("location:./protype.php");