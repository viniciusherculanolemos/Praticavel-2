<?php
session_start();
if (!isset($_SESSION['user'])) header('location: index.php');
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
        <?php include('partials/app-sidebar.php'); ?>
        <!-- sidebar -->
    </div>
       
    <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/app-topnav.php'); ?>
        <div class="dashboard_content">
            <div class="dashboard_content_main"></div>
        </div>
    </div>
 
   <script src="./js/script.js">       </script>
</body>
</html>
