<?php 

    require_once "data/Category.php";

    $category = new Category();
    $category->setName("Handphone");
    $category->setExpensive(true);


    //tidak dapat dirubah string name
    $category->setName = "      ";
    echo "Name : {$category->getName()}" . PHP_EOL;
    echo "Expensive : {$category->isExpensive()}" . PHP_EOL;

?>