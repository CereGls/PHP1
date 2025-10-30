<?php
//Leggo gli utenti dal file JSON invece dell'array fisso
$nomeFile = "utente.json";

//1. Verifico se il file esiste
if(file_exists($nomeFile)){
    $contenuto = file_get_contents($nomeFile);
    $utenti = json_decode($contenuto, true);
}else{
    $utenti = [];
}
?>

<html>
    <head>
    </head>
    <body>
        <h1>Controllo credenziali</h1>
        <?php
        //Controllo parametri
        if(!isset($_GET["lg"]) || !isset($_GET["psw"])){
            echo ("<p style = 'color : red'> Parametri mancanti </p>");
            exit();
        }
        
        $login_inserito = $_GET["lg"];
        $password_inserita = $_GET["psw"];
        $trovato = false;
        
        //Cerco l'utente nel file JSON
        foreach($utenti as $utente){
            if($utente["login"] === $login_inserito && $utente["password"] === $password_inserita){
                $trovato = true;
                echo ("<h3 style = 'color : green'> ACCESSO CONSENTITO </h3>");
                echo ("<h5 style = 'color : blue'> CREDENZIALI RECUPERATE: </h5>");
                echo "<h9>Login: " . $utente["login"] . " " . "Password: " . $utente["password"] . "</h9>";
                break;
            }
        }
        
        if(!$trovato){
            echo ("<h3 style = 'color : red'> CREDENZIALI ERRATE </h3>");
            echo ("<h5 style = 'color : blue'> IMPOSSIBILE RECUPERARE CREDENZIALI</h5>");
        }
        ?>
        <br>
        <br>
        <a href="registrazione.html">Registrati</a>
        <a href="index.html">Accesso</a>
    </body>
</html>