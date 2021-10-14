<?php 
    require_once "data/Conflict.php";
    require_once "data/Helper.php";

    $conlflict = new \Data\One\Conflict;
    $conlflict = new \Data\Two\Conflict;

    echo \Helper\APPLICATION . PHP_EOL;
    Helper\helpMe();

?>