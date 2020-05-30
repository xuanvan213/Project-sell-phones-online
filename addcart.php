<?php

session_start();

require "./config/database.php";
require "./models/db.php";
require "./models/products.php"; 
require "./models/manufactures.php";
    if(isset($_GET["id"]))
    { 
        $id= $_GET["id"];
        $products = new products;          
        $getProductsById = $products->getProductsById($id);
        if(isset($_SESSION["cart"]))
        { 
            //kiem tra lan thu hai mua hang da co id trong phan tu mang chua 
            $cart = $_SESSION["cart"];
            if(array_key_exists($id, $cart)){
                $cart[$id]= array(
                    "soluong"=>(int)$cart[$id]["soluong"]+1,
                    "price"=>$getProductsById[0]["price"],
                    "name"=>$getProductsById[0]["name"],
                    "image"=>$getProductsById[0]["image"]);                 
            }
            else{
                $cart[$id]= array(
                    "soluong"=>1,
                    "price"=>$getProductsById[0]["price"],
                    "name"=>$getProductsById[0]["name"],
                    "image"=>$getProductsById[0]["image"]);
            }
        }
        else{
            //lan dau tien mua hang
            $cart[$id]= array(
                "soluong"=>1,
                "price"=>$getProductsById[0]["price"],
                "name"=>$getProductsById[0]["name"],
                "image"=>$getProductsById[0]["image"]);
        }
        $_SESSION["cart"] = $cart;
    }
    else{
        //quay ve trang chu
    }
    header("location: listcart.php");

    // header('location: '. $_SERVER['HTTP_REFERER']);
