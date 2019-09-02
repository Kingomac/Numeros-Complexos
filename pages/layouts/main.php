<!doctype html>
<html lang="gl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php echo $meta ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">

    <title>Números complexos - <?php echo $title ?></title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Números complexos</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="videos.html">Vídeos</a>
                </li>
                <li class="nav-item <?php echo $active[3] ?>">
                    <a class="nav-link" href="/galerias">Galerías</a>
                </li>
                <li class="nav-item <?php echo $active[4] ?>">
                    <a class="nav-link" href="/galerias">Realidade</a>
                </li>
                <li class="nav-item <?php echo $active[5] ?>">
                    <a class="nav-link" href="/galerias">Como facelo en Geogebra</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Contido -->
    <div class="container mt-3">
    <?php echo $content ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
  </body>
</html>