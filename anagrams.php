<?php
function areAnagrams($str1, $str2) {
   
    $str1 = str_replace(' ', '', strtolower($str1));
    $str2 = str_replace(' ', '', strtolower($str2));
    
   
    $sortedStr1 = str_split($str1);
    sort($sortedStr1);
    
    $sortedStr2 = str_split($str2);
    sort($sortedStr2);
    
   
    return $sortedStr1 === $sortedStr2;
}


$str1 = "listen";
$str2 = "silent";
if (areAnagrams($str1, $str2)) {
    echo "$str1 and $str2 are anagrams.\n";
} else {
    echo "$str1 and $str2 are not anagrams.\n";
}

$str3 = "hye";
$str4 = "bye";
if (areAnagrams($str3, $str4)) {
    echo "$str3 and $str4 are anagrams.\n";
} else {
    echo "$str3 and $str4 are not anagrams.\n";
}
