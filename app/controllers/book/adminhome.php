<?php
namespace Controller;

class AHome 
{
    public function get() 
    {
        \Controller\Utils::loggedInAdmin();

            echo \View\Loader::make()->render("templates/ahome.twig", array(
                "books" => \Model\Book::showRequested(),
            ));
   }
}