<?php
//$connection = new mysqli('localhost','root','root','nascimento_rodrigo_portfolio');//
$dsn = "mysql:host=localhost;dbname=exqgt142_portfolio_rodrigo;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'exqgt142_guest_rodri', 'Guest@2025');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}

?>