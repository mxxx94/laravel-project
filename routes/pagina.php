<?php

if ($_POST['send']){
    if (!empty($_POST['eta'])){
        echo $_POST['eta'];
    } else {
        echo "Hai lasciato vuoto il campo età";
    }
    echo "<p></p>"; //Mettiamo questo codice per inserire uno "spazio"
//Qui verrà mostrato ciò che ha inserito l'utente nel campo di nome eta.
    if (empty($_POST['nome'])){
        echo "Il campo nome è vuoto!";
    } else {
        echo $_POST['nome'];
    }
//Qui verrà mostrato ciò che ha inserito l'utente nel campo nome
}