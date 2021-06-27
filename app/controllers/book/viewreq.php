<?php
namespace Controller;

class ViewRequest
{
    public function get() 
    {
            \Controller\Utils::loggedInUser();
            $uid= $_SESSION['uid'];
            echo \View\Loader::make()->render("templates/viewrequest.twig", array(
                "books" => \Model\Book::showRequests($uid),
            ));
        
    }

}