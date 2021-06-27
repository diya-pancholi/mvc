<?php
namespace Controller;

class AddBook 
{
    public function get() 
    {
        \Controller\Utils::loggedInAdmin();

           echo \View\Loader::make()->render("templates/addbook.twig", );
               
    }
}