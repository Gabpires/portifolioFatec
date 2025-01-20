<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "pinguinspiratas";

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

// Verificar conexão
if ($conecta->connect_errno) {
    die("Conexão falhou: " . $conecta->connect_error);
}

// Obtém os dados do formulário de divulgar usando $_POST[].
    $nomeEvento = $_POST['NomeDoEvento'];
    $cidadeEvento = $_POST['cidade'];
    $responsavelEvento = $_POST['responsavel'];
    $emailEvento = $_POST['email'];


// Usa uma declaração preparada ($stmt = $conecta->prepare($sql)) para evitar SQL injection.
    $sql = mysqli_query($conecta, "INSERT INTO divulgar_evento(nomeEvento, cidadeEvento, responsavelEvento, emailContato) VALUES ('$nomeEvento', '$cidadeEvento', '$responsavelEvento', '$emailEvento')");

// Fecha a conexão com o banco de dados.
    $conecta->close();}

?>

<?php include "contato.php"; ?>