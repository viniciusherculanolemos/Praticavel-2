<?php

//entrar na pagina do dashboard.

session_start();
if(!isset($_SESSION['user'])) header('location: index.php');
$user = $_SESSION['user'];

   
?>


<!DOCTYPE html>
<html>
<head>
    <title>PAINEL - PRATICAVEL</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://kit.fontawesome.com/0935a16e93.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="dashboardmaincontainer">
        <?php include('partials/app-sidebar.php') ?>
          <!-- sidebar -->
        </div>
       
        <div class="dashboard_content_container" id="dashboard_content_container">
             <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
               
                <div class="dashboard_content_main">
                  <form  action="" class="formulariocad">
                      <div class="appformInputcontainer">
                            <label for="Nome">Nome </label>
                            <input type="text" class="appformInput" id="Nome" name="Nome" />
                        </div>
                         <div class="appformInputcontainer">
                            <label for="cargo">Cargo</label>
                            <input type="text" class="appformInput" id="cargo" name="cargo" />
                        </div>
                        <div class="appformInputcontainer">
                            <label for="email">Email</label>
                            <input type="text" class="appformInput" id="email" name="email" />
                        </div>
                         <div class="appformInputcontainer">
                            <label for="password">Senha</label>
                            <input type="password" class="appformInput" id="password" name="password" />
                        </div>
                         
                        <button type="submit"><i class="fa fa-plus"></i> Cadastrar Usuario</button>                   
                  </form>
                </div>
            </div>
        </div>
    </div>
 
    <script src="./js/script.js"> </script>
</body>
</html>