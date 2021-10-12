<?php 
    $values = array(10, 9, 8, 7.5);
    var_dump($values);

    $names = ["Wangsit", "Hardianto"];
    var_dump($names);

    var_dump($names[0]);
    $names[0] = "Galih";
    var_dump($names);

    unset($names[0]);
    var_dump($names);

    $names[] = "Budianto";
    var_dump($names);
    var_dump(count($names));

    $wangsit = array (
        "id" => "wangsit",
        "name" => "Wangsit Hardianto",
        "age" => 19,
        "address" => array(
            "city" => "Purbalingga",
            "country" => "Indonesia"
        )
    );
    var_dump($wangsit);
    var_dump($wangsit["name"]);
    var_dump($wangsit["address"]["country"]);

    $budi = [
        "id" => "budi",
        "name" => "Budi Budianto",
        "age" => 30,
        "address" => [
            "city" => "Citayam",
            "country" => "Indonesia"
        ] 
    ];
    var_dump($budi);
    var_dump($budi["id"]);
?>