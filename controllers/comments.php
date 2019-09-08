<?php
include('database.config.php');
function publicarComentario($user, $password, $contenido, $video){
    $conn = new PDO(DB_PDO, DB_USER, DB_PASSWORD);
    $sqli = new mysqli(SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $finalUser = $user;
    $foundUser = false;
    $incorrectData = false;
    if($user !== null && $password !== null){
        $result = $sqli->query("SELECT nombre,password FROM usuarios");
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                if($row['nombre'] == $user && password_verify($password, $row['password'])){
                    $foundUser = true;
                }
                if($row['nombre'] == $user  && !password_verify($password,$row['password'])){
                    $foundUser = true;
                    $incorrectData = true;
                    echo 'Datos incorrectos';
                }
            }
        }
        if(!$foundUser){
            $hased_pass = password_hash($password, PASSWORD_BCRYPT);
            $sqli->query("INSERT INTO usuarios (nombre, password) VALUES ('$user','$hased_pass')");
        }
    }
    else{
        $finalUser = "Anónimo";
    }
    if(!$incorrectData){
        $sql = "INSERT INTO comentarios (contenido, usuario, video) VALUES ('$contenido', '$finalUser', '$video')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
    $conn = null;
    $sqli->close();
}
function leerComentarios($video){
    $conn = new mysqli(SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    $result = $conn->query("SELECT contenido, usuario FROM comentarios WHERE video='$video' ORDER BY id DESC");
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<div class="card m-1 p-1"><h6 class="card-title">' . $row['usuario'] . '</h6><p class="card-text">' . $row['contenido'] .'</p></div>';
        }
    }
}
?>