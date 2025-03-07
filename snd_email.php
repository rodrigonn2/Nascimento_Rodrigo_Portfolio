<?php

require_once("includes/connect.php");

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';


$errors = array();

if (empty($name)) {
    $errors[] = "Name field is empty.";
}

if (empty($email)) {
    $errors[] = "Email field is empty.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "\"" . $email . "\" is not a valid email address.";
}

if (empty($phone)) {
    $errors[] = "Phone field is empty.";
}

if (empty($message)) {
    $errors[] = "Message field is empty.";
}


if (!empty($errors)) {
    echo json_encode(array("errors" => $errors));
    exit();
}


$query = "INSERT INTO CONTACT (NAME, EMAIL, PHONE, MESSAGE) VALUES (?, ?, ?, ?)";


$stmt = $connection->prepare($query);


$stmt->bindParam(1, $name, PDO::PARAM_STR);
$stmt->bindParam(2, $email, PDO::PARAM_STR);
$stmt->bindParam(3, $phone, PDO::PARAM_STR);
$stmt->bindParam(4, $message, PDO::PARAM_STR);


$stmt->execute();


$stmt = null;


echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
?>