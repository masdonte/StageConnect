<?php
session_start();
include('./config.php');

// Récupération des avis
$stmt = $conn->prepare("SELECT * FROM avis ORDER BY identifiant_id DESC LIMIT 3");
$stmt->execute();
$avis = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Vérification et insertion de l'avis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["input"]) && isset($_SESSION["nom"])) {
    $nom = $_SESSION["nom"];
    $avisTexte = htmlspecialchars($_POST['input']);

    // Préparation de la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO avis (Mail, Avis) VALUES (:mail, :avis)");
    $stmt->bindParam(':mail', $nom);
    $stmt->bindParam(':avis', $avisTexte);

    // Exécution de la requête
    if ($stmt->execute()) {
        header("Location: ".$_SERVER["PHP_SELF"]); // Rafraîchir la page après envoi
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

    <!--=============== REMIXICONS ===============-->

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="..\css\review.css">

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
            <h1 class="login__title">Donnez votre avis</h1>

            <div class="login__area">
                <form method="post" class="login__form">
                    <div class="login__content grid">
                    </div>

                    <div class="login__box">
                        <input type="text" placeholder=" " class="login__input" name="input" required>
                        <label for="text" class="login__label">Votre avis</label>

                        <i class="ri-eye-off-fill login__icon login__password" id="loginPassword"></i>
                    </div>
            </div>

            <button type="submit" class="login__button">Publiez votre avis</button>
            </form>
            <!--===== SECTION DES AVIS =====-->

            <div class="login__reviews">
                <h2 class="login__reviews-title">Avis des clients</h2>
                <ul class="login__reviews-list">

                    <?php $stmt = $conn->prepare("SELECT * FROM Avis ORDER BY identifiant_id DESC LIMIT 3 ");
                    $stmt->execute();
                    $avis = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($avis as $review) {
                        echo "<li>" . $review["Mail"] . " : " . $review["Avis"] . "</li>";
                    }
                    ?>



                    <!-- Vous pouvez ajouter d'autres avis ici -->
                </ul>
            </div>


        </div>
    </div>
    <!--=============== MAIN JS ===============-->

</body>
<footer>
    <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
</footer>


</html>