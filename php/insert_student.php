<?php require_once"conn.php"

?>
<?php
//接受页面变量
$json_raw = file_get_contents("php://input");
$data = json_decode($json_raw, true);
$sno = $data['sno'];
$sname = $data['sname'];
$sbirth = $data['sbirth'];
$ssex = $data['ssex'];
$zno = $data['zno'];
$sclass = $data['sclass'];
$sql = "INSERT INTO student(sno,sname,ssex,sbirth,sclass,zno) VALUES ('$sno','$sname','$ssex','$sbirth','$sclass','$zno');";
//插入数据库模板
if ($conn->query($sql) == TRUE)
{
    echo"200";
}
else
{
    echo"添加失败!".$conn->error;
}
$conn->close();
?>
