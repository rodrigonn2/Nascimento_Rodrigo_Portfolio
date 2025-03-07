<?php
require_once('../includes/connect.php');

$project_id = $_GET['id'];  
$query = "DELETE FROM PROJECTS WHERE ID = ?";
$stmt = $connection->prepare($query);
$result = $stmt->execute([$project_id]);
header('Location: project_list.php');
exit;
?>