<?php

    require_once "data/Food.php";
    require_once "data/Animal.php";
    require_once "data/AnimalShelter.php";

    $catShelter = new \Data\CatShelter();
    $cat = $catShelter->adopt("Kity");
    $cat->eat(new \Data\AnimalFood());

    $dogShelter = new \Data\DogShelter;
    $dog = $dogShelter->adopt("Dogy");
    $dog->eat(new \Data\Food());
?>