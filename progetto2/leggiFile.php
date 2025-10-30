<?php
    $nomeFile = "utente.json";
    //1. Verifico se il file esiste
    if(!file_exists($nomeFile)){
        die("Errore: il file non esiste");
    }else {
        $contenuto = file_get_contents($nomeFile);
        //var_dump ($contenuto); //restituisce sia il tipo della variabile sia il contenuto
        $dati = json_decode($contenuto, true); //true per ottenere il contenuto sotto forma di un array associativo
        //var_dump($dati);
        foreach($dati as $utente) {
            //recupero un oggetto alla volta
            //var_dump($utente);
            echo("<p>");
            foreach($utente as $k => $v) {
                echo ("$k : $v</br>");
            }
            echo("</p>");
        }
    }
?>