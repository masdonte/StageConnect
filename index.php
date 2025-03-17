<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/index.php">Accueil</a></li>
                <li><a href="/pages/offer.php">Offres de stage</a></li>
                <li><a href="/pages/apply.php">Postuler</a></li>
                <li><a href="/pages/review.php">Témoignages</a></li>
            </ul>
        </nav>
        <div class="banner">
            <div class="titleMain">
                <h1>Gestion de stages</h1>
                <p>Votre avenir commence ici</p>
            </div>
            <div class="buttons">
                <button>Se connecter</button>
                <button>S'inscrire</button>
            </div>
        </div>
    </header>
    
    <main>
        <section id="offers">
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>

<?php 

try{
    $pdo = new PDO("mysql:host=localhost;dbname=challenge");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
?>
