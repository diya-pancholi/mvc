<?php
namespace Controller;

class AHome 
{
    public function get() 
    {
        if($_SESSION['role']=="admin")
       {
            echo \View\Loader::make()->render("templates/ahome.twig", array(
                "books" => \Model\Book::showRequested(),
            ));
       }
       else
       {
           header("Location: /");
       }
    }

}

