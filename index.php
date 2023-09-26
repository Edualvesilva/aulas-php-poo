<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    
<h1>PHP com POO - Exemplo 5</h1>
<hr>

<h2>Assuntos abordados:</h2>
<ul>
 <li>Herança (Super Classe e Sub Classe)</li>
 <li>Métodos/propriedades protegidos (acessíveis apenas pela classe e que foram definidos e pelas subclasses)</li>
 <li>Classe abstrata: não permite instâncias/objetos ,serve apenas de modelo para subclasses.</li>
 <li>Classe Final: não permite herança,ou seja, não aceita a criação de Subclasses.</li>
</ul>
<?php
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
$clientePF = new PessoaFisica;
$clientePJ = new PessoaJuridica;
// colocar um nome no Cliente PF
$clientePF->setNome("Messi");
$clientePF->setEmail("TheGoat@gmail.com");
$clientePF->setIdade(36);
$clientePF->setCpf("123.456.789-00");

$clientePJ->setNome("Beltrano S/A");
$clientePJ->setEmail("blablabla@gmail.com");
$clientePJ->setAnoFundacao(2000);
$clientePJ->setCnpj("32.088.0001/000.41");
$clientePJ->setNomeFantasia("Bla bla bla informática");

?>

<pre><?=var_dump($clientePF)?></pre>
<pre><?=var_dump($clientePJ)?></pre>

<?php
require_once "src/MEI.php";
$clienteMEI = new MEI;
$clienteMEI->setNome("SCCP");
$clienteMEI->setAnoFundacao(1910);
$clienteMEI->setNomeFantasia("Corinthians");
$clienteMEI->setAreaDeAtuacao("Futebol");

?>

<?php
require_once "src/Cliente.php";
$clienteGenerico = new Cliente;

?>
<!-- da erro pois cliente é uma classe abstrata -->
<pre><?=var_dump($clienteGenerico)?></pre>
</body>
</html>