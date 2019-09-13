<?php
include('./database.config.php');
if(isset($_POST['contenido'])){
    $contenido = $_POST['contenido'];
    $video = $_POST['video'];
    $canSubmit = true;
    $foundUser = false;
    if(isset($_POST['nombre'])){
        $usuario = $_POST['nombre'];
        $password =$_POST['password'];
        $query = "SELECT nombre,password FROM usuarios";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query failed: ' . mysqli_error($connection));
        }
        while($row = mysqli_fetch_array($result)){
            if($row['nombre'] == $usuario && password_verify($password, $row['password'])){
                $finalUser = $usuario;
                $foundUser = true;
            }
            if($row['nombre'] == $usuario && !password_verify($password, $row['password'])){
                $finalUser = 'error';
                $canSubmit = false;
                $foundUser = true;
            }
        }
        if(!$foundUser){
            $hased_pass = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO usuarios (nombre, password) VALUES ('$usuario','$hased_pass')";
            $finalUser = $usuario;
            $result = mysqli_query($connection, $query);
            if(!$result){
                die('Query failed: ' . mysqli_error($connection));
            }
            echo 'Cuenta creada correctamente';
        }
    }else{
        $finalUser = 'Anónimo';
    }
    if($canSubmit){
        $query = "INSERT INTO comentarios (contenido, usuario, video) VALUES ('$contenido', '$finalUser', '$video')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query failed: ' . mysqli_error($connection));
        }
        echo 'Comentario creado satisfactoriamente';
    }
    else{
        echo 'Datos de usuario incorrectos';
    }
}
?>