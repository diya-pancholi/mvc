<?php
namespace Controller;

class CheckIn {
    public function get(){
        $id = $_GET['id'];
        $uid= $_SESSION['uid'];
        \Model\Book::checkIn($uid,$id);
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/seecheckout");

}
}
