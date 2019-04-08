<?php
$action = (int)readline('Entrer une action : ');
switch($action){
    case 1:
        echo "Un\n";
        break;
    case 2:
        echo "deux\n";
        break;
    case 3:
        echo "trois\n";
        break;
    default:
        echo "Inconnu\n";
    
}