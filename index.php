<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 10</title>
</head>

<body>

    <h1>PHP com POO - Exemplo 10</h1>
    <hr>

    <h2>Assuntos abordados:</h2>

    <ul>
    <li>Composer,Gerenciador de dependência PHP</li>
    <li>Configurar o projeto com Composer usando <code>composer.json</code></li>
    <li>Autoload de classes evitando muitos requires e/ou require manuais</li>
    </ul>
  
<?php

use Cleiton\Escola;
use Cleiton\MEI;
use Cleiton\PessoaFisica;
use Cleiton\PessoaJuridica;
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

require_once "vendor/autoload.php";

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;
$clientePJ = new PessoaJuridica;
$clientePF = new PessoaFisica;
$clienteMEi = new MEI;

$clientePF->setNome("Jão do brás");
$clientePJ->setCnpj("4343-343-5456");
$clienteMEi->setAreaDeAtuacao("Roupas");
?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<hr>

<p>Pessoa Fisica: <?=$clientePF->getNome()?></p>
<p>Pessoa Juridica (Cnpj): <?=$clientePJ->getCnpj()?></p>
<p>MEI: (área de Atuação): <?=$clienteMEi->getAreaDeAtuacao()?></p>
<hr>

<?php
$escola = new Escola;
var_dump($escola);
?>

</body>

</html>