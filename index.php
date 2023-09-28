<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>

<body>

    <h1>PHP com POO - Exemplo 7</h1>
    <hr>

    <h2>Assuntos abordados:</h2>

    <ul>
    <li>Polimorfismo</li>
    <li>Sobreposição de métodos</li>
    <li>Uso do <code>parent</code> para acessar superClasse</li>
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
    <hr>

    <h2>Saída de Dados</h2>

    <section>
        <?= $clientePJ->exibirDados() ?>
    </section>

    <section>
        <?= $clientePF->exibirDados() ?>
    </section>

</body>

</html>