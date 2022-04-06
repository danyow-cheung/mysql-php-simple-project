<?php require_once"conn.php" ?>
<?php
//接受页面变量
$json_raw = file_get_contents("php://input");
$data = json_decode($json_raw, true);
$username = $data['username'];
$password = $data['password'];
$sql = "INSERT INTO admin(username,password)VALUES ('$username','$password');";
//插入数据库模板
if ($conn->query($sql) == TRUE)
{
    echo"200";
}
else
{
    echo"添加失败！".$conn->error;
}
$conn->close();
?>
