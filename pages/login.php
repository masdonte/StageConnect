<!DOCTYPE html>
   <html lang="fr">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="..\css\login.css">
      
      <title>StageConnect</title>
      <nav>
         <a class = "logo">StageConnect<span>.</span></a>
         <ul>
             <li>StageConnect.</li>
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
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z"/>
         </mask>
      
         <g mask="url(#mask0)">
            <path d="M342.407 73.6315C388.53 56.4007 394.378 17.3643 391.538 
            0H566V840H0C14.5385 834.991 100.266 804.436 77.2046 707.263C49.6393 
            591.11 115.306 518.927 176.468 488.873C363.385 397.026 156.98 302.824 
            167.945 179.32C173.46 117.209 284.755 95.1699 342.407 73.6315Z"/>
      
            <!-- Insert your image (recommended size: 1000 x 1200) -->
            <image class="login__img" href="assets/img/bg-img.jpg"/>
         </g>
      </svg>      

      <!--=============== LOGIN ===============-->
      <div class="login container grid" id="loginAccessRegister">
         <!--===== LOGIN ACCESS =====-->
         <div class="login__access">
            <h1 class="login__title">Se connecter</h1>
            
            <div class="login__area">
               <form action="" class="login__form">
                  <div class="login__content grid">
                     <div class="login__box">
                        <input type="mail" id="email" required placeholder=" " class="login__input">
                        <label for="mail" class="login__label">E-mail</label>
            
                        <i class="ri-mail-fill login__icon"></i>
                     </div>
         
                     <div class="login__box">
                        <input type="password" id="password" required placeholder=" " class="login__input">
                        <label for="password" class="login__label">Mot de passe</label>
            
                        <i class="ri-eye-off-fill login__icon login__password" id="loginPassword"></i>
                     </div>
                  </div>
         
                  <a href="#" class="login__forgot">Mot de passe oublié ?</a>
         
                  <button type="submit" class="login__button">Connexion</button>
               </form>

      
               <p class="login__switch">
                  Pas de compte ? 
                  <button id="loginButtonRegister">Créer un compte</button>
               </p>
            </div>
         </div>
         <?php
         session_start();
         try {
            $pdo = new PDO("mysql:host=localhost;dbname=challenge", "root", "");
        
            //Configuration de PDO pour permettre la bonne gestion des erreurs
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
         
         // Récupérer les données du formulaire
         $email = $_POST['email'] ?? '';
         $password = $_POST['password'] ?? '';
         
         // Vérifier si l'utilisateur existe
         $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE mail = ?");
         $stmt->execute([$email]);
         $user = $stmt->fetch();
         
         if ($user && password_verify($password, $user['password'])) {
             $_SESSION['user_id'] = $user['id']; // Stocke l'utilisateur en session
             echo json_encode(["success" => true, "message" => "Connexion réussie"]);
         } else {
             echo json_encode(["success" => false, "message" => "Identifiants incorrects"]);
         }
         ?>
         <!--===== LOGIN REGISTER =====-->
         <div class="login__register">
            <h1 class="login__title">Créer un compte.</h1>

            <div class="login__area">
               <form action="" class="login__form">
                  <div class="login__content grid">
                     <div class="login__group grid">
                        <div class="login__box">
                           <input type="text" id="names" required placeholder=" " class="login__input">
                           <label for="names" class="login__label">Nom</label>
      
                           <i class="ri-id-card-fill login__icon"></i>
                        </div>
      
                        <div class="login__box">
                           <input type="text" id="surnames" required placeholder=" " class="login__input">
                           <label for="surnames" class="login__label">Prénom</label>
      
                           <i class="ri-id-card-fill login__icon"></i>
                        </div>
                     </div>
   
                     <div class="login__box">
                        <input type="email" id="emailCreate" required placeholder=" " class="login__input">
                        <label for="emailCreate" class="login__label">Email</label>
   
                        <i class="ri-mail-fill login__icon"></i>
                     </div>
   
                     <div class="login__box">
                        <input type="password" id="passwordCreate" required placeholder=" " class="login__input">
                        <label for="passwordCreate" class="login__label">Mot de Passe  </label>
   
                        <i class="ri-eye-off-fill login__icon login__password" id="loginPasswordCreate"></i>
                     </div>
                  </div>
   
                  <button type="submit" class="login__button">Créer un compte</button>
               </form>
   
               <p class="login__switch">
                  Déjà un compte? 
                  <button id="loginButtonAccess">Se connecter</button>
               </p>
            </div>
         </div>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="../js/login.js"></script>
   </body>
   <footer>
      <p>&copy; 2025 Gestion des Stages. Tous droits réservés. ASCI Chopin</p>
   </footer>
</html>