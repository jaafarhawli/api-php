<?php
$string = $_GET["string"];
$rev_string = strrev($string);

if($string==$rev_string) {
    $result=true;
}
else {
    $result=false;
}

$output = [
    "string" => $string,
    "palindrome" => $result
];

echo json_encode($output);
?>