<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apresentando a CCXP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estiloccxp.css">
    <link rel="stylesheet" href="css/topo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php require "header.inc.php"; ?>
    <?php require "ccxp.nav.inc.php"; ?>
    <div class="container text-center">
        <article class="text-center article">
            <h1>Apresentando a CCXP</h1>
            <div class="row">
                <figure class="col-lg-6 col-sm-12 ccxp">
                    <img src="imagem/ccxp.webp" class="img" alt="é uma imagem de apresentação do evento ">
                </figure>
                <p class="col-lg-5 col-sm-12 p">A CCXP (Comic Con Experience) é um evento Nerd e geek que acontece anualmente no
                    mês de dezembro na São Paulo Expo, sendo considerado um dos maiores festivais de cultura pop do
                    mundo. Sua primeira edição foi em 2014 e desde então reúne diversas empresas de entretenimento,
                    celebridades nacionais e internacionais, grandes estúdios cinemas, trazendo em média mais de 280 mil
                    pessoas para o evento. O evento conta com concursos de cosplays, campeonatos de eSports, Workshops,
                    shows ao vivo, dentre várias outras possibilidades para explorar dentro do espaço.</p>
            </div>
        </article>
        <div class="container col-md-12 justify-content-center">
                <h2 hidden>oi</h2>
                <div class="row justify-content-center">
                    <a class="col-md-5 col-lg-2 col-sm-12" href="artistas_CCXP.php">
                        <figure class="col-md-6 col-lg-2 imagem">
                            <img class="imagem" src="imagem/artistasccxp.webp"
                                alt="é uma imagem de apresentação da Artists Valley">
                            <figcaption class="figcaption text-center btn btn-primary">
                                Artistas
                            </figcaption>
                        </figure>
                    </a>
                    <a class="col-md-4 col-lg-2 col-sm-12" href="eSports_CCXP.php">
                        <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                            <img class="imagem" src="imagem/eSportsCCXp.webp"
                                alt="é uma imagem de apresentação de eSports">
                            <figcaption class="figcaption btn btn-primary">
                                eSports
                            </figcaption>
                        </figure>
                    </a>

                    <a class="col-md-5 col-lg-2 col-sm-12 text-center" href="cosplay_CCXP.php">
                        <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                            <img class="imagem" src="imagem/cosplayccxp.webp"
                                alt="é uma imagem de apresentação dos Cosplays">
                            <figcaption class="figcaption btn btn-primary">
                                Cosplays
                            </figcaption>
                        </figure>
                    </a>
                    <a class="col-md-4 col-lg-2 col-sm-12" href="entrevista_CCXP.php">
                        <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                            <img class="imagem" src="imagem/entrevistaCCXP.webp"
                                alt="é uma imagem de apresentação das entrevistas">
                            <figcaption class="figcaption btn btn-primary">
                                Entrevistas
                            </figcaption>
                        </figure>
                    </a>
                    <a class="col-lg-3 col-sm-12" href="https://www.ccxp.com.br/" target="_blank">
                        <figure class="col-sm-12">
                            <img class="novidades" src="imagem/novidadesccxp.jpg"
                                alt="link externo que redireciona para a página oficial da CCXP ">
                            <figcaption class="btn btn-primary">
                                Novidades
                            </figcaption>
                        </figure>
                    </a>
                </div>
            
        </div>
        <a href="#" class="bt"></a>
    </div>

    <?php require "footer.inc.php"; ?>

</body>

</html>