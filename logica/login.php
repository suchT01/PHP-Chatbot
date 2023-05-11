<?php

require 'conection.php';
session_start();

$user = $_POST['user'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar FROM users WHERE name_user = '$user'";
$consulta = mysqli_query($conex,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){

    $consulta_password = "SELECT password FROM users WHERE name_user = '$user'";
    $resultado = mysqli_query($conex,$consulta_password);

    if($resultado){

        $fila = mysqli_fetch_array($resultado);
        $password_cifrada = $fila['password'];

        if (password_verify($password,$password_cifrada)){

            $_SESSION['username']=$user;
            header("location:../chatbot.php"); 

        }else{

            echo "<script>
                    alert('Contraseña Incorrecta.');
                    window.location.href = '../login.php'
                </script>";

        }

    }else{

        echo mysqli_errno($conex);

    }

}else{

    echo "<script>
            alert('El usuario NO existe.');
            window.location.href = '../login.php'
        </script>";
    
}

?>