<?php 

    $matches = [];
    $result = preg_match_all("/Wang|anto/i", "Wangsit Hardianto", $matches);

    var_dump($result);
    var_dump($matches);

    $result = preg_replace("/anjing|bangsat/i", "***", "dasar lu Anjing dan Bangsat!");

    var_dump($result);

    $result = preg_split("/[\s,-]/", "Wangsit Hardianto,Chameleon-Senon");

    var_dump($result);
?>