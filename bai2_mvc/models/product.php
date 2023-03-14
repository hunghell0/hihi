<?php 
require_once 'models/db.php';
function getProduct(){
 $sql = "select * from product";
 return getData($sql);
}
function addNv1($name,$price){
    $sql = "insert into product(name, price) VALUES ('$name','$price')";
    getData($sql,false);
}
function deleteNv1($id){
    $sql = "delete from product where id='$id'";
    getData($sql,false);
}
?>  