<?php
namespace Controller;

class CheckedIn {
    public function get() {
        echo \View\Loader::make()->render("templates/checkedin.twig", array(
            "books" => \Model\Book::showCheckedIn(),
        ));
    }

}
