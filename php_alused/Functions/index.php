<?php
// defineeririme funktioosni nimega paarsuseKontroll
function paarsuseKontroll($arv){
    if ($arv % 2 == 0) {
        echo $arv . ' on paaris <br>';
    } else {
        echo $arv.' on paaritu <br>';
        }

}

// kutsume funktsiooni tööle
paarsuseKontroll(7);