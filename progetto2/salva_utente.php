<?php
//Controllo che tutti i campi siano stati inseriti
if(!isset($_GET["nome"]) || !isset($_GET["cognome"]) || 
   !isset($_GET["email"]) || !isset($_GET["login"]) || 
   !isset($_GET["password"])){
    echo "<p style='color: red'>Errore: campi mancanti</p>";
    exit();
}

$nomeFile = "utente.json";

//Leggo il file esistente
if(file_exists($nomeFile)){
    $contenuto = file_get_contents($nomeFile);
    $dati = json_decode($contenuto, true);
}else{
    $dati = [];
}

//Controllo se login esiste già
foreach($dati as $utente){
    if($utente["login"] === $_GET["login"]){
        echo "<h2 style='color: red'>Login già utilizzata</h2>";
        exit();
    }
}

//Creo nuovo utente
$nuovoUtente = [
    "nome" => $_GET["nome"],
    "cognome" => $_GET["cognome"], 
    "email" => $_GET["email"],
    "login" => $_GET["login"],
    "password" => $_GET["password"]
];

//Aggiungo all'array
$dati[] = $nuovoUtente;

//Salvo nel file
file_put_contents($nomeFile, json_encode($dati, JSON_PRETTY_PRINT));

echo "<h3 style='color: green'>Registrazione completata</h3>";
echo "<a href='index.html'>Torna al login</a>";
?>