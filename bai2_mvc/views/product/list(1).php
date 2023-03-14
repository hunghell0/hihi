<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
        <td><button onclick="location.href='?url=add-product'">Them</button></td>
        </tr>
        <?php foreach ( $products as $key=>$value) {?>
        
        
        
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['price'];?></td>
            <td><button onclick="location.href='?url=delete-product&id=<?php echo $value['id'];?>'">Xóa</button></td>
            
        </tr>
        
        <?php } ?>
    </table>
</body>
</html>