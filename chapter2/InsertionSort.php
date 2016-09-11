<?php
/*
 * not only object-oriented, just finish algorithms
 */
$dataFile = fopen("./sortData", "r") or die('Unable to open file');
$sortData = fread($dataFile, filesize("sortData"));
fclose($dataFile);
$sortArray = str_split($sortData);

/*
 * @param array $data
 * @return array $data
 */ 
function insertionSort($data){
    for($j=1; $j<sizeof($data); $j++){
        $key = $data[$j];
        $i = $j-1;
        while($i>=0 && $data[$i]>$key){
            $data[$i+1] = $data[$i];
            $i--;
            $data[$i+1] = $key;
        }
    }
    return $data;
}

$result = insertionSort($sortArray);
var_dump($result);
