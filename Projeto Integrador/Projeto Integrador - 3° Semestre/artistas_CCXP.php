<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pacatos Pinguins Piratas - Artists' Valley by Bis na CCXP.">
	<meta name="author" content="Pacatos Pinguins Piratas">
	<meta property="og:title" content="Pacatos Pinguins Piratas - Artists' Valley by Bis na CCXP.">
	<meta property="og:description" content="Artists' Valley by Bis na CCXP.">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="pt_BR">
	<meta name="twitter:title" content="Pacatos Pinguins Piratas - Artists' Valley by Bis na CCXP.">
	<meta name="twitter:description" content="Artists' Valley by Bis na CCXP.">
    <title>Artistas CCXP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estiloccxp.css">
    <link rel="stylesheet" href="css/topo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <div role="main" class="container margem">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajuste">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="CCXP.php">CCXP</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Artistas</li>
                    </ol>
                    </nav>
        <article class="h1 text-center">  
                <h1 class="h1">Artists' Valley by Bis</h1>
                <p> </p>
        </article>

        
        <!-- <table class="espaco" aria-label="tabela de artistas da CCXP" style="border-spacing:20px;"> -->
        <div role="table" class="row" aria-label="tabela de artistas da CCXP">
            
        <?php
        $sql = "SELECT a.NomeArtista, a.FontePesquisa, a.DescricaoArtista FROM Artistas a";
        $result = $conecta->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div role="cell" class="col-lg-4 col-md-6 col-sm-12">';
                echo '<div class="galeria2 text-center"/>';
                echo '<figure class="text-center">';
                echo '<img src="imagem/' . $row["NomeArtista"] . '_ccxp.webp" alt="Imagem do artista"/>';
                echo '<figcaption class="figure-caption">' . $row["NomeArtista"] . '</figcaption>';
                echo '</figure>';
                echo '<a role="button" aria-label="botão que redireciona para a fonte de pesquisa"' . 'href="' . $row["FontePesquisa"] . '" class="btn btn-primary" target=_blank>' . 'Fonte' . '</a>';
                echo '<p class="p pmargem">' . $row["DescricaoArtista"] . '</p>';
                echo '</div>';
                echo '</div>';
                

            }
        }



        ?>
        </div>
    </div>
           
    

        <a href="#" class="bt"></a>

        <p><a href="incluir_artistas.php">Inserir mais dados</a></p>
        <p><a href="listar_artistas.php">Excluir dados</a></p>
    


    </div>

    <?php require "footer.inc.php"; ?>

</body>

</html>
