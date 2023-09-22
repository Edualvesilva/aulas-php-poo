<?php
class Cliente{

    private string $nome;
    private string $email;
    private string $senha;
    
    /* Métodos getter e setters */
    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

}

?>