<nav>
   <a class="logo">StageConnect<span>.</span></a>
   <ul>
      <li>StageConnect.</li>
      <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
      <li><a href="/STAGE-SIO1/pages/offer.php">Offres de stage</a></li>
      <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
      <li><a href="/STAGE-SIO1/pages/review.php">Avis</a></li>
      <?php
      if (isset($_SESSION["connected"]) && $_SESSION["connected"]) {
         ?>
         <li>Bienvenue <?php
         echo $_SESSION["nom"];
         ?></li><?php
      }
      ?>
   </ul>
</nav>