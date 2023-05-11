<?php

require 'conection.php';

$role_id = 2;
$name_user = $_POST['user'];
$password = $_POST['password'];
$verificar_password = $_POST['verificar_password'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$verificacion_user = "SELECT COUNT(*) as total FROM users WHERE name_user = '$name_user'";
$resultado_verificacion = mysqli_query($conex,$verificacion_user);
$array_f = mysqli_fetch_array($resultado_verificacion);
$total_users = $array_f['total'];

if ($total_users>0){

    echo "<script>
            alert('Usuario ya registrado.');
            window.location.href = '../register.php'
        </script>";

}else{

    $verificacion_email = "SELECT COUNT(*) as total FROM person WHERE email = '$email'";
    $resultado_email = mysqli_query($conex,$verificacion_email);
    $array_e = mysqli_fetch_array($resultado_email);
    $total_email = $array_e['total'];

    if ($total_email>0){

        echo "<script>
                alert('Email ya registrado.');
                window.location.href = '../register.php'
            </script>";

    }else{
        if ($password == $verificar_password){

            $password_hash = password_hash($password,PASSWORD_DEFAULT);
            $sql_user = "INSERT INTO users(name_user,password,role_id) VALUES ('$name_user','$password_hash','$role_id')";
            $resultado_user = mysqli_query($conex,$sql_user);

            $sql_id = "SELECT id_user FROM users WHERE name_user = '$name_user'";
            $resultado_id = mysqli_query($conex,$sql_id);
            $array_id = mysqli_fetch_array($resultado_id);
            $id_user = $array_id['id_user'];

            $sql_persona = "INSERT INTO person(id_user_id,name,last_name,email) VALUES ('$id_user','$name','$last_name','$email')";
            $resultado_persona = mysqli_query($conex,$sql_persona);
            
            header("location:../chatbot.php");
            
        }else{
            echo "<script>
                alert('Contraseñas no coinciden.');
                window.location.href = '../register.php'
            </script>";
        }
    }

}

?>