<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cosplay CCXP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estiloccxp.css">
    <link rel="stylesheet" href="css/topo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php require "header.inc.php"; ?>
    <?php require "ccxp.nav.inc.php"; ?>

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
    ?>


    <div class="container margem">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajuste">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="CCXP.php">CCXP</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cosplays</li>
            </ol>
        </nav>
        <article class="margemcosplay">
            <div class="titulo">
                <h2>Cosplay - Hall de campeões</h2>
                <p>Conheça os vencedores das últimas edições da CCXP:</p>
            </div>
            <div class="row">
                <?php
                $sql = "SELECT p.NomePersonagem, p.Tema, p.Ano, c.NomeCosplayer FROM Personagens p JOIN Cosplayers c ON p.CodigoPersonagem = c.CodigoPersonagem";
                $result = $conecta->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col-lg-4 col-md-6 col-sm-12">';
                        echo '    <div class="galeria">';
                        echo '        <div class="row">';
                        echo '            <div class="col-8 margemcosplay">';
                        echo '                <img src="imagem/' . strtolower(str_replace(' ', '_', $row["NomePersonagem"])) . '_ccxp.webp" alt="Imagem de cosplay" class="imgcosplay">';
                        echo '            </div>';
                        echo '            <div class="col-4 textocosplay">';
                        echo '                <h6>' . $row["NomeCosplayer"] . '</h6>';
                        echo '                <p><b>ANO:</b> ' . $row["Ano"] . '</p>';
                        echo '                <p><b>NOME DO PERSONAGEM:</b> ' . $row["NomePersonagem"] . '</p>';
                        echo '                <p><b>TEMA:</b> ' . $row["Tema"] . '</p>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>Nenhum registro encontrado.</p>';
                }
                $conecta->close();
                ?>


            </div>
        </article>
        <p>Fonte: https://www.ccxp.com.br</p>
        <a href="#" class="bt"></a>
     
        <p><a href="incluir_cosplay.php">Inserir mais dados</a></p>
        <p><a href="listar_cosplays.php">Excluir dados</a></p>

    </div>

    <?php require "footer.inc.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
