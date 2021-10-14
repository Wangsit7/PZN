<?php 
    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Wangsit";
    $manager->sayHello("Budi");

    $vp = new VicePresident();
    $vp->name = "Wangsit";
    $vp->sayHello("Budi");
?>