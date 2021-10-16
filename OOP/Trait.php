<?php 

    require_once "data/SayGoodBye.php";

    use Data\Traits\{Person, SayGoodBye, SayHello};

    $person = new Person();
    $person->goodBye("Wangsit");
    $person->hello("Budi");

    $person->name = "Joko";
    var_dump($person);

    $person->run();
?>