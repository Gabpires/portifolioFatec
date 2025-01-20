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

// Capturar dados do formulário
$nomeArtista = $_POST['nomeArtista'];
$FontePesquisa = $_POST['FontePesquisa'];
$Descricao = $_POST['Descricao'];

// Inserir dados na tabela Personagens
$sqlArtista = "INSERT INTO Artistas (NomeArtista, FontePesquisa, DescricaoArtista) VALUES ('$nomeArtista', '$FontePesquisa', '$Descricao')";
if ($conecta->query($sqlArtista) === TRUE) {
    $codigoArtista = $conecta->insert_id;
    echo "Novo artista incluído com sucesso!";
} else {
    echo "Erro ao incluir artista: " . $conecta->error;
}

$conecta->close();
?>
<a href="artistas_CCXP.php">Voltar à lista de cosplayers</a>

