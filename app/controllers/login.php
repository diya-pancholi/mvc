<?php
namespace Controller;

class Login 
{
    public function get() 
    {
        echo \View\Loader::make()->render("templates/login.twig", );
    }

}