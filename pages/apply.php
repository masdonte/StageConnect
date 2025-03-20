<?php
session_start();
include('./config.php');
// Récupération des avis
$stmt = $conn->prepare("SELECT * FROM offre ORDER BY Lieu_de_Stage DESC LIMIT 3");
$stmt->execute();
$avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérification et insertion de l'avis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["text"]) && isset($_SESSION["nom"])) {
    $nom = $_SESSION["nom"];
    $avisTexte = htmlspecialchars($_POST['text']);

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO offre (Lieu_de_Stage) VALUES (:Lieu_de_Stage)");
    $stmt->bindParam(':offre', $nom);
    //$stmt->bindParam(':avis', $avisTexte);

    // Exécution de la requête
    if ($stmt->execute()) {
        header("Location: offer.php ".$_SERVER["PHP_SELF"]); // Rafraîchir la page après envoi
        exit();
    } else {
        echo "<script>alert('Erreur lors de l\'envoi de votre avis.');</script>";
    }

}else if($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<script>alert('Veuillez vous connecter !');</script>";
}
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/offer.css">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="..\css\login.css">

    <title>StageConnect</title>
    <?php
    include "../include/header.php";
    ?>
</head>

<body>
    <!--=============== LOGIN IMAGE ===============-->
    <svg class="login__blob" viewBox="0 0 566 840" xmlns="http://www.w3.org/2000/svg">
        <mask id="mask0" mask-type="alpha">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />
        </mask>

        <g mask="url(#mask0)">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z" />

            <!-- Insert your image (recommended size: 1000 x 1200) -->
            <image class="login__img" href="assets/img/bg-img.jpg" />
        </g>
    </svg>

    <!--=============== LOGIN ===============-->
    <div class="login container grid" id="loginAccessRegister">
        <!--===== LOGIN ACCESS =====-->
        <div class="login__access">
            <h1 class="login__title">Postulez votre organisation</h1>
            <div class="login__area">
                <form action="" method="POST" class="login__form">
                    <div class="login__content grid">
                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Lieu de Stage</label>
                             <i class="ri-mail-fill login__icon"></i>
                        </div>



                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Nom de l'entreprise</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Adresse</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                        <div class="login__box">
                        <input type="email" name="email" required placeholder=" " class="login__input">
                        <label for="emailCreate" class="login__label">Email</label>
                        <i class="ri-mail-fill login__icon"></i>
                    </div>

                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Numéro de Téléphone</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Date de Stage</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Horaire de Stage</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                        <div class="login__box">
                            <input type="text" name="text" id="text" required placeholder=" " class="login__input">
                            <label for="text" class="login__label">Type d'option visé</label>
                            <i class="ri-eye-off-fill login__icon login__text" id="logintext"></i>
                        </div>
                    </div>
                    <button type="submit" class="login__button">Connexion</button>
                </form>

                </p>
            </div>
        </div>


        <!--=============== MAIN JS ===============-->
        <script src="../js/login.js"></script>

</body>

</html>