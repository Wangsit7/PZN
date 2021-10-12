<?php 
    $name = "Wangsit";
    $name = null;

    $age = null;

    echo "Name : ";
    echo $name;
    echo "\n";

    echo "Age : ";
    echo $age;
    echo "\n";

    // $name = "Wansgit";

    echo "Is Name Null? : ";
    var_dump(is_null($name));
    echo "\n";

    $contoh = "Wangsit";
    unset($contoh);

    $contoh ="Kurniawan";
    $contoh = null;
    var_dump(isset($contoh));
?>