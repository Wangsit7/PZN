<?php 
    $name = "Wangsit Hardianto";

    echo "Name : " . $name . PHP_EOL;
    echo "Value : " . 100 . PHP_EOL;

    $valueString = (string)100;
    var_dump($valueString);

    $valueInt = (int)"100";
    var_dump($valueInt);

    $valueFloat = (float)"1.01";
    var_dump($valueFloat);

    $name = "Wangsit";
    echo $name[0] . PHP_EOL;
    echo $name[1] . PHP_EOL;
    echo $name[2] . PHP_EOL;
    echo $name[3] . PHP_EOL;

    echo "Hallo $name, Selamat Belajar PHP" . PHP_EOL;

    $var = "Var";
    echo "This is {$var}s" . PHP_EOL;
?>