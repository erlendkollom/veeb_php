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

switch ($sugu){
    case 'mees':
        echo '<p style="color: blue">';
        break;
    case 'naine':
        echo '<p style="color: red">';
        break;
    default:
        echo '<p style="color: green">';
        break;
}


echo 'Minu eesnimi on '.$eesNimi.'<br>';
echo 'Minu perenimi on '.$pereNimi.'<br>';
echo 'Minu vanus on '.$vanus.'<br>';
echo 'Minu kaal on '.$kaal.'<br>';
echo '</p>';