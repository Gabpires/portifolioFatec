<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Pacatos Pinguins Piratas do Deserto Proibido">
    <meta name="description" content="Algumas informações sobre o evento da CCXP.">
    <title>Apresentando a CCXP</title>
    <link rel="stylesheet" href="css/estiloccxp.css">
    <link rel="stylesheet" href="css/topo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php require "header.inc.php"; ?>
    <?php require "ccxp.nav.inc.php"; ?>
    <div class="container text-center">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajuste">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">CCXP</li>
                            </ol>
                            </nav>
        <main>
            <section>
                <h1 class="espacotopo">Apresentando a CCXP</h1>
                <article class="text-center article">
                    <header>
                        <h2>Texto de apresentação da CCXP</h2>
                    </header>
                    <div class="row">
                        <figure class="col-lg-6 col-sm-12 ccxp">
                            <img src="imagem/ccxp.webp" class="img" alt="Imagem com o nome da CCXP">
                            <figcaption>Logo CCXP</figcaption>
                        </figure>
                        <p class="col-lg-5 col-sm-12 p">A CCXP (Comic Con Experience) é um evento Nerd e geek que acontece anualmente no
                            mês de dezembro na São Paulo Expo, sendo considerado um dos maiores festivais de cultura pop do
                            mundo. Sua primeira edição foi em 2014 e desde então reúne diversas empresas de entretenimento,
                            celebridades nacionais e internacionais, grandes estúdios cinemas, trazendo em média mais de 280 mil
                            pessoas para o evento. O evento conta com concursos de cosplays, campeonatos de eSports, Workshops,
                            shows ao vivo, dentre várias outras possibilidades para explorar dentro do espaço.</p>
                    </div>
                </article>
            </section>
        </main>
            <section>
                <header>
                    <h2>Links de acesso para as páginas relacionadas a CCXP</h2>
                </header>
                <div class="container col-md-12 justify-content-center">
                    <div class="row justify-content-center">
                        <a aria-label="Link para página de artistas da CCXP" role="button" class="col-md-5 col-lg-2 col-sm-12" href="artistas_CCXP.php">
                        <figure class="col-md-6 col-lg-2 imagem">
                            <img class="imagem" src="imagem/artistasccxp.webp" alt="É uma imagem de apresentação da Artists Valley">
                                <figcaption class="figcaption text-center btn btn-primary">
                                        Artistas
                                </figcaption>
                        </figure>
                        </a>
                            <a aria-label="Link para página de eSports da CCXP" role="button" class="col-md-4 col-lg-2 col-sm-12" href="eSports_CCXP.php">
                                <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                                    <img class="imagem" src="imagem/eSportsCCXp.webp"
                                        alt="É uma imagem de apresentação de eSports">
                                    <figcaption class="figcaption btn btn-primary">
                                        eSports
                                    </figcaption>
                                </figure>
                            </a>

                            <a aria-label="Link para página de cosplays da CCXP" role="button" class="col-md-5 col-lg-2 col-sm-12 text-center" href="cosplay_CCXP.php">
                                <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                                    <img class="imagem" src="imagem/cosplayccxp.webp"
                                        alt="É uma imagem de apresentação dos Cosplays">
                                    <figcaption class="figcaption btn btn-primary">
                                        Cosplays
                                    </figcaption>
                                </figure>
                            </a>
                            <a aria-label="Link para página de entrevistas da CCXP" role="button" class="col-md-4 col-lg-2 col-sm-12" href="entrevista_CCXP.php">
                                <figure class="col-md-6 col-lg-2 col-sm-12 imagem">
                                    <img class="imagem" src="imagem/entrevistaCCXP.webp"
                                        alt="É uma imagem de apresentação das entrevistas">
                                    <figcaption class="figcaption btn btn-primary">
                                        Entrevistas
                                    </figcaption>
                                </figure>
                            </a>
                            <a aria-label="Link para página oficial da CCXP" role="button" class="col-lg-3 col-sm-12" href="https://www.ccxp.com.br/" target="_blank">
                                <figure class="col-sm-12">
                                    <img class="novidades" src="imagem/novidadesccxp.jpg"
                                        alt="É uma imagem que mostras várias pessoas em uma seção do evento da CCXP">
                                    <figcaption class="btn btn-primary">
                                        Novidades
                                    </figcaption>
                                </figure>
                            </a>
                    </div>                    
                </div>
                <a aria-hidden="true" href="#" class="bt"></a>
            </section>
    </div>
    <?php require "footer.inc.php"; ?>

</body>
</html>
