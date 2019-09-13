<?php
include('./database.config.php');
if(isset($_POST['video'])){
    $video = $_POST['video'];
    $query = "SELECT * FROM comentarios WHERE video='$video' ORDER BY id DESC";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query failed: ' . mysqli_error($connection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $row['id'],
            'usuario' => $row['usuario'],
            'contenido' => $row['contenido'],
            'creacion' => $row['creacion']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}
?>