<?php

session_start();
$username = $_SESSION['username'];

if (!isset($username)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Chatbot UGMA</title>
</head>
<body>
    <header class="header">
        <div class="name-navbar">CHATBOT UGMA</div>
        <nav class="nav">
            <a href="logica/logout.php">Log Out</a>
        </nav>
    </header>
    <div class="container">
        <div class="chatbot">
            <div class="tittle">
                <p>CHATBOT UGMA</p>
            </div>
            <div class="form-chatbot">
                <div class="bot-inbox inbox">
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="msg-header">
                        <p>Hola, ¿cómo puedo ayudarte?</p>
                    </div>
                </div>
            </div>
            <div class="typing-field">
                <div class="input-data">
                    <input id="data" type="text" placeholder="Escribe algo aqui..." required>
                    <button id="send-btn">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form-chatbot").append($msg);
                $("#data").val('');
                $.ajax({
                    url: 'logica/db.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fa-solid fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form-chatbot").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form-chatbot").scrollTop($(".form-chatbot")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
</body>
</html>