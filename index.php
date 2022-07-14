<?php
require_once ('vendor/autoload.php');

$faker = Faker\Factory::create();



$us = [];
for ($i=1;$i<10;$i++){
$user = array("name"=>$faker->name(),"email"=>$faker->email(),"score"=>mt_rand(0,10));
array_push($us,$user);

}

$file = fopen('newjson.json', 'w');
fwrite($file, json_encode($us));
fclose($file);



