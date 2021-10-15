<?php 

    require_once "data/Programmer.php";

    $company = new Company();
    $company->programmer = new Programmer("Wangsit");
    var_dump($company);

    $company->programmer = new BackendProgrammer("Wangsit");
    var_dump($company);

    $company->programmer = new FrontendProgrammer("Wangsit");
    var_dump($company);

    sayHelloProgrammer(new Programmer("Wangsit"));
    sayHelloProgrammer(new BackendProgrammer("Wangsit"));
    sayHelloProgrammer(new FrontendProgrammer("Wangsit"));

?>