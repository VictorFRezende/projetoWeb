<?php

class Pessoa {

	private $nome;
	private $sexo;
	private $idade;
	
    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     *
     * @return self
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function __construct(
    	$nome, $sexo, $idade
    ){
		$this->nome  = $nome;
		$this->sexo  = $sexo;
		$this->idade = $idade;
    }

    public function __toString()
    {
    	$result = "Nome: " .$this->nome ."<br/>".
    			  "Sexo: " .$this->sexo ."<br/>".
    			  "Idade: ".$this->idade."<br/>";

		return $result;
    }

}

?>