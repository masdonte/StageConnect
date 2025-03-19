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
        <?php include "../include/header.php"; ?>
    </header>
    <main>
        <?php
        // Récupérer toutes les offres d'entreprises
        $stmt = $conn->prepare("SELECT * FROM offre");
        $stmt->execute();
        $offres = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Boucle à travers chaque offre et générer une carte
        foreach ($offres as $offre) {
            ?>
            <div class="card">
                <div class="card-img-holder">
                    <img src="/STAGE-SIO1/asset/worker.png" alt="Blog image">
                </div>
                <h3 class="blog-title">
                    <?php echo $offre["Nom_de_l_entreprise"]; ?>
                </h3>
                <span class="blog-time"></span>
                <p class="description">
                    <?php echo $offre["Lieu_de_Stage"]; ?>
                </p>
                <div class="options">
                    <span>
                        <?php echo $offre["Adresse"]; ?>
                    </span>
                    <button class="btn">Postuler</button>
                </div>
            </div>
            <?php
        }
        ?>
    </main>
    <?php include('../include/footer.php'); ?>


    <script src="script.js"></script>
</body>

</html>
