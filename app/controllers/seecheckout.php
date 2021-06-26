<?php
namespace Controller;

class SeeCheckOut {
    public function get() {
        $uid=$_SESSION['uid'];
        echo \View\Loader::make()->render("templates/checkedout.twig", array(
            "books" => \Model\Book::seeCheckOut($uid),
        ));
    }

}