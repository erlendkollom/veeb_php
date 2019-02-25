<?php

$raamatud = array(

$raamatUks = array(
    'pealkiri' => 'Kui paanikahoog ründab',
    'hind' => 18.90,
    'keel' => 'eesti',
    'autor' => 'Aine Tubridy'
),

$raamatKaks = array(
    'pealkiri' => 'Eesti side ja interneti 100 aastat',
    'hind' => 15.00,
    'keel' => 'eesti',
    'autor' => 'Jaak Ulman'
),

$raamatKolm = array(
    'pealkiri' => 'Toskaana aastat',
    'hind' => 26.95,
    'keel' => 'eesti',
    'autor' => 'Elizabeth Romer'
),

$raamatNeli = array(
    'pealkiri' => 'Jänku-Jassi kingitus',
    'hind' => 7.95,
    'keel' => 'eesti',
    'autor' => 'Julia Sigarova'
)
);

function tabeliPais($andmed){
    echo '<thead>';
    echo '<tr>';
    foreach ($andmed as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
    echo '</thead>';
}
function tabeliRida($andmed){
    echo '<tr>';
    foreach ($andmed as $elemendiNimetus => $elemendiVaartus){
        echo '<td>'.$elemendiVaartus.'</td>';
    }
    echo '</tr>';
}
function tabel($andmed){
    echo '<table border="1">';
    tabeliPais(array_keys($andmed[0]));
    echo '<tbody>';
    foreach ($andmed as $element){
        tabeliRida($element);
    }
    echo '</tbody>';
    echo '</table>';
}
tabel($raamatud);



echo '<hr>';


foreach ($raamatud as $raamatuPealkiri=>$raamatuAndmed){
    if($raamatuAndmed['hind'] <= 15 ){
        echo '<p style="color: darkorange">';
}   else {
        echo '<p style="color: deepskyblue">';
    }
    echo '<b>'.$raamatuPealkiri.'</b><br>';
    echo '<ul>';
    foreach ($raamatuAndmed as $nimetus=>$vaartus){
        echo '<li>'.$nimetus.' - '.$vaartus.'</li>';
    }
    echo '</ul>';
}




