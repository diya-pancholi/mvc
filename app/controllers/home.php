<?php
namespace Controller;

class Home 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            echo \View\Loader::make()->render("templates/home.twig", array(
                "books" => \Model\Book::showAvailable(),
        ));
        }
        else
        {
            header("Location: /");
        }
    }   
}

