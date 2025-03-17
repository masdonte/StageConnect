<form method="get" action="">
    <div>
        <link rel="stylesheet" href="style.css">
        <input type="text" name="login"><label for="login">Insérez votre nom d'utilisateur</label>
        <br> <input type="password" name="password"><label for="password">Insérez votre mot de passe</label>
    </div>
    <input type="submit" value="Se connecter">

</form>

<?php


if (isset($_GET["login"]) && $_GET["login"] === "admin" && $_GET["password"] === "1234") {
    session_start();
    $_SESSION["username"] = $_GET["login"];
    header(header: "Location: dashboard.php");
}

$value = 'valeur de test';
setcookie("moncookie", $value, time() + 3600);
?>

