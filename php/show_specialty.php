<?php require_once"conn.php" ?>
<?php
$sql = 'SELECT * FROM specialty';
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
