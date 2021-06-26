<?php
namespace Controller;

class CheckedIn 
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            echo \View\Loader::make()->render("templates/checkedin.twig", array(
                "books" => \Model\Book::showCheckedIn(),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}
