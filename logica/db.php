<?php

require 'conection.php';
session_start();

// Obtener el valor de $username de la sesión
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;


$getMesg = mysqli_real_escape_string($conex, $_POST['text']);

//comprobando la consulta del usuario a la consulta de la base de datos
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conex, $check_data) or die("Error");

// si la consulta del usuario coincide con la consulta de la base de datos, mostraremos la respuesta; de lo contrario, irá a otra declaración
if (mysqli_num_rows($run_query) > 0) {
    //recuperando la reproducción de la base de datos de acuerdo con la consulta del usuario
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacenando la respuesta a una variable que enviaremos a ajax
    $replay = $fetch_data['replies'];
    echo $replay;
} else {

    $sql_person = "SELECT id_user FROM users WHERE name_user = '$username'";
    $resultado_id = mysqli_query($conex,$sql_person);
    $array_id = mysqli_fetch_array($resultado_id);
    $id_user = $array_id['id_user'];

    $sql_agregar = "SELECT id FROM person WHERE id_user_id = '$id_user'";
    $result = mysqli_query($conex,$sql_agregar);
    $array_id_person = mysqli_fetch_array($result);
    $id_person = $array_id_person['id'];

    echo "¡Lo siento, no puedo ayudarte con este inconveniente! Favor comunícate con el administrador en el siguiente enlace:
    </br><a href='#' style='text-decoration:none'>Contacto</a>";
    $sql = "INSERT INTO chatbot_no_replies(queries_no_replies,id_person) values ('$getMesg','$id_person')";
    mysqli_query($conex,$sql);
}

?>