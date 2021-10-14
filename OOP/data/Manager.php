<?php 
    class Manager
    {
        var string $name;

        //: void berarti tidak mengembalikan nilai
        function sayHello(string $name): void
        {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    class VicePresident extends Manager {

    }
?>