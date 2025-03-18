<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=challenge", "root", "");

    //Configuration de PDO pour permettre la bonne gestion des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/gestion.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
                <li><a href="/STAGE-SIO1/pages/gestion.php">Gestion de vos offres de stage</a></li>
                <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
                <li><a href="/STAGE-SIO1/pages/review.php">Témoignages</a></li>
            </ul>
        </nav>
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
    <footer>
        <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
    </footer>

    <script src="../script.js"></script>
</body>

</html>