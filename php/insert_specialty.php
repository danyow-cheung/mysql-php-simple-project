<?php require_once"conn.php" ?>
<?php
//接受页面变量
$json_raw = file_get_contents("php://input");
$data = json_decode($json_raw, true);
$zno = $data['zno'];
$zname = $data['zname'];
$sql = "INSERT INTO specialty(zno,zname) VALUES ('$zno','$zname');";

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
