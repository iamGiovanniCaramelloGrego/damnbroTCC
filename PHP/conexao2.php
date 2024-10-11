<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco";

try {
    // Criar conexão usando PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Definindo o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $pdo->query("SELECT * FROM usuario");
    $sql->execute();

    echo $sql->rowCount();
    
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Captura a exceção e exibe uma mensagem de erro
    die("Conexão falhou: " . $e->getMessage());
}
?>
