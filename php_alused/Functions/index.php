<?php
// defineeririme funktioosni nimega paarsuseKontroll
function kasPaaris($arv){

    if ($arv % 2 == 0) {
       $kontroll = true;
    } else {
        $kontroll = false;
        }
    return $kontroll;
}

function kirjeldus($paaris){
    if($paaris){
       echo ' on paaris';
    } else {
        echo ' on paaritu';
    }
    echo '<br>';
}

// kutsume funktsiooni tööle
for($arv = 0 ; $arv <=10; $arv++) {
    echo $arv;
    kirjeldus(kasPaaris($arv));
}