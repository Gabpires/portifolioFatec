<?php



function buscarNoticias () {
    global $conn;
    $sql = "SELECT titulo,tituloimg,img,altimg,fonteimg,texto,fontetext,arialabellink,linknoticia FROM noticias ORDER BY id DESC LIMIT 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        exibirNoticia($row['titulo'], $row['tituloimg'], $row['img'], $row['altimg'], $row['fonteimg'], $row['texto'], $row['fontetext'], $row['arialabellink'], $row['linknoticia'] );
    }
    }
     else {
        echo "Nenhuma notícia encontrada.";
    }
}



function exibirNoticia($titulo,$tituloimg,$img,$altimg,$fonteimg,$texto,$fontetext,$arialabellink,$linknoticia) {
        echo '<div class="col-lg-6 col-md-6 col-sm-12">';
        echo '    <div class="bordaroxanoticiatopo">';
        echo '        <div class="bordaroxanoticia">';
        echo '            <section>';
        echo '                <h2>' . $titulo . '</h2>';
        echo '                <figure>';
        echo '                    <h3 aria-hidden="true" class="tituloimg">' . $tituloimg . '</h3>';
        echo '                    <img class="imgcem" src="' . $img . '" alt="' . $altimg . '">';
        echo '                    <figcaption class="figure-caption">' . $fonteimg . '</figcaption>';
        echo '                </figure>';
        echo '                <p>' . $texto . '</p>';
        echo '                <small>' . $fontetext . '</small>';
        echo '                <div class="row">';
        echo '                    <div class="col-12 d-flex justify-content-end">';
        echo '                        <a aria-label="' . $arialabellink . '" class="btn btn-primary" href="' . $linknoticia . '">Ler mais</a>';
        echo '                    </div>';
        echo '                </div>';
        echo '            </section>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }

buscarNoticias();

?>