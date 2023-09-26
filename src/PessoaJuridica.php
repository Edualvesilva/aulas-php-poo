<?php
require_once "Cliente.php";
class PessoaJuridica extends Cliente {
    private int $anoFundacao;
    private string $cnpj;
    private string $nomeFantasia;


    /**
     * Get the value of anoFundacao
     *
     * @return int
     */
    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    /**
     * Set the value of anoFundacao
     *
     * @param int $anoFundacao
     *
     * @return self
     */
    public function setAnoFundacao(int $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }

    /**
     * Get the value of cnpj
     *
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @param string $cnpj
     *
     * @return self
     */
    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of nomeFantasia
     *
     * @return string
     */
    public function getNomeFantasia(): string
    {
        return $this->nomeFantasia;
    }

    /**
     * Set the value of nomeFantasia
     *
     * @param string $nomeFantasia
     *
     * @return self
     */
    public function setNomeFantasia(string $nomeFantasia): self
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}




?>