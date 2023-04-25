<?php
include 'conn.php';
include_once 'handleuser.php';

$id = strlen($_POST['id']) > 0 ? $_POST['id'] : null;
$user_id = $user->id;
$msg = $_POST['msg'];
if ($user_id != "" && $msg != "") {
	$sql = 'INSERT INTO discussion2 (parent_id, user_id, post) VALUES (:id, :userid, :post)';
	$stmt = $pdo->prepare($sql);
	$success = $stmt->execute([
		'id' => $id,
		'userid' => $user_id,
		'post' => $msg
	]);
    echo json_encode(array("statusCode" => 200));
} else {
    echo json_encode(array("statusCode" => 201));
}
$pdo = null;
