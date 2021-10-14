<?php 
    require "data/Person.php";

    //membuat object
    $person = new Person("Wangsit", "Purbalingga");

    //membuat properties
    $person->name = "Wangsit";
    $person->address = "Purbalingga";
    

    var_dump($person);

    echo "Name : $person->name" . PHP_EOL;
    echo "Address : $person->address" . PHP_EOL;
    echo "Country : $person->country" . PHP_EOL;

    $person2 = new Person("Budi", null);
    $person2->name = "Budi";
    $person2->address = null;
    $person2->country = "Indonesia";

    var_dump($person2);

    //error
    //$person2->name = [];
?>