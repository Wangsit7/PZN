<?php 

    namespace Data;

    interface HasBrand
    {
        function getBrand(): string;
    }

    interface IsMaintenance
    {
        function isMaintenance(): bool;
    }

    interface Car extends HasBrand
    {

        function drive(): void;

        function getTier(): int;
    }

    class Avanza implements Car {

        public function drive(): void
        {
            echo "Drive Avanza" . PHP_EOL;
        }

        public function getTier(): int
        {
            return 4;
        }

        public function getBrand(): string
        {
            return "Toyota";
        }

        public function isMaintenance(): bool
        {
            return false;
        }
    }

?>