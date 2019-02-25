<?php



$raamatUks = array(
    'pealkiri' => 'Kui paanikahoog ründab',
    'hind' => 18.90,
    'keel' => 'eesti',
    'autor' => 'Aine Tubridy'
);

$raamatKaks = array(
    'pealkiri' => 'Eesti side ja interneti 100 aastat',
    'hind' => 15.00,
    'keel' => 'eesti',
    'autor' => 'Jaak Ulman'
);

$raamatKolm = array(
    'pealkiri' => 'Toskaana aastat',
    'hind' => 26.95,
    'keel' => 'eesti',
    'autor' => 'Elizabeth Romer'
);

$raamatNeli = array(
    'pealkiri' => 'Jänku-Jassi kingitus',
    'hind' => 7.95,
    'keel' => 'eesti',
    'autor' => 'Julia Sigarova'
);

$raamatud = array();
$raamatud['Esimene raamat'] = $raamatUks;
$raamatud['Teine raamat'] = $raamatKaks;
$raamatud['Kolmas raamat'] = $raamatKolm;
$raamatud['Neljas raamat'] = $raamatNeli;


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




