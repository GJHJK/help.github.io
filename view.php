<?php
include 'conn.php';
$data = array();

$sort = $_GET["sortOption"];
$sql = "SELECT d.*, u.username, p.picture FROM discussion d JOIN users u ON u.id = d.user_id LEFT JOIN pictures p ON p.id = d.user_id GROUP BY d.id ORDER BY d.date $sort";
$result = $pdo->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$pdo = null;
exit();



