<?php 
    function sum(int $first, int $last): int
    {
        $total = $first + $last;
        return $total;
    }

    $result = sum(10, 10);
    var_dump($result);

    $result = sum(100, 100);
    var_dump($result);

    function getFinalValue($value): string
    {
        if ($value >= 80) {
            return "A";
        } else if ($value >= 70) {
            return "B";
        } else if ($value >= 60) {
            return "C";
        } else if ($value >= 50) {
            return "D";
        } else {
            return "E";
        }

        echo "oopps";
    }

    $result = getFinalValue(80);
    var_dump($result);

    $result = getFinalValue(40);
    var_dump($result);
?>