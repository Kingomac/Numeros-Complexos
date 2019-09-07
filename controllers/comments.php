<?php
function publicarComentario($user, $password, $contenido, $video){
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "complejos";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    $sqli = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $finalUser = $user;
        $foundUser = false;
        if($user !== null && $password !== null){
            $result = $sqli->query("SELECT nombre,password FROM usuarios");
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    if($row['nombre'] == $user && password_verify($password, $row['password'])){
                        $finalUser = $user;
                        $foundUser = true;
                    }
                }
            }
            if(!$foundUser){
                $sqli = new mysqli($servername, $dbusername, $dbpassword, $dbname);
                $hased_pass = password_hash($password, PASSWORD_BCRYPT);
                $sqli->query("INSERT INTO usuarios (nombre, password) VALUES ('$user','$hased_pass')");
            }
        }
        else{
            $finalUser = "Anónimo";
        }
        $sql = "INSERT INTO comentarios (contenido, usuario, video) VALUES ('$contenido', '$finalUser', '$video')";
        // use exec() because no results are returned
        $conn->exec($sql);
    
    $conn = null;
    $sqli->close();
}
?>