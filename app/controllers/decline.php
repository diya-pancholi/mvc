<?php
namespace Controller;

class Decline {
    public function get(){
        $id = $_GET['id'];
       \Model\Book::approve($id);
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/ahome");

}
}