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

// Obtém os dados do formulário de comentario usando $_POST[].
    $nome = $_POST['nome'];
    $comentario = $_POST['comentario'];


// Usa uma declaração preparada ($stmt = $conecta->prepare($sql)) para evitar SQL injection.
    $sql = mysqli_query($conecta, "INSERT INTO deixar_comentario(nomeComentario, comentario) VALUES ('$nome', '$comentario')");

// Fecha a conexão com o banco de dados.
    $conecta->close();}

?>

<?php include "contato.php"; ?>