<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Stages</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <form method="get" action="">
        <div>
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
</body>

</html>