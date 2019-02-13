<?php
/**
 * Created by PhpStorm.
 * User: erlend.kollom
 * Date: 13.02.2019
 * Time: 14:14
 */
$eesNimi = 'Erlend';
$pereNimi = 'Kollom';
$vanus = 21;
$kaal = 90.1;
$sugu = 'mees';

if($sugu == 'mees'){
    echo '<p style="color: blue">';
} else {
    echo '<p style="color: red">';
}

//var_dump($eesNimi); //muutja sisu test vaatmine

echo 'Minu eesnimi on '.$eesNimi.'<br>';
echo 'Minu perenimi on '.$pereNimi.'<br>';
echo 'Minu vanus on '.$vanus.'<br>';
echo 'Minu kaal on '.$kaal.'<br>';
echo '</p>';