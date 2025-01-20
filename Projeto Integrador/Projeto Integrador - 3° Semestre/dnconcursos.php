<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concursos - Domingo Nerd</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/topo.css">
</head>

<body>

<?php require "header.inc.php"; ?>
<?php require "dn.nav.inc.php"; ?>
 
<div class="container">

    <div class="row">
        <div class="col-12"><!-- em todos os tamanhos -->
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajuste">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="dn.php">Domingo Nerd</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Concursos</li>
                </ol>
            </nav>

            <h2 class="centropagina margem6">Concursos</h2>
            <p> Não importa qual seja sua paixão ou habilidade, há um concurso esperando por você no Domingo Nerd. Junte-se a nós para uma experiência emocionante repleta de criatividade, camaradagem e, é claro, muita diversão! Muitos se prepararam para brilhar e mostrar todo o seu talento nos emocionantes concursos que os aguardavam no Domingo Nerd! Seja você um artista criativo, um mestre da caracterização ou um dançarino habilidoso, teve competições emocionantes que oferecem a chance de destacar suas habilidades e se divertir ao máximo. </p>
        </div>

        <section class="col-12 margem4 corroxa">
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title centropagina margem2">Cosplays</h5>
                </div>   
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <figure class="centropagina margem2">
                        <img class = "img" src="imagem/juradascosplay.webp" alt="é uma imagem das três juradas que teve no evento, onde uma está de cosplay de Charlie de Hazbin Hotel e as outras estão vestidas mais normalmente">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <p> Transformando-se em seus heróis e vilões favoritos muitas pessoas participaram do concurso de <a href="dncosplay.php" aria-label="Link que leva a pagina recionada a cosplays do Domingo Nerd">cosplays</a>. Desfilando no palco e impressione os jurados com suas fantásticas caracterizações e performances. Com prêmios incríveis em jogo, este foi o momento de brilhar e mostrar ao mundo todo amor que esse pessoal tem pela cultura geek.</p>
                </div>
            </div>
        </section>
        <section class="col-12 margem4 corroxa">
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title centropagina margem2">Desenhos</h5>
                </div>   
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <figure class="centropagina margem2">
                        <img class = "img" src="imagem/concursodesenho.webp" alt="é uma imagem representativa de uma pessoa desenhando, pois esse concurso não foi julgado enquanto estava acontecendo o evento, foi julgado por fora">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <p> Um concurso do <a href="https://www.instagram.com/domingonerd/" aria-label="Link que leva ao instagram do evento Domingo Nerd">Domingo Nerd</a> para liberar a criatividade de cada pessoa que se increveu, onde eles dão a vida aos seus personagens favoritos. Deixando a imaginação voar enquanto cria obras de arte incríveis que serão avaliadas por juizes escolhidos a dedo. Desde fanarts apaixonadas até designs originais, todos foram bem-vindos a participar e mostrar seu talento para a comunidade geek.</p>
                </div>
            </div>
        </section>
        <section class="col-12 margem4 corroxa">
            <div class="row">
                <div class="col-12">
                    <h5 class="card-title centropagina margem2">JustDance</h5>
                </div>   
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <figure class="centropagina margem2">
                        <img class = "img" src="imagem/jogos.webp" alt="é uma imagem representativa do jogo JustDance pois não teve fotos tiradas desse concurso">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-7 col-lg-7">
                    <p> Mostrando seus movimentos e arrase na pista de dança no Concurso de Just Dance! Muitos sentiram a música pulsar enquanto dançavam ao ritmo de alguns dos maiores sucessos da cultura pop. Com categorias para todos os níveis de habilidade, desde iniciantes até profissionais, todos foram convidados a se juntar à diversão e competir pelo título de melhor dançarino do <a href="https://www.instagram.com/domingonerd/" aria-label="Link que leva ao instagram do evento Domingo Nerd">Domingo Nerd</a>.</p>
                </div>
            </div>
        </section>
        <a href="#" class="bt"></a>
    </div>
</div>
     
<?php require "footer.inc.php"; ?>

</body>

</html>
