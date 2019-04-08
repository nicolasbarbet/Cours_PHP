<?php
$notes = [];
$note = null ;
$entree;

while($note !== 'fin'){
    $note = readline("Enter une note ou 'fin' :");
    if($note!=='fin'){
        $note = (int)$note;
        $notes[] = $note;
    }
}

foreach($notes as $note){
    echo "$note\n";
}