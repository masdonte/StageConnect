<?php
session_start();
if (!isset($_SESSION["nom"])) {
    echo '<script>
            alert("Veuillez vous connecter");
            window.location.href = "login.php";
          </script>';
    exit();
}
?>
