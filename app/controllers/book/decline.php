<?php
namespace Controller;

class Decline 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        header("Location: /ahome");

    }
}
