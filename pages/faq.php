<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?php
    include "../include/header.php";
    ?>
    <!--=============== CSS ===============-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css";>
</head>

<body>
<main>
    <div class="container">
        <h1>Questions fréquentes</h1>
        <div class="faq-section">
            <div class="faq-item">
                <input type="checkbox" id="faq1" class="faq-toggle">
                <label for="faq1" class="faq-question">
                    Comment se connecter ?
                    <i class="fas fa-chevron-down icon"></i>
                </label>
                <div class="faq-answer">
                    <p>Pour se connecter, vous devez créer un compte ou vous connecter directement. Suite à cela, vous pourrez
                    accéder à notre plateforme StageConnect.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq2" class="faq-toggle">
                <label for="faq2" class="faq-question">
                    À quoi sert notre site internet ?
                    <i class="fas fa-chevron-down icon"></i>
                </label>
                <div class="faq-answer">
                    <p>Il vous permet d'accéder à de nombreuses offres d'entreprises en fonction de votre spécialité, vous pourrez ainsi postuler directement pour un stage.</p>
                </div>
            </div>
            <div class="faq-item">
                <input type="checkbox" id="faq3" class="faq-toggle">
                <label for="faq3" class="faq-question">
                    Qui sont les créateurs de cette plateforme ?
                    <i class="fas fa-chevron-down icon"></i>
                </label>
                <div class="faq-answer">
                    <p>Les créateurs de cette plateforme sont Kamdine, Valentin, Réda et Célina.</p>
                </div>
            </div>
        </div>
    </div>
<main>
<?php include('../include/footer.php'); ?>
</body>

</html>