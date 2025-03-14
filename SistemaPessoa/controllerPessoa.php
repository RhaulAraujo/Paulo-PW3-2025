<?php
include("modelPessoa.php");
include("Pessoa.php");


$cpf = filter_input(INPUT_GET, "cpf");
$nome = filter_input(INPUT_GET, "nome");
$contato = filter_input(INPUT_GET, "contato");

$pessoa = new Pessoa();
$pessoa -> set_Cpf($cpf);
$pessoa -> set_Nome($nome);
$pessoa -> set_Contato($contato);

$modelPessoa = new ModelPessoa();
$modelPessoa -> inserir($pessoa);
?>