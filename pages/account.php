<?php
include("../include/permission.php");
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="..\css\account.css">
  <link rel="stylesheet" href="..\css\style.css">

  <title>StageConnect</title>
  <?php
  include "../include/header.php";
  ?>
</head>
<body>
<div class="main-content">
    <div class="account-container">
        <h2 class="account-title">Informations du compte</h2>
        <table class="account-table">
            <tr>
                <th>Email</th>
                <th>Nom</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><?php echo htmlspecialchars($_SESSION["user_id"]); ?></td>
                <td><?php echo htmlspecialchars($_SESSION["nom"]); ?></td>
                <td>
                    <form method="POST">
                        <button class="logout-button" type="submit" name="logout">Se déconnecter</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
<?php
include "../include/footer.php";
?>
