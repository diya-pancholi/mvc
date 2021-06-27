<?php
namespace Controller;

class Home 
{
    public function get() 
    {
        \Controller\Utils::loggedInUser();

            echo \View\Loader::make()->render("templates/home.twig", array(
                "books" => \Model\Book::showAvailable(),
        ));
        
    }   
}