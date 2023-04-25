<?php

include_once 'conn.php';
ini_set('session.use_trans_sid', false);
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

    header("Location: /login");
} else {
    // header("Location: home");
}

// fetch user data using pdo 
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => $_SESSION['id']]);
$user = $stmt->fetch(PDO::FETCH_OBJ);

// create variable to store user data
$username = $user->username;

// profile picture
$sql = 'SELECT * FROM pictures WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $user->id]);
$pic = $stmt->fetch(PDO::FETCH_OBJ);
$picture = !empty($pic) && strlen($pic->picture) > 0 ? $pic->picture : 'avatar.jpg';
