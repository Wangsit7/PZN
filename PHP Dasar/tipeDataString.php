<?php 
    echo 'Name : ';
    echo 'Wangsit Hardianto';
    echo "\n";

    echo "Name : ";
    echo "Wangsit\t Hardianto\n";

    echo <<<WANGSIT
    Selamat belajar PHP
        sekarang, kita belajar tipe data string
        ini adalah cara ketiga membuat string
        bisa menggunakan heredoc
    
    WANGSIT;

    echo <<<'WANGSIT'
        Selamat belajar PHP
        sekarang, kita belajar tipe data string
        ini adalah cara ketiga membuat string
        bisa menggunakan nowdoc
    WANGSIT;
?>