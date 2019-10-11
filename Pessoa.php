<?php
class Pessoa implements JsonSerializable{
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
	public function jsonSerialize()
	{
		return [
			"Nome:  " => $this->nome ,
			"Sexo:  " => $this->sexo ,
			"Idade: " => $this->idade
		];
	}
}

class Filho extends Pessoa {
		
		public function novoMetodo()
		{
			echo "De um novo método na classe " . __CLASS__ . "<br />";
		}
	
}


$pessoa1 = new Pessoa('Victor', 'Masculino', 25);
$json = json_encode($pessoa1);
echo $json;

/*$pessoa2 = new Pessoa('Fiama', 'Feminino', 23);

$filho1 = new Filho('Victor', 'Masculino', 25);
echo $filho1->novoMetodo();

$json = json_encode($pessoa1);
echo $pessoa1;
echo "<br/>";
echo $json;*/
