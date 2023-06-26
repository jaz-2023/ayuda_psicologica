<?php
if (!empty($_POST["Enviar"])) {
    #code
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $mensaje = $_POST["mensaje"];
    $result = $conexion->query("insert into solicitud(nombre, correo, celular, mensaje) values ('$nombre','$correo','$celular','$mensaje')");
    if ($result==1) {
       echo '<div> <h3>Solicitud registrada!</h3> </div>';
    } else {
        echo '<div> <h3>Error!, intente de nuevo.</h3> </div>'; 
    }
}
?>