<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>
    
<h1>PHP com POO - Exemplo 3</h1>
<hr>

<h2>Assuntos abordados:</h2>
<ul>
 <li>Método Construtor com inicialização de parâmetros do objeto</li>
 <li>uso do <code>$this</code> para acesso às propriedades dentro do objeto</li>
</ul>
<?php
// Importando a Classe
require_once "src/Cliente.php";
$clienteA = new Cliente("Fulano","Fulano@gmail.com");
$clienteB = new Cliente("Ozzy","ozzy@gmail.com");

// $clienteA->telefones = ["11-5432-0900"];
?>
<pre> <?=var_dump($clienteA,$clienteB)?></pre>
</body>
</html>