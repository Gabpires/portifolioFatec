<?php  


$nome = $_POST['nome'];
$nome = ucwords($nome);
$cidade = $_POST['cidade'];
$responsavel = $_POST['responsavel'];
$email = $_POST['email'];

$dados = [
	'nome' => $nome,
	'cidade' => $cidade,
	'responsavel' => $responsavel,
	'email' => $email
];

//criando o arquivo json
$json = json_encode($dados);
$nome_arquivo = "banco/$nome.json";
$recurso = fopen($nome_arquivo, 'a+');
fwrite($recurso, $json);
fclose($recurso);


?>

<?php require "contato.php"; ?>