<?php
function isPalindrome($str) {
    
    $str = str_replace(' ', '', strtolower($str));
    
    
    $reversedStr = strrev($str);
    
    
    return $str === $reversedStr;
}


$string1 = "racecar";
if (isPalindrome($string1)) {
    echo "$string1 is a palindrome.\n";
} else {
    echo "$string1 is not a palindrome.\n";
}

$string2 = "hello";
if (isPalindrome($string2)) {
    echo "$string2 is a palindrome.\n";
} else {
    echo "$string2 is not a palindrome.\n";
}
