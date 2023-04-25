<?php
include 'conn.php';
include_once 'handleuser.php';

$id = $pdo->quote($_POST['id']);
$user_id = $pdo->quote($user->id);
$msg = $pdo->quote($_POST['msg']);
if ($user_id != "" && $msg != "") {
	$sql = $pdo->query("INSERT INTO discussion (parent_id, user_id, post) VALUES ($id, $user_id, $msg)");
	echo json_encode(array("statusCode" => 200));
} else {
	echo json_encode(array("statusCode" => 201));
}
$pdo = null;
