<?php
namespace Controller;

class ViewRequest {
    public function get() {
        $uid= $_SESSION['uid'];
        echo \View\Loader::make()->render("templates/viewrequest.twig", array(
            "books" => \Model\Book::showRequests($uid),
        ));
    }

}
