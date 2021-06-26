<?php
namespace Controller;

class AddBook {
    public function get() {
        if($_SESSION['role']=="admin")
       { echo \View\Loader::make()->render("templates/addbook.twig", );}
        else
        {
            header("Location: /");  
        }  
    }

}