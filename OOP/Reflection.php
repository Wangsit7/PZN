<?php 

    require_once "exception/ValidationException.php";
    require_once "data/LoginRequest.php";
    require_once "helper/ValidationUtil.php";

    $request = new LoginRequest();
    $request->username = "Wangsit";
    $request->password = "rahasia";

    // validationUtil::validate($request);

    ValidationUtil::validateReflection($request);
    

    class RegisterUserRequest
    {
        public ?string $name;
        public ?string $address;
        public ?string $email;
    }

    $register = new RegisterUserRequest();
    $register->name = "Wangsit";
    $register->address = "Purbalingga";
    $register->email = "wangsit@gmail.com";

    ValidationUtil::validateReflection($register);

?>