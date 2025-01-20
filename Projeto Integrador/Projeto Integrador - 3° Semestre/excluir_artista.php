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
$idArtista = isset($_POST['idArtista']) ? (int) $_POST['idArtista'] : 0;

// Verificar se o ID foi fornecido
if ($idArtista > 0) {
    // Excluir o cosplayer
    $sql = "DELETE FROM Artistas WHERE CodigoArtista = $idArtista";
    if ($conecta->query($sql) === TRUE) {
        echo "Artista excluído com sucesso!";
    } else {
        echo "Erro ao excluir Artista: " . $conecta->error;
    }
} else {
    echo "ID inválido!";
}

$conecta->close();
?>

<a href="listar_artistas.php">Voltar à lista de Artistas</a>
