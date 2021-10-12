<?php 
    $firstName = "Wangsit";
    $lastName = "Hardianto";

    $anonymouseFunction = function () use ($firstName, $lastName): string {
        return "Hello $firstName $lastName" . PHP_EOL;
    };

    $arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

    echo $anonymouseFunction();
    echo $arrowFunction();
?>