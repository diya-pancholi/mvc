<?php
namespace Controller;

class AddBookToDB {
    public function post(){
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        \Model\Book::addBook($name, $genre);
    $host  = $_SERVER['HTTP_HOST'];
    header("Location: http://$host/ahome");

}
}