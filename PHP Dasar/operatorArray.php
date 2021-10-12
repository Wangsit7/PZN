<?php 
    $first = [
        "first_name" => "Wangsit"
    ];

    $last = [
        "last_name" => "Hardianto"
    ];

    $full = $first + $last;
    var_dump($full);

    $a = [
        "first_name" => "Wangsit",
        "last_name" => "Hardianto"
    ];

    $b = [
        "last_name" => "Hardianto",
        "first_name" => "Wangsit"
    ];

    var_dump($a == $b);
    var_dump($a === $b);
?>