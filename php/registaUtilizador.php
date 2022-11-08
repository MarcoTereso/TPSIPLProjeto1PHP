<?php
//obter dados do formulário
$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$pass = $_POST['password'];
$morada = $_POST['moradaUser'];
$morada2 = $_POST['morada2User'];
$cidade = $_POST['cidadeUser'];
$distrito = $_POST['distritoUser'];
$codPost = $_POST['cpUser'];
$datai = $_POST['diUser'];
$dataf = $_POST['dfUser'];
$check = $_POST['check'];

//escrever dados em ficheiro de texto
//criar ficheiro
$path = "../datafile/registo.txt";
$file = fopen($path,"a+");
if(file_exists($path)){
	$dados = "Nome: $nome $apelido\nEmail: $email\nPassword: $pass\nMorada: $morada, $morada2 - $cidade\nCódigo Postal: $codPost - $cidade, $distrito\nData de Início: $datai\nData de Fim: $dataf\n################################################\n";
	fwrite($file, $dados);
	echo "<script>alert('Dados Inseridos com sucesso');</script>";
}else{
	echo "<script>alert('Erro ao tentar abrir o ficheiro');</script>";
}
fclose($file);



?>
