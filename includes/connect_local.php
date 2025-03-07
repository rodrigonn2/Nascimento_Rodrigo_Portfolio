<?php
//$connection = new mysqli('localhost','root','root','nascimento_rodrigo_portfolio');//
$dsn = "mysql:host=localhost;dbname=nascimento_rodrigo_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'root', 'root');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}

?>