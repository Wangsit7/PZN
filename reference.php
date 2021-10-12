<?php 
    $name = "Wangsit";

    $otherName = &$name;
    $otherName = "Hardianto";

    echo $name . PHP_EOL;

    function increment(int &$value)
    {
        $value++;
    }

    $counter = 1;
    increment($counter);

    echo $counter . PHP_EOL;

    function &getValue()
    {
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    echo $a . PHP_EOL;
?>