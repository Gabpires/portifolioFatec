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
$nomeCosplayer = $_POST['nomeCosplayer'];
$nomePersonagem = $_POST['nomePersonagem'];
$tema = $_POST['tema'];
$ano = $_POST['ano'];

// Inserir dados na tabela Personagens
$sqlPersonagem = "INSERT INTO Personagens (NomePersonagem, Tema, Ano) VALUES ('$nomePersonagem', '$tema', '$ano')";
if ($conecta->query($sqlPersonagem) === TRUE) {
    $codigoPersonagem = $conecta->insert_id;

    // Inserir dados na tabela Cosplayers
    $sqlCosplayer = "INSERT INTO Cosplayers (NomeCosplayer, CodigoPersonagem) VALUES ('$nomeCosplayer', '$codigoPersonagem')";
    if ($conecta->query($sqlCosplayer) === TRUE) {
        echo "Novo cosplay incluído com sucesso!";
    } else {
        echo "Erro ao incluir cosplay: " . $conecta->error;
    }
} else {
    echo "Erro ao incluir personagem: " . $conecta->error;
}

$conecta->close();
?>
<a href="cosplay_CCXP.php">Voltar à lista de cosplayers</a>
