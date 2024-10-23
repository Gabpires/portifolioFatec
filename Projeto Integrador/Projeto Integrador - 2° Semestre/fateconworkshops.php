<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Workshops</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/wokshop.css">
        <link rel="stylesheet" href="css/topo.css">
    </head>
    <body>
        <div class="container">
            <?php
                include "header.inc.php";
                include "dn.nav.inc.fatecon.php";
            ?>        
            <div class="row">
                <div class="col-12">
                    <article>
                        <div class="row">
                            <div class=" texto1 col-12">
                                <h2 class="titulo">Oficinas</h2>
                                <p class="textoin">As oficinas da Fatecon trouxeram profissionais da área de diversos segmentos diferentes como Origami e Oficina de ilustração proporcionando aos participantes conhecimentos nas áreas apresentadas e interação diretamente com os tutores. </p>
                                <figure class="imagem2">
                                    <img class="img-fluid" src="imagem/Cursos.webp" alt="Imagem sobre os Workshops">
                                </figure>
                            </div>    
                        </div>
                        <div class="row">
                            <div class=" col-lg-6 shadow p-3 mb-5 bg-white rounded">
                                <section class="elemento">
                                    <h2 class="titulo">Origami</h2>
                                    <figure class="imagem">
                                        <img src="imagem/Origami.webp" alt="Imagem sobre os Workshops">
                                    </figure>
                                    <p class="texto">Origami é uma antiga arte japonesa para criar formas e figuras variadas. A palavra "origami" é uma combinação das palavras japonesas "ori" (dobrar) e "kami" (papel). No origami, geralmente começa-se com um pedaço quadrado de papel e, através de dobras precisas, cria-se uma variedade de objetos, desde animais e pássaros até formas geométricas.
                                    </p>
                                </section>
                            </div>
                            <div class="col-lg-6 shadow p-3 mb-5 bg-white rounded">
                                <section class="elemento">
                                    <h2 class="titulo">Desenho pratico</h2>
                                    <figure class="imagem">
                                        <img src="imagem/Desenho.webp" alt="Imagem sobre os Workshops">
                                    </figure>
                                    <p class="texto">O desenho prático envolve técnicas e desenvolvimento desde personagens até um cenário completo e realista para dar vida a história e criar uma imersão que leve o leitor a se sentir parte do contexto.</p>
                                </section>
                            </div>
                        </div>        
                    </article>
                </div>
            </div>  
            <a href="#" class="bt"></a>
        </div>    

        <?php
            include "footer.inc.php";
            ?>       
    </body>    
</html>                        