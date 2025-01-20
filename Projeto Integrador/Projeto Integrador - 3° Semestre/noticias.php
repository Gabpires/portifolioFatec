<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Pacatos Pinguins Piratas - Principais Notícias Nerds sobre quadrinhos, jogos, cosplays e filmes.">
	<meta name="author" content="Pacatos Pinguins Piratas">
	<meta property="og:title" content="Pacatos Pinguins Piratas - Principais Notícias Nerds sobre quadrinhos, jogos, cosplays e filmes.">
	<meta property="og:description" content="Principais Notícias Nerds sobre quadrinhos, jogos, cosplays e filmes.">
	<meta property="og:type" content="website">
	<meta property="og:locale" content="pt_BR">
	<meta name="twitter:title" content="Pacatos Pinguins Piratas - Principais Notícias Nerds sobre quadrinhos, jogos, cosplays e filmes.">
	<meta name="twitter:description" content="Principais Notícias Nerds sobre quadrinhos, jogos, cosplays e filmes.">
	<title>Notícias</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/noticiasm.css">
	<link rel="stylesheet" href="css/topo.css">
</head>
<body>
<?php require "header.inc.php"; ?>
<?php include "connectserver.php"; ?>	
    <main>

		<div class="container-fluid">
			<div class="row bordas">
				<div class="col-12 espacoprincipal">
							<nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajustep">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notícias</li>
                            </ol>
                            </nav>
				<h1 class="text-center"><i class="bi bi-newspaper"></i> Notícias</h1>
				<p class="text-center">Acompanhe algumas das principais notícias do mundo NERD!</p>
					<!-- primeira parte -->
					<div class="row espacoprincipal2">
						<div class="bordaroxanoticiadois"></div>

						<!-- php -->
						

						<?php include "encontrarnoticias.php"; ?>
						
						<!-- php -->
						
					</div>
					<!-- primeira parte -->

					<!-- segunda parte -->

						<!-- php -->
						
						<?php include "encontrarnoticiasp2.php"; ?>

						<!-- php -->


				</div>
			</div>
		</div>
		<a tabindex="-1" aria-hidden="true" href="#" class="bt"></a>
    </main>

<?php require "footer.inc.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
