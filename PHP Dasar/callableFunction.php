<?php 
    function sayHello(string $name, callable $filter)
    {
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Wangsit", "strtoupper");
    sayHello("Wangsit", "strtolower");
    sayHello("Wangsit", function (string $name): string{
        return strtoupper($name);
    });
    sayHello("Wangsit", fn($name) => strtoupper($name));
?>