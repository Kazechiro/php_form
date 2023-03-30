<?php
$cnpjcliente = $_POST['cnpj'];

$url = file_get_contents('https://www.receitaws.com.br/v1/cnpj/' .$cnpjcliente);
$dados = json_decode($url);

echo "Nome: ".$dados->nome."<br>";
echo "Capital Social: R$ ".number_format(($dados->capital_social),2,',','.')."<br>";

echo"Município: ".$dados->municipio."<br>";
echo"Atividade Principal". "<br>";
echo "código:".$dados->atividade_principal[0]->code. "<br>";
echo "Descrição:".$dados->atividade_principal[0]->text. "<br>";

?>