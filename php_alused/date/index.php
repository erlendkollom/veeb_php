<?php

$eesti_kuud = array(
  2=> 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember'
);

$eesti_paevad = array(
    1=>'esmaspäev',
        'teisipäev',
        'kolmapäev',
        'neljapäev',
        'reede',
        'laupäev',
        'pühapäev'
);
$paevSonaga = $eesti_paevad[date('n')];
$paevNumbriga =date('d');
$aasta = date('Y');
$kuu = $eesti_kuud[date('n')];

$now = time(); // praegune kellaaeg
//jaanipäev
$your_date = strtotime("2019-06-24");
//arvutan välja ajavahe
$datediff = $your_date - $now;
//ümardan arvu päevadeni
echo round($datediff / (60 * 60 * 24));