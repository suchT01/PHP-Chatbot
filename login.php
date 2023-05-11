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
            <a href="index.php">Log Out</a>
        </nav>
    </header>
    <div class="container">
        <div class="form-box">
            <div class="form-value">
                <form action="logica/login.php" method="POST" id="login-form">
                    <h2>Login</h2>
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
                    <div class="forget">
                        <label for=""><input type="checkbox">Remember me <a href="#">Forget Password</a></label>
                    </div>
                    <button type="submit">Log In</button>
                    <div class="register">
                        <p>Don't have a account <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>