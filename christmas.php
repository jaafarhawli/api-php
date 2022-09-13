<?php
// $month = date("m");
// $day = date("d");

$month = $_GET["month"];
$day = $_GET["day"];

if($day>25 && $month==12) {
    $result= 365-$day-25;
}
else {
    $result = 25-$day + (12-$month)*30;
    if($month==3) {
        $result+=5;
    }
    if($month==4 || $month==5 || $month==1) {
        $result+=4;
    }
    if($month==6 || $month==7 || $month==2) {
        $result+=3;
    }
    if($month==8) {
        $result+=2;
    }
    if($month==9 || $month==10) {
        $result+=1;
    }
    if($day==31) {
        $result+=1;
    }
}

if($month>12 || $month<0 || $day>31 || $day<0) {
    $output = [
        "Days until christmas:" => "Error"
    ];
}
else {
    $output = [
        "Days until christmas:" => $result
    ];
}

echo json_encode($output);
?>