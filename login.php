<?php

//entrar na pagina do dashboard.

session_start();
if(isset($_SESSION['user'])) header('location: dashboard.php');

$error_message = '';
if ($_POST){
    include('bancodedados/connection.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM usuario WHERE email="'. $username .'" AND password="' .$password .'" LIMIT 1';
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $user = $stmt->fetchALL()[0];
    $_SESSION['user'] = $user;

     header('Location: dashboard.php');
    
        // Se houver algum resultado, execute o código aqui
    } else $error_message = 'Certifique-se de que o nome de usuário e a senha estejam corretos.';
    
}
   
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOGIN - PRATICAVEL</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginbody">
    <?php 

    if (!empty($error_message)){   ?>     
    <div id="errormessage">
        <strong>ERROR:</strong> <p> <?= $error_message ?> </p>
    </div>
    <?php } ?>
    <div class="container">
   
        <div class="loginheader">
            <h1>PRATICAVEL</h1>
            <p>PRATICAVEL EVENTOS LTDA</p>
        </div>
        
        <div class="loginbody">
            <form action="login.php" method="POST">
                <div class="loginInputsContainer">
                    <label for="username">Usuário</label>
                    <input placeholder="Digite seu Usuário" name="username" type="text" />
                </div>  
                <div class="loginInputsContainer">
                    <label for="password">Senha</label>
                    <input placeholder="Digite sua Senha" name="password" type="password" />
                </div>
                <div class="loginButtonContainer"> 
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

