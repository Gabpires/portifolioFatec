<?php
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$nome_banco = "pinguinspiratas";

// Criar conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);

// Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error);
}

// Capturar o ID do cosplayer do formulário
$idCosplayer = isset($_POST['idCosplayer']) ? (int) $_POST['idCosplayer'] : 0;

// Verificar se o ID foi fornecido
if ($idCosplayer > 0) {
    // Excluir o cosplayer
    $sql = "DELETE FROM Cosplayers WHERE CodigoCosplayer = $idCosplayer";
    if ($conecta->query($sql) === TRUE) {
        echo "Cosplayer excluído com sucesso!";
    } else {
        echo "Erro ao excluir cosplayer: " . $conecta->error;
    }
} else {
    echo "ID inválido!";
}

$conecta->close();
?>

<a href="listar_cosplays.php">Voltar à lista de cosplayers</a>
