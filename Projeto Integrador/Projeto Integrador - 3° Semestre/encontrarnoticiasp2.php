<?php



function buscarNoticias2 () {
    global $conn;
    $sql = "SELECT titulo,tituloimg,img,altimg,fonteimg,texto,fontetext,arialabellink,linknoticia FROM noticias ORDER BY id DESC LIMIT 4 OFFSET 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        exibirNoticia2($row['titulo'], $row['tituloimg'], $row['img'], $row['altimg'], $row['fonteimg'], $row['texto'], $row['fontetext'], $row['arialabellink'], $row['linknoticia'] );
    }
    }
     else {
        echo "Nenhuma notícia encontrada.";
    }
}



function exibirNoticia2($titulo,$tituloimg,$img,$altimg,$fonteimg,$texto,$fontetext,$arialabellink,$linknoticia) {
    echo '<div class="row">';
    echo '    <div class="bordaroxanoticia2">';
    echo '        <div class="col-12">';
    echo '            <section>';
    echo '                <h2>'.$titulo.'</h2>';
    echo '                <figure class="imgesq col-lg-4 col-md-6 col-sm-12 col-12">';
    echo '                    <h3 aria-hidden="true" class="tituloimg">'.$tituloimg.'</h3>';
    echo '                    <img class="col-12 imgcem" src="'.$img.'" alt="'.$altimg.'">';
    echo '                    <figcaption class="figure-caption">'.$fonteimg.'</figcaption>';
    echo '                </figure>';
    echo '                <p class="ajustap">'.$texto.'</p>';
    echo '                <small>'.$fontetext.'</small>';
    echo '                <div class="row col-12">';
    echo '                    <div class="col-12 d-flex justify-content-end">';
    echo '                        <a aria-label="'.$arialabellink.'" class="btn btn-primary" href="'.$linknoticia.'">Ler mais</a>';
    echo '                    </div>';
    echo '                </div>';
    echo '            </section>';
    echo '        </div>';
    echo '    </div>';
    echo '</div>';    
    }

buscarNoticias2();

$conn->close();

?>