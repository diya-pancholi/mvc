<?php
namespace Controller;


class Checkout 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkOut($uid,$id);
        header("Location: /home");

    }
}

