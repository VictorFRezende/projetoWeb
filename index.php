<?php

include("Pessoa.php");

$pessoa1 = New Pessoa('Victor', 'Masculino', 25);
$pessoa2 = New Pessoa('Fiama', 'Feminino', 23);

$json = json_encode($pessoa1);

echo $pessoa1;
echo "<br/>";
echo $json;


?>