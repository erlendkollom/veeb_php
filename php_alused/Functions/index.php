<?php
// defineeririme funktioosni nimega paarsuseKontroll
function paarsuseKontroll($arv){

    if ($arv % 2 == 0) {
       $kontroll = $arv .' on paaris <br>';
    } else {
        $kontroll = $arv.' on paaritu <br>';
        }
    return $kontroll;
}

// kutsume funktsiooni tööle
for($arv = 0 ; $arv <=10; $arv++) {
    $kontroll = paarsuseKontroll($arv);
    echo $kontroll;
}