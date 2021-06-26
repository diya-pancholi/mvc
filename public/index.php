<?php

require __DIR__."/../vendor/autoload.php";

session_start();

Toro::serve(array(
    "/" => "\Controller\Index",
    "/home" => "\Controller\Home",
    "/post/:number" => "Controller\Post",
    "/viewrequest" => "\Controller\ViewRequest",
    "/seecheckedin" => "\Controller\CheckedIn",
    "/addbooklink" => "\Controller\AddBook",
    "/ahome" => "\Controller\AHome",
    "/loginviaimg" => "\Controller\Login",
    "/registerviaimg" => "\Controller\Signup",
    "/auth" => "\Controller\Auth",
    "/addbook" => "\Controller\AddBookToDB",
    "/approve" => "\Controller\Approve",
    "/disapprove" =>  "\Controller\Decline",
    "/checkout" => "\Controller\Checkout",
    "/register" => "\Controller\Register",
    "/seecheckout" => "\Controller\SeeCheckOut",
    "/logout" => "\Controller\LogOut",
    "/checkin" => "\Controller\CheckIn",
));

