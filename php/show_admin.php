<?php require_once"conn.php" ?>
<?php
//构成sql语句
$sql = 'SELECT username, password FROM admin';
$result = $conn->query($sql);
$results = array();
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        $results[] = $row;
    }
}
echo json_encode($results);
$conn->close();
?>
