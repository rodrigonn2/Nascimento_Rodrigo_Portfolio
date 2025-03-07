<?php
// Incluir arquivo de conexão PDO
require_once("includes/connect.php");

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Variáveis de entrada
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Erros de validação
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

// Se houver erros de validação, retornamos diretamente em formato JSON
if (!empty($errors)) {
    echo json_encode(array("errors" => $errors));
    exit();
}

// Preparação da query e execução da inserção no banco de dados
$sql = "INSERT INTO tbl_users (user_name, user_email, user_phone, user_message) 
        VALUES (:name, :email, :phone, :message)";

$stmt = $connection->prepare($sql);

// Ligando os parâmetros aos valores fornecidos
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':message', $message);

// Executando a query
$stmt->execute();

// Retorno de sucesso após inserção
echo json_encode(array("message" => "Form submitted. Thank you for your interest!"));
?>