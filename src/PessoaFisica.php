<?php
namespace Cleiton;
require_once "Cliente.php";
final class PessoaFisica extends Cliente{
    private int $idade;
    private string $cpf;


    public function __construct(){
        
        $this->setSituacao("Normal");
    }
 
    /**
     * Get the value of idade
     *
     * @return int
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @param int $idade
     *
     * @return self
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     *
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @param string $cpf
     *
     * @return self
     */
    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    

}

?>