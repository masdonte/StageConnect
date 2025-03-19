<?php
session_start();
include('./config.php'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/offer.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <?php
        include "../include/header.php";
        ?>
    </header>
    <main>
        <div class="card">
            <div class="card-img-holder">
                <img src="/STAGE-SIO1/asset/worker.png" alt="Blog image">
            </div>
            <h3 class="blog-title">
                <?php $stmt = $conn->prepare("SELECT * FROM offre LIMIT 1 ");
                $stmt->execute();
                $nom_de_l_organisation = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($nom_de_l_organisation as $nom) {
                    echo "<li>" . $nom["Nom_de_l_entreprise"] . "</li>";
                } ?>

            </h3>
            <span class="blog-time"></span>
            <p class="description">
                <?php $stmt = $conn->prepare("SELECT * FROM offre");
                $stmt->execute();
                $Lieu_de_Stage = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($Lieu_de_Stage as $Lieu) {
                    echo $Lieu["Lieu_de_Stage"];

                }
                ?>


            </p>
            <div class="options">
                <span>
                    <?php $stmt = $conn->prepare("SELECT * FROM offre");
                    $stmt->execute();
                    $Adresse = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($Adresse as $Lieu) {
                        echo $Lieu["Adresse"];

                    }
                    ?>
                </span>
                <button class="btn">Postuler</button>
            </div>
        </div>
        < </main>
            <footer>
                <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
            </footer>

            <script src="script.js"></script>
</body>

</html>