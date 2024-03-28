<?php
function is_Valid_Parentheses(string $str):bool{
    $open_parentheses = [];
    $allParentheses = [
        '(' => ')',
        '[' => ']',
        '{' => '}'
    ];
    foreach(str_split($str) as $parentheses){
        if(array_key_exists($parentheses , $allParentheses)){
            array_push($open_parentheses , $parentheses);
        }
        else if(empty($open_parentheses) || $allParentheses[array_pop($open_parentheses)] != $parentheses){
            return false;
        }
    }
    return empty($open_parentheses);
}
// $str = (string)readline();
$str = "()[]{}";
if(is_Valid_Parentheses($str)) echo "True\n";
else echo "Fslse\n";