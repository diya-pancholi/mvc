<?php
namespace Controller;

class Signup 
{
    public function get() 
    {
        echo \View\Loader::make()->render("templates/register.twig", );
    }

}