<?php 
$file = 'newjson.json';
$file2 = 'users.csv';

if(file_exists($file)){
    $fopen = file_get_contents($file);
    $obj = json_decode($fopen,true);
    echo "<pre>";
    print_r($obj);
    echo "</pre>";

}else{
    echo "file not read";
}

$fp = fopen($file2, 'w');
foreach ($obj as $ob){
    fputcsv($fp, $ob,';','"');
}
fclose($fp);
