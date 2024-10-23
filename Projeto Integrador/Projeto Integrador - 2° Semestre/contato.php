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

<div class="container">
    <article>
        <div class="row">
            <div  class="col-12">
                <h2 class="centropagina margem31">Quer divulgar seu evento?</h2> <!-- em todos os tamanhos -->
                <p> Você está organizando um evento emocionante e quer garantir que ele receba a atenção que merece? Não procure mais! Nos dos Pinguins Piratas, estamos comprometidos em ajudar a promover os melhores eventos da comunidade geek e nerd. Seja um festival de cosplay, uma convenção de quadrinhos, um torneio de videogames ou qualquer outra celebração da cultura pop, estamos aqui para ajudar a divulgar seu evento para nossa apaixonada e engajada base de fãs. Para isso é só preencher o formulário a seguir, que entraremos em contato para explicar melhor como funciona essa divulgação.</p>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <form class="margem formulario" action="questionario.php" method="post">
                    <div class="field">
                        <label>Nome do evento:</label>
                        <label for="nome">
                            <input type="text" id="nome" name="nome" placeholder="Digite o nome do evento">
                        </label>
                    </div>
                    <div class="field">
                        <label>Cidade em que ocorre:</label>
                        <label for="cidade">
                            <input type="text" id="cidade" name="cidade" placeholder="Digite a cidade">
                        </label>
                    </div>
                    <div class="field">
                        <label>Responsável pelo evento:</label>
                        <label for="responsavel">
                            <input type="text" id="responsavel" name="responsavel" placeholder="Digite o nome do resposavel">
                        </label>
                    </div>
                    <div class="field">
                        <label>Email:</label>
                        <label for="email">
                            <input type="email" id="email" name="email" placeholder="Digite seu email">
                        </label>
                    </div>
                    <div class="d-grid gap-2 col-2 mx-auto centropagina margem margem9">
                        <button type="submit" class="btn btn-primary margem3">Enviar</button>
                    </div>
                 </form>   
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 centropagina">
                <figure>
                    <img src="imagem/logo3.webp" alt="representação do logo que contem no footer">
                </figure>
            </div>
        </div>
    </article> 
    <a href="#" class="bt"></a>
</div>

<?php require "footer.inc.php"; ?>

</body>
</html>
