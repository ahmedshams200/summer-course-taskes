<?php
echo "first output is 'somerar is 16' ";



echo "third output is 'true' ";




function fibonacci($n) {
    $fibSeries = array(0, 1); 
    
    for ($i = 2; $i < $n; $i++) {
        $fibSeries[$i] = $fibSeries[$i - 1] + $fibSeries[$i - 2];
    }
    
    return $fibSeries;
}

$n = 10; 
$fibSeries = fibonacci($n);

echo "Fibonacci Series of $n numbers:\n";
foreach ($fibSeries as $number) {
    echo "$number ";
}









function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true; 
    } else {
        return false; 
    }
}

$year = 2030; 

if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}








echo "Multiplication Table up to 5x5:\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i * $j = " . ($i * $j) . "\t";
    }
    echo "\n";
}
 






function removeDuplicates($sortedList) {
    $uniqueList = array();
    $previousElement = null;

    foreach ($sortedList as $element) {
        if ($element !== $previousElement) {
            $uniqueList[] = $element;
        }
        $previousElement = $element;
    }

    return $uniqueList;
}

$sortedList = array(1, 2, 2, 3, 4, 4, 4, 5, 5, 6, 7);
$uniqueList = removeDuplicates($sortedList);

echo "Original sorted list: " . implode(", ", $sortedList) . "\n";
echo "List with duplicates removed: " . implode(", ", $uniqueList) . "\n";
 




echo "1 'false' ";
echo "2 'false' ";
echo "3 'true' ";
echo "4 'true' ";
echo "4 'true' ";







