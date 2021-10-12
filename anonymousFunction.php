<?php 
    $sayHello = function (string $name) {
        echo "Hello $name" . PHP_EOL;
    };

    $sayHello("Wangsit");

    function sayGoodBye(string $name, $filter)
    {
        $finalName = $filter($name);
        echo "Good bye $finalName" . PHP_EOL;
    }

    sayGoodBye("Wangsit", function (string $name): string {
        return strtoupper("$name");
    });

    $filterFunction = function (string $name): string {
        return strtoupper("$name");
    };

    sayGoodBye("Wangsit", $filterFunction);

    $firstName = "Wangsit";
    $lastName = "Hardianto";

    $sayHelloWangsit = function () use ($firstName, $lastName) {
        echo "Hello $firstName $lastName";
    };

    $sayHelloWangsit();
?>