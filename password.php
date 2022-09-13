<?php
$password = $_POST["password"];

$pattern = "/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{12,}$/";
$pattern_verystrong = "/^(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9])(?=.*[a-z]).{14,}$/";
$results_main = preg_match($pattern,$password);
$results_verystrong = preg_match($pattern_verystrong,$password);

if($results_main) {
    if($results_verystrong) {
        $output = [
            "Strength" => "Very strong"
        ];
    }
    else {
        $output = [
            "Strength" => "Strong"
        ];
    }
}
else {
    $output = [
        "Strength" => "Weak"
    ];
}

echo json_encode($output);
?>