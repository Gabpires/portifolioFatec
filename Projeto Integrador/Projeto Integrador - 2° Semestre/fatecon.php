<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fatecon</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/fatecon.css">
        <!-- <link rel="stylesheet" href="css/dn.estilo.css"> -->
        <link rel="stylesheet" href="css/topo.css">
    </head>
    <body>
        
    <?php include "header.inc.php"; ?>
    <?php include "dn.nav.inc.fatecon.php"; ?>  

        <div class="container">
            <div class="row align-items-end">
                
                <div class="row">
                    <div class="col-12">
                        <article>
                            <figure class="imagem2 text-center">
                                <img class="img-fluid" src="imagem/Fatecon.webp" alt="Imagem">
                            </figure>
                            <h2 hidden>Fatecon</h2>
                            <p class="texto">A Fatecon é um evento voltado para quadrinhos também trazendo o melhor da cultura Geek e Nerd. Com diversas atrações como um beco de artistas, concurso de cosplays e jogos de tabuleiro a Fatecon vem para apresentar e divulgar esse universo com diversos artistas regionais e de todo o Brasil apresentando seus trabalhos e interagindo com o público. 
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <section class="elemento">
                                        <h2 class="titulo">Concursos</h2>
                                        <figure class="imagem">
                                            <img src="imagem/concursos.webp" alt="Imagem sobre o Jogo">
                                        </figure>
                                        <p class="texto">A FATECon realiza concursos em todas suas edições, acesse a página concursos para ver os concursos que foram realizados anteriormente e seus ganhadores.
                                        </p> 
                                        <a href="fconcurso.php" class="btn btn-primary">Ver mais</a>                         
                                    </section>
                                </div>
                                <div class="col-lg-6">
                                    <section class="elemento">
                                        <h2 class="titulo">Artistas</h2>
                                        <figure class="imagem">
                                            <img src="imagem/artistas.jpg" alt="Imagem sobre o Jogo">
                                        </figure>
                                        <p class="texto">Ao acessar a página Artistas você poderá ver uma seção de artistas que já visitaram a FATECon e um pouco sobre seus trabalhos.
                                        </p> 
                                        <a href="fartistas.php" class="btn btn-primary">Ver mais</a>                                        
                                    </section>
                                </div>
                                <div class="col-lg-6">      
                                    <section class="elemento">            
                                        <h2 class="titulo">Jogos</h2>
                                        <figure class="imagem">
                                            <img src="imagem/Jogos1.webp" alt="Imagem sobre o Jogo">
                                        </figure>
                                        <p class="texto">Com diversas temáticas, os Jogos da Fatecon apresentam ao público Jogos específicos e empolgantes, trazendo a oportunidade de conhecer novos mundos e conhecer pessoas novas.  
                                        </p>    
                                        <a href="fateconjogos.php" class="btn btn-primary">Ver mais</a>                   
                                    </section>
                                </div>
                                <div class="col-lg-6">    
                                    <section class="elemento">
                                        <h2 class="titulo">Workshop</h2>
                                        <figure class="imagem">
                                            <img src="imagem/workshop.webp" alt="Imagem sobre o Jogo">
                                        </figure>
                                        <p class="texto">
                                        Trazendo conhecimento e diversidade para a Fatecon, os Workshops ministrados trouxeram cultura e aprendizado para os participantes, visando adquirir mais experiências e conhecimento.
                                        </p>
                                        <a href="fateconworkshops.php" class="btn btn-primary">Ver mais</a>                       
                                    </section>
                                </div>  
                            </div>    
                        </article>
                    </div>
                </div> 

            </div>
            <a href="#" class="bt"></a>
        </div>
        <?php include "footer.inc.php" ?>   
    </body>    
</html>    