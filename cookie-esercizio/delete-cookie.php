<?php
if (isset($_COOKIE['utente'])) {
    // scadenza nel passato
    setcookie('utente', '', time() - 3600, "/");
}
header("Location: index.php");
exit;
?>