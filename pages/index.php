<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
                <li><a href="/STAGE-SIO1/pages/offer.php">Offres de stage</a></li>
                <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
                <li><a href="/STAGE-SIO1/pages/review.php">Témoignages</a></li>
            </ul>
        </nav>
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
        
    </header>
    <footer>
        <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>