<?php
namespace Controller;

class Approve 
{
    public function get()
    {
        $id = $_GET['id'];
       \Model\Book::approve($id);
        header("Location: /ahome");
    }
}
