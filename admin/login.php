<?php
require_once('../includes/connect.php');

session_start();
$query = "SELECT * FROM USER WHERE username = ?"; 
$stmt = $connection->prepare($query);
$stmt->bindParam(1, $_POST['username'], PDO::PARAM_STR);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && $_POST['password'] === $user['password']) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: project_list.php");
    exit();
} else {
    header("Location: login_form.php");
}