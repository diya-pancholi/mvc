<?php
namespace Controller;

class CheckIn 
{
    public function get()
    {
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkIn($uid,$id);
        header("Location: /seecheckout");
    }
}