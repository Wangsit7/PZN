<?php 
    require "data/Person.php";

    $wangsit = new Person("Wangsit", "Purbalingga");
    $wangsit->name = "Wangsit";
    $wangsit->sayHello("Budi");

    $joko = new Person("Joko", "Cirebon");
    $joko->name = "Joko";
    $joko->sayHello(null);

    $joko->info();
    $wangsit->info();
?>