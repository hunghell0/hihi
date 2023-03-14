<?php
  require_once "models/product.php";
    function listProduct(){
        $products = getProduct();
        include_once 'views/product/list.php';
    }
    function addProduct(){
        return "day la chuc nang them";

    }
    function addNv(){
      if(isset($_POST['sbfrom'])){
        $product_name = $_POST['name'];
        $price = $_POST['price'];
        addNv1($product_name,$price);
        header("location:?url=/");   
      }
      include_once 'views/product/addProduct.php';
    }
    function deleteNv(){
      if(isset($_GET['id'])){
        $id = $_GET['id'];
        deleteNv1($id);
        header("location:?url=/");       
      }
      include_once 'views/product/list.php';

    }
 ?>   