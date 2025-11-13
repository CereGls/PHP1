<?php
if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    // cookie valido per 1 ora
    setcookie("utente", $nome, time() + 3600);
    header("Location: index.php");
    exit;
} else {
    echo "Errore: nessun nome ricevuto.";
}
?>