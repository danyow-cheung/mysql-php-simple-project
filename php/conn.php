<?php
$conn = new mysqli("localhost:3306","root","root","jxgl");
if ($conn->connect_error){
    die("连接失败".$conn->connect_error);
}
if($conn->query("SET NAMES UTF-8") == TRUE){
    echo "连接到数据库";
}
?>
