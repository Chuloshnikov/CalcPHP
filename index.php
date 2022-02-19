<?php
function calc($a, $b, $c) {
    if ($b == "+") {
    $rezult =  $a + $c;
    } else if ($b == "-") {
        $rezult =  $a - $c;
    } else if ($b == "*") {
        $rezult =  $a * $c;
    } else if ($b == "/") {
        $rezult =  $a / $c;
    };
    return $rezult;
}

echo "<br>" . calc(78, '-', 74);
?>