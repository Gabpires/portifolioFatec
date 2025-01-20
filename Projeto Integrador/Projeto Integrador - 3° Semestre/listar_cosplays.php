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


    <div class="container"style= "margin-top: 50px;"> 
        <h2>Lista de Cosplayers</h2>
        <table class="table table-bordered" style= "border: 2px solid #8A2BE2;">
            <thead >
                <tr>
                    <th>ID</th>
                    <th>Nome do Cosplayer</th>
                    <th>Nome do Personagem</th>
                    <th>Tema</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
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

                // Selecionar todos os registros
                $sql = "SELECT c.CodigoCosplayer, c.NomeCosplayer, p.NomePersonagem, p.Tema, p.Ano FROM Cosplayers c JOIN Personagens p ON c.CodigoPersonagem = p.CodigoPersonagem";
                $result = $conecta->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["CodigoCosplayer"] . "</td>";
                        echo "<td>" . $row["NomeCosplayer"] . "</td>";
                        echo "<td>" . $row["NomePersonagem"] . "</td>";
                        echo "<td>" . $row["Tema"] . "</td>";
                        echo "<td>" . $row["Ano"] . "</td>";
                        echo "<td><form action='excluir_cosplay.php' method='post'>
                        <input type='hidden' name='idCosplayer' value='" . $row["CodigoCosplayer"] . "'>
                        <button type='submit' class='btn btn-danger'>Excluir</button></form></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>Nenhum registro encontrado</td></tr>";
                }

                $conecta->close();
                ?>
            </tbody>
        </table>
    </div>

    <?php require "footer.inc.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
