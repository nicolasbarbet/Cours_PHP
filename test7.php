<?php
/*function bonjour($nom = 'Nicolas'){//valeur par défaut
    return 'Bonjour '.$nom."\n";
}

$salut = bonjour();
echo $salut;
*/

function repondreOuiNon($question){
    while(true){
        $reponse = readline("$question\n");
        if($reponse === 'o'){
            return true;
        }elseif($reponse === 'n'){
            return false;
        }
    }  
}

$reponseFonction = repondreOuiNon('Miaou ?');
var_dump($reponseFonction);