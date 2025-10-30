<?php
// codice php
    $lista = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $nome = "nome1";
    $s = ("<h1 style='color:blue'>Hello $nome </h1>");
    echo($s);
 
    foreach($lista as $k => $v){
        echo("<p>$k: $v</p>");
    }

?>