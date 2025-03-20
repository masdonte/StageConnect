<nav>
   <a class="logo"><span></span></a>
   <ul>
<nav class="navbar">
   <div class="nav-container">
      <div class="logo-container">
         <a class="logo">StageConnect<span>.</span></a>
      </div>
   <ul class="menu-links">
      <li><a href="/STAGE-SIO1/pages/index.php">Accueil</a></li>
      <li><a href="/STAGE-SIO1/pages/offer.php">Offres de stage</a></li>
      <li><a href="/STAGE-SIO1/pages/gestion.php">Postuler</a></li>
      <li><a href="/STAGE-SIO1/pages/review.php">Avis</a></li>
      <li><a href="/STAGE-SIO1/pages/faq.php">FAQ</a></li>

   
      <?php
      if (isset($_SESSION["connected"]) && $_SESSION["connected"]) {
         ?>
         <li>
            <a href="/STAGE-SIO1/pages/account.php">Gérer son compte</a>
         </li>
         <?php
      }
      ?>
   </div>
   </ul>
</nav>