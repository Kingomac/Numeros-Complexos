<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $meta ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../public/js/require.js" data-main="../public/js/main.min.js"></script>
    <title>Números complejos - <?php echo $title ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Números complejos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $active[0] ?>" href="/">Inicio</a>
                </li>
                <li class="nav-item <?php echo $active[1] ?>">
                    <a class="nav-link" href="/curiosidades">Curiosidades</a>
                </li>
                <li class="nav-item <?php echo $active[2] ?>">
                    <a class="nav-link" href="/videos">Vídeos</a>
                </li>
                <li class="nav-item <?php echo $active[3] ?>">
                    <a class="nav-link" href="/galerias">Galerías</a>
                </li>
                <li class="nav-item <?php echo $active[4] ?>">
                    <a class="nav-link" href="/realidad">Realidad</a>
                </li>
                <li class="nav-item <?php echo $active[5] ?>">
                    <a class="nav-link" href="/como-hacerlo-en-geogebra">Como hacerlo en Geogebra</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Contido -->
    <div class="container my-3">
    <?php
    if(isset($content)){
        echo $content;
    }
    ?>
    </div>
     </body>

</html>