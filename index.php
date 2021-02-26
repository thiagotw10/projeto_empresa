<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>SGC</title>
</head>
<body>
    <div id="login-container">
    <img src="img/logo.png">
        <form action="login.php" method="POST">
            <label for="email">Login</label>
            <input type="text" name="usuario" id="email" placeholder="Digite sua Matricula ou Cpf" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="senha" id="password" placeholder="Digite sua senha">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Entrar">
        </form>
    </div>
    
</body>
</html>