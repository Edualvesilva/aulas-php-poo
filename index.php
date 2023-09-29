<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 9</title>
</head>

<body>

    <h1>PHP com POO - Exemplo 9</h1>
    <hr>

    <h2>Assuntos abordados:</h2>

    <ul>
    <li>Namespaces: agrupamento de recursos (classes,funções,constantes)</li>
    <li>Prevenção de conflitos entre classes de mesmo nome</li>
    <li>Configurar e usar namespaces e alias</li>
    </ul>
  
<?php
/* Só de fazer o require/importação das classes (SEM NAMESPACE), 
já dá erro no servidor devido a terem o mesmo nome*/

use Cleiton\MEI;
use Cleiton\PessoaFisica;
use Cleiton\PessoaJuridica;
use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

require_once "src/fornecedores/Pagamento.php";
require_once "src/prestadores/Pagamento.php"; 
require_once "src/Cliente.php";
require_once "src/PessoaFisica.php";
require_once "src/PessoaJuridica.php";
require_once "src/MEI.php";
/* 
forma 1 :
$pagamentoFornecedor = new Fornecedor\Pagamento;
$pagamentoPrestador = new Prestador\Pagamento; */

// Forma 2 : 
/* use Fornecedor\Pagamento;
use Prestador\Pagamento as PrestadorPagamento;

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento; */

$pagamentoFornecedor = new Pagamento;
$pagamentoPrestador = new PrestadorPagamento;

$clientePF = new PessoaFisica;
$clientePF->setNome("Jão do brás");

$clientePJ = new PessoaJuridica;
$clientePJ->setCnpj("4343-343-5456");

$clienteMEi = new MEI;
$clienteMEi->setAreaDeAtuacao("Roupas");

?>

<pre><?=var_dump($pagamentoFornecedor)?></pre>
<pre><?=var_dump($pagamentoPrestador)?></pre>

<hr>

<!-- Exercícios:
- Crie objetos cliente PF, cliente PJ e cliente MEI
- coloque alguns dados usando setters
- Exiba alguns dados no HTML -->

<p>Pessoa Fisica: <?=$clientePF->getNome()?></p>
<p>Pessoa Juridica (Cnpj): <?=$clientePJ->getCnpj()?></p>
<p>MEI: (área de Atuação): <?=$clienteMEi->getAreaDeAtuacao()?></p>
</body>

</html>