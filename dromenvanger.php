<?php

echo"Hoeveel Vrienden Zal ik vragen om hun droom?".PHP_EOL;
$aantalvrienden = readline();

$info = array();

for ($i=0; $i <= $aantalvrienden-1 ; $i++){
echo"Wat is jou naam?".PHP_EOL;
$naam = readline();

echo"Hoeveel dromen ga je opgeven?".PHP_EOL;
$aantaldromen = readline();
$ad = [];

for ($j =1; $j <= $aantaldromen; $j++){
echo"Wat is je droom?".PHP_EOL;
$droom = readline();
$ad [] = $droom;

}
$info[$naam]=$ad;
} 

foreach ($info as $naam => $test){
    foreach($test as $test => $alles){
        echo"$naam zijn droom is: $alles".PHP_EOL;
    }

}



?>