<?php
session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/STAGE-SIO1/css/index.css">

    <title>StageConnect</title>
    <?php
        include "../include/header.php";
    ?>
</head>
<body>
    <?php
        if (isset($connected)) {
            ?>
            
        <?php
        } else {
            ?>
            <div class="banner">
            <div class="titleMain">
                <h1>Gestion de stages</h1>
                <p>Votre avenir commence ici</p>
            </div>
            <div class="buttons">
                <button><a href="/STAGE-SIO1/pages/login.php">Se connecter</button>
            </div>
        </div>
        <?php }
        ?>
    <!--=============== MAIN JS ===============-->
    <script src="script.js"></script>
</body>
    <footer>
      <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
   </footer>
</html>