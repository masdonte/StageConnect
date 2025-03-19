<nav>
   <a class="logo"><span></span></a>
   <ul>
      <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
      <li><a href="/STAGE-SIO1/pages/offer.php">Offres de stage</a></li>
      <li><a href="/STAGE-SIO1/pages/apply.php">Postuler</a></li>
      <li><a href="/STAGE-SIO1/pages/review.php">Avis</a></li>
      <li><a href="/STAGE-SIO1/pages/faq.php">FAQ</a></li>

      <?php
      if (isset($_SESSION["connected"]) && $_SESSION["connected"]) {
         ?>
         <li>Bienvenue <?php
         echo $_SESSION["nom"];
         ?></li><?php
      }
      ?>
      <li>
      <li>
         <?php
         if (isset($_SESSION["connected"])){
         ?>
         <form method="post">
            <button type="submit" name="logout" class="button-connect">Se déconnecter</button>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
               session_unset();
               session_destroy();
            }
         }
            ?>
         </form>
      </li>
   </ul>
</nav>