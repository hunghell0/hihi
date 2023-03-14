<?php
const DBNAME = "we17312";
const DBUSER = "root";
const DBPASS = "";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" . DBHOST
        . ";dbname=" . DBNAME
        . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}
#nếu như không truyền gì thì sẽ dùng cho câu truy vấn có dạng select 
# nếu truyền getall = false sẽ dùng cho câu truy vấn có dạng thêm sửa xóa
function getData($query, $getAll = true){
    $conn = getConnect();

    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($getAll){
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}
?>