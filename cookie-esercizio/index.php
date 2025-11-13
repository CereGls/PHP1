<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if (isset($_COOKIE['utente'])) {
    $nome = htmlspecialchars($_COOKIE['utente']);
    echo "<h1>Benvenuto, $nome!</h1>";
    echo '<form action="delete-cookie.php" method="post">
            <button type="submit">Cancella Cookie</button>
          </form>';
} else {
    echo '<form action="set-cookie.php" method="post">
            <label for="nome">Inserisci il tuo nome:</label>
            <input type="text" id="nome" name="nome" required>
            <button type="submit">Salva Cookie</button>
          </form>';
}
?>
</body>
</html>