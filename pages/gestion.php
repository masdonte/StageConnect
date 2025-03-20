<?php
include("../include/permission.php");
include("../pages/config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/gestion.css">

</head>

<body>
    <header>
        <?php
        include("../include/header.php");
        ?>
    </header>
    <main>
        <div class="gestion">
            <div class="modifier">
                <h3>Modifier/Supprimer vos offres de stage</h3>
                
            </div>
            <div class="ajouter">
                <h3>Ajouter des offres de stage</h3>
            </div>
        </div>
    </main>
    <?php include('../include/footer.php'); ?>

    <script src="../script.js"></script>
</body>

</html>