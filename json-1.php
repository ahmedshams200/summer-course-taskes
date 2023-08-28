<?php

$jsonString = file_get_contents('data.json');


$dataArray = json_decode($jsonString, true); 

if ($dataArray === null) {
   
    echo "Failed to decode JSON.";
} else {
   
    print_r($dataArray); 
}
?>
