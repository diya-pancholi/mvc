<?php
namespace Controller;

class Approve {
    public function get(){
        $id = $_GET['id'];
       \Model\Book::approve($id);
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/ahome");

}
}