<?php
require_once ('vendor/autoload.php');

$faker = Faker\Factory::create();



for ($i=1;$i<11;$i++){
$arr[$i]=[$faker->name(),$faker->email(), mt_rand(0,10)];}
    foreach ($arr as $a=>$b){
        foreach ($b as $c) {
        $d[]=$c;
}
}


$file = fopen('newjson.json', 'a');
fwrite($file, json_encode($arr));
fclose($file);



