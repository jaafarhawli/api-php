<?php
$a= $_POST["a"];
$b= $_POST["b"];
$c= $_POST["c"];

if($b==0) {
    $output = [
        "result" => "error"
    ];
}
else {
    $result= $a * 3 + $b * $c - $a / $b;
    $output= [
        "a" => $a,
        "b" => $b,
        "c" => $c,
        "result" => $result
    ];
}

echo json_encode($output);
?>