<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    
<h1>PHP com PDO - Exemplo 2</h1>
<hr>

<h2>Assuntos abordados:</h2>
<ul>
    <li>Acesso direto ás propriedades</li>
    <li>Atribuição e leitura de dados</li>
    <li>Chamada de método</li>
</ul>
<?php
// Importando a Classe
require_once "src/Cliente.php";

// Criando instâncias da Classe (objetos!)
$clienteA = new Cliente;
$clienteB = new Cliente;

// Acesso e Atribuição
$clienteA->nome = "Eduardo";
$clienteB->nome = "Keanus Reeves";

$clienteA->telefones = ["11-2134-0300","11-95655-5555"];
$clienteB->telefones = ["777-777-777"];

$clienteA->senha =password_hash("123abc",PASSWORD_DEFAULT);
?>
<hr>
<h3><?=$clienteA->nome?></h3>
<h3><?=$clienteB->nome?></h3>
<pre><?=var_dump($clienteA,$clienteB)?></pre>
<h2>Dados dos Objetos</h2>
</body>
</html>