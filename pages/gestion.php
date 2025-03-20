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

        <div class="login_box">
            <div class="ajouter">
                <form action="">
                    <button type="submit" class="login__button">Modifier/Supprimer vos offres de stage [En
                        travaux]</button>
                </form>

            </div>
            <div class="modifier">
                <form action="../pages/apply.php">
                    <button type="submit" class="login__button">Ajouter une nouvelle offre de stage</button>
                </form>

            </div>
        </div>
    </main>
    <?php include('../include/footer.php'); ?>

    <script src="../script.js"></script>
</body>

</html>