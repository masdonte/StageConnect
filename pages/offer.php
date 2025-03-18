<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=challenge", "root", "");

    //Configuration de PDO pour permettre la bonne gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
$stmt = $pdo->prepare("SELECT * FROM offre");
?>
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
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="/STAGE-SIO1/pages/gestion.php">Gestion de vos offres de stage</a></li>
                <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
                <li><a href="/STAGE-SIO1/pages/review.php">Témoignages</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            ?>
            <div class="card">
                <div class="card-img-holder">
                    <img src="/STAGE-SIO1/asset/worker.png" alt="Blog image">
                </div>
                <h3 class="blog-title">ASCI</h3>
                <span class="blog-time">17/03/2025</span>
                <p class="description">
                    Developpement du site web interne de l'entreprise.
                </p>
                <div class="options">
                    <span>
                        ->
                    </span>
                    <button class="btn">Postuler</button>
                </div>
            </div><?php
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>