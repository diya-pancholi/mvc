<?php
namespace Controller;

class AddBook {
    public function get() {
        echo \View\Loader::make()->render("templates/addbook.twig", );
    }

}