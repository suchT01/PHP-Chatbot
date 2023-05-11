<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Chatbot UGMA</title>
</head>
<body>
    <header class="header">
        <div class="name-navbar">CHATBOT UGMA</div>
        <nav class="nav">
            <a href="logica/logout.php">Log Out</a>
        </nav>
    </header>
    <div class="container-register">
        <div class="form-box-register">
            <div class="form-value">
                <form action="logica/register.php" method="POST">
                    <h2>Registro</h2>
                    <div class="input-box">                       
                        <i class="fa-solid fa-user"></i>
                        <input type="text" required name="user">
                        <label for="">Username</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required name="password">
                        <label for="">Password</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" required name="verificar_password">
                        <label for="">Verificar Password</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" required name="name">
                        <label for="">Nombre</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-regular fa-address-card"></i>
                        <input type="text" required name="last_name">
                        <label for="">Apellido</label>
                    </div>
                    <div class="input-box">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" required name="email">
                        <label for="">Email</label>
                    </div>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>