<?php
$url = isset ($_GET['url']) ? $_GET ['url'] : "/";
switch ($url){
    case '/' :
        require_once 'controllers/productController.php';
        echo listProduct();
        break;
    case 'add-product':
        require_once 'controllers/productController.php';
        addNv();
        break;
    case 'delete-product':
        require_once 'controllers/productController.php';
        deleteNv();
        break;
}

?>