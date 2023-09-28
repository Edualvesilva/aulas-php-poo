<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;



    public function __construct()
    {
        /* Acessando o método setter PROTEGIDO (existente em Cliente)*/
        $this->setSituacao("Em análise");        
    }

    public function exibirDados(): void
    {
        echo "<h3>Classe Pessoa Juridica</h3>";
        echo "<h4>".$this->getNome()."</h4>";
        echo "<p>".$this->getSituacao()."</p>";
        echo "<p>".$this->nomeFantasia."</p>";
    }



    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

 
    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }


    public function getCnpj(): string
    {
        return $this->cnpj;
    }

 
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

   
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

   
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}




?>