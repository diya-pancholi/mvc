<?php
namespace Controller;

class AddBookToDB 
{
    public function post()
    {
         
        if (\Controller\Utils::isSetAll($_POST["name"], $_POST["genre"]))
       { 
           $name = $_POST['name'];
        $genre = $_POST['genre'];
       
       \Model\Book::addBook($name, $genre);
        header("Location: /ahome");}
        else
        echo "Fill details";
    }
}