<?php
namespace Controller;

class ViewRequest
{
    public function get() 
    {
        if($_SESSION['role']=="student")
        {
            $uid= $_SESSION['uid'];
            echo \View\Loader::make()->render("templates/viewrequest.twig", array(
                "books" => \Model\Book::showRequests($uid),
            ));
        }
        else
        {
            header("Location: /");
        }
    }

}
