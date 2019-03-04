<?php
    for($kord = 1; $kord <=10; $kord++) {
        header('Refresh: 1');
    }
?>
<style>
    div {
        margin: auto;
        width: 100px;
        height: 100px;
        font-size: 75px;
        padding-top:15px;

    }
    .paaris{
        background: red;

    }

    .paaritu {
        background: green;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: erlend.kollom
 * Date: 13.02.2019
 * Time: 14:14
 */
for ($kord =1; $kord <=10; $kord++){

}
//Genereerime arvu 0-100 vahel
$arv = rand(0,100);
//arvutame jäägi 2-ga jagamisel.
$jaak = $arv % 2;
if ($jaak == 0 ){
    echo '<div class="paaris">'.$arv.'</div>';
}

else{
    echo '<div class="paaritu">'.$arv.'</div>';
}

