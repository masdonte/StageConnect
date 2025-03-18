<?php include('./config.php'); ?>
<?php

            $stmt = $conn->query("SELECT * FROM avis");
            $stmt->execute();
            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(isset($_POST["input"])) {

                // Préparation de la requête
                $stmt = $conn->prepare("INSERT INTO avis (Avis) VALUES (:avis)");
                // Lier les paramètres
                // $Mail = $_POST[];
                $Avis = $_POST['input'];
                $stmt->bindParam(':avis',$Avis);
                // $stmt->bindParam(':Mail', $Avis);
                
                // Exécuter la requête
                $stmt->execute();
                header("location: index.php");
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
    <nav>
        <ul>
            <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
            <li><a href="/STAGE-SIO1/pages/offer.php">Offres de stage</a></li>
            <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
            <li><a href="/STAGE-SIO1/pages/review.php">Avis</a></li>
        </ul>
    </nav>
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
                <form  method="post" class="login__form">
                    <div class="login__content grid">
                    </div>

                    <div class="login__box">
                        <input type="text"  placeholder=" " class="login__input" name="input" required>
                        <label for="text" class="login__label">Votre avis</label>

                        <i class="ri-eye-off-fill login__icon login__password" id="loginPassword"></i>
                    </div>
            </div>

            <button type="submit" class="login__button">Publiez votre avis</button>
            </form>

            
        </div>
    </div>
    <!--=============== MAIN JS ===============-->

</body>
<footer>
    <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
</footer>


</html>