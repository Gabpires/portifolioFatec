<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Incluir Cosplay</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estiloccxp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php require "header.inc.php"; ?>
    <?php require "ccxp.nav.inc.php"; ?>

    <div class="container margem" style= "margin-top: 50px;"> 
        <h2>Incluir Novo Cosplay</h2> 
        <form action="processar_cosplay.php" method="post" style = "text-align: left;"> 
            <div class="mb-4"> <label for="nomeCosplayer" class="form-label">Nome do Cosplayer</label> 
            <input type="text" class="form-control" id="nomeCosplayer" name="nomeCosplayer" required> </div> 

            <div class="mb-4"> <label for="nomePersonagem" class="form-label">Nome do Personagem</label> 
            <input type="text" class="form-control" id="nomePersonagem" name="nomePersonagem" required> </div> 

            <div class="mb-4"> <label for="tema" class="form-label">Tema</label> 
            <input type="text" class="form-control" id="tema" name="tema" required> </div> 

            <div class="mb-4" > <label for="ano" class="form-label">Ano</label> 
            <input type="number" class="form-control" id="ano" name="ano" style = "max-width: 150px; border: 1px solid #000000;  border-radius: 20px;" required> </div> 
            
            <button type="submit" class="btn btn-primary">Incluir</button> 
        </form> 
    </div> 

    <?php require "footer.inc.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
