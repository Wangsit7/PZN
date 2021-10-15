<?php 

    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Budi";
    $manager->sayHello("Eko");

    $vp = new VicePresident();
    $vp->name = "Wangsit";
    $vp->sayHello("Eko");
?>