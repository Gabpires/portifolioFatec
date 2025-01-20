<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contatos</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/topo.css">
</head>

<body>
    
<?php require "header.inc.php"; ?>

<main role="main">
<div class="container">
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="Guia de Localização da Página" class="breadcrumbajustep">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Entre em contato com nossa equipe</li>
        </ol>
    </nav>
    <article>
        <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-6">
            <div  class="col-12">
                <h2 class="centropagina margem31">Quer divulgar seu evento?</h2>
            </div>
            <div>
                <p> Você está organizando um evento emocionante e quer garantir que ele receba a atenção que merece? Não procure mais! Nos dos Pinguins Piratas, estamos comprometidos em ajudar a promover os melhores eventos da comunidade geek e nerd. Seja um festival de cosplay, uma convenção de quadrinhos, um torneio de videogames ou qualquer outra celebração da cultura pop, estamos aqui para ajudar a divulgar seu evento para nossa apaixonada e engajada base de fãs. Para isso é só preencher o formulário a seguir, que entraremos em contato para explicar melhor como funciona essa divulgação.</p>
            </div>
            <div>
                <form class="margem formulario" action="formulario_contato.php" method="post" role="form">
                    <div class="field">
                        <label for="NomeDoEvento">Nome do evento:</label>
                        <input type="text" id="NomeDoEvento" name="NomeDoEvento" placeholder="Digite o nome do evento" aria-describedby="Coloque nessa área o nome do evento para divulgação">
                    </div>
                    <div class="field">
                        <label for="cidade">Cidade em que ocorre:</label>
                        <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade" aria-describedby="Coloque nessa área o nome da cidade onde ocorre o evento">
                    </div>
                    <div class="field">
                        <label for="responsavel">Responsável pelo evento:</label>
                        <input type="text" id="responsavel" name="responsavel" placeholder="Digite o nome do resposavel" aria-describedby="Coloque nessa área o nome do responsavel do evento">
                    </div>
                    <div class="field">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" placeholder="Digite o email do evento" aria-describedby="Digite um email de contato do responsavel do evento">
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto centropagina margem margem9">
                        <button type="submit" class="btn btn-primary margem3" aria-label="Enviar respostas do questionario a cima">Enviar</button>
                    </div>
                 </form>
            </div>
        </section>

        <section class="col-sm-12 col-md-12 col-lg-6">
                <div>
                    <h2 class="centropagina margem31">Quer deixar um comentario?</h2>
                </div>
                <div>
                    <p> Você que deu uma passada pelo nosso site, gostou do conteudo e quer deixar algum elogio, sugestão de melhorias ou apenas um comentário, é só preencher o pequeno formulario abaixo com seu nome e seu comentario, que nós veremos.</p>
                </div>
                <div>
                    <form action="formulario_contato2.php" method="post">
                        <div class="field">
                            <label for="nome">Seu nome:</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome" aria-describedby="Coloque nessa área o seu nome, para sabermos quem deixou o comentario">
                        </div>
                        <div class="field">
                            <label for="comentario">Comentario:</label>
                            <textarea cols="48" rows="8" id="comentario" name="comentario" placeholder="Digite o seu comentario" aria-describedby="Coloque nessa área o seu comentário, opinião ou sugestão sobre nosso site"></textarea>
                        </div>
                        <div class="d-grid gap-2 col-2 mx-auto centropagina margem margem9">
                            <button type="submit" class="btn btn-primary margem3" aria-label="Enviar respostas do questionario a cima">Enviar</button>
                        </div>
                    </form>
                </div>
            </section>

        </div>
    </article> 
    <a href="#" class="bt" aria-describedby="Aperte o botão para subir até o topo da pagina" aria-label="Aperte o botão para subir até o topo da pagina"></a>
</div>
</main>

<?php require "footer.inc.php"; ?>

</body>
</html>
